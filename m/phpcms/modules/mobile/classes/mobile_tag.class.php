<?php
class mobile_tag {
	//数据库连接
	private $db;
	
	public function __construct() {
		$this->db = pc_base::load_model('content_model');
		$this->position = pc_base::load_model('position_data_model');
	}
	/**
	 * 初始化模型
	 * @param $catid 栏目id
	 */
	public function set_modelid($catid) {
		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$this->category = getcache('category_content_'.$siteid,'commons');
		$this->modelid = $this->category[$catid]['modelid'];
		$this->db->set_model($this->modelid);
		$this->tablename = $this->db->table_name;
	}
	
	/**
	 * 分页统计
	 * @param $data
	 */	
	public function count($data) {
		if($data['action'] == 'lists') {
			if(isset($data['where'])) {
				$sql = $data['where'];
			} else {
				
				$catid = intval($data['catid']);
				$this->set_modelid($catid);
				if(!$this->category[$catid]) return false;
				if($this->category[$catid]['child']) {
					$catids_str = $this->category[$catid]['arrchildid'];
					$pos = strpos($catids_str,',')+1;
					$catids_str = substr($catids_str, $pos);
					$sql = "status=99 AND catid IN ($catids_str)";
				} else {
					$sql = "status=99 AND catid='$catid'";
				}
			}
			return $this->db->count($sql);
		}
	}
	
	public function category($data) {
		$siteid = $data['siteid'] = intval(trim($data['siteid']))!== 0 ? intval(trim($data['siteid'])) : 1;
		$cates = getcache('mobile_cate','mobile');		
		$i = 1;
		if(is_array($cates) && !empty($cates)) {
			foreach ($cates as $k=>$v) {
				if($i>$data['limit']) break;
				if($siteid && $v['siteid']!=$siteid) continue;			
				if($v['parentid']==$data['catid']) {
					$array[$k] = $v;
					$i++;
				}
			}
		}
		return $array;
	}
   
   
    public function page($data) {
		$siteid = $data['siteid'] = intval(trim($data['siteid']))!== 0 ? intval(trim($data['siteid'])) : 1;
		$pages = getcache('mobile_page','mobile');		
		$i = 1;
		if(is_array($pages) && !empty($pages)) {
			foreach ($pages as $k=>$v) {
				if($i>$data['limit']) break;
				if($siteid && $v['siteid']!=$siteid) continue;			
				if($v['parentid']==$data['catid']) {
					$array[$k] = $v;
					$i++;
				}
			}
		}
		return $array;
	}
	
	public function lists($data) {
		$data['siteid'] = intval(trim($data['siteid']))!== 0 ? intval(trim($data['siteid'])) : 1;
		$CATES = getcache('mobile_cate','mobile');
		$CATE = $CATES[$data['catid']];
		if(isset($data['where'])) {
			$sql = $data['where'];
		} else {
			$catid = intval($data['catid']);
				$this->set_modelid($catid);
				if(!$this->category[$catid]) return false;
				if($this->category[$catid]['child']) {
					$catids_str = $this->category[$catid]['arrchildid'];
					$pos = strpos($catids_str,',')+1;
					$catids_str = substr($catids_str, $pos);
					$sql = "status=99 AND catid IN ($catids_str)";
				} else {
					$sql = "status=99 AND catid='$catid'";
				}
		}
		$order = $data['order'];
		$return = $this->db->select($sql, '*', $data['limit'], $order, '', 'id');
						
		//调用副表的数据
		if (isset($data['moreinfo']) && intval($data['moreinfo']) == 1) {
			$ids = array();
			foreach ($return as $v) {
				if (isset($v['id']) && !empty($v['id'])) {
					$ids[] = $v['id'];
				} else {
					continue;
				}
			}
			if (!empty($ids)) {
				$this->db->table_name = $this->db->table_name.'_data';
				$ids = implode('\',\'', $ids);
				$r = $this->db->select("`id` IN ('$ids')", '*', '', '', '', 'id');
				if (!empty($r)) {
					foreach ($r as $k=>$v) {
						if (isset($return[$k])) $return[$k] = array_merge($v, $return[$k]);
					}
				}
			}
		}
		return $return;
	}
	
	/**
	 * 推荐位标签
	 * @param $data
	 */
	public function position($data) {
		$sql = '';
		$array = array();
		$posid = intval($data['posid']);
		$order = $data['order'];
		$thumb = (empty($data['thumb']) || intval($data['thumb']) == 0) ? 0 : 1;
		$siteid = $GLOBALS['siteid'] ? $GLOBALS['siteid'] : 1;
		$catid = (empty($data['catid']) || $data['catid'] == 0) ? '' : intval($data['catid']);
		//if(!$this->category[$catid]) return false;
		if($catid && $this->category[$catid]['child']) {
			$catids_str = $this->category[$catid]['arrchildid'];
			$pos = strpos($catids_str,',')+1;
			$catids_str = substr($catids_str, $pos);
			$sql = "`catid` IN ($catids_str) AND ";
		}  elseif($catid && !$this->category[$catid]['child']) {
				$sql = "`catid` = '$catid' AND ";
		}
		if($thumb) $sql .= "`thumb` = '1' AND ";
		$sql .= "`posid` = '$posid' AND `siteid` = '".$siteid."'";
		$pos_arr = $this->position->select($sql, '*', $data['limit'],$order);
		if(!empty($pos_arr)) {
			foreach ($pos_arr as $info) {
				$key = $info['catid'].'-'.$info['id'];
				$array[$key] = string2array($info['data']);
				$array[$key]['url'] = show_url($info['catid'],$info['id']);
			}
		}
		return $array;
	}
	
	
	/**
	 * 排行榜标签
	 * @param $data
	 */
	public function hits($data) {
		$catid = intval($data['catid']);
		if(!$this->set_modelid($catid)) return false;

		$this->hits_db = pc_base::load_model('hits_model');
		$sql = $desc = $ids = '';
		$array = $ids_array = array();
		$order = $data['order'];
		$hitsid = 'c-'.$this->modelid.'-%';
		$sql = "hitsid LIKE '$hitsid'";
		if(isset($data['day'])) {
			$updatetime = SYS_TIME-intval($data['day'])*86400;
			$sql .= " AND updatetime>'$updatetime'";
		}
		if($this->category[$catid]['child']) {
			$catids_str = $this->category[$catid]['arrchildid'];
			$pos = strpos($catids_str,',')+1;
			$catids_str = substr($catids_str, $pos);
			$sql .= " AND catid IN ($catids_str)";
		} else {
			$sql .= " AND catid='$catid'";
		}
		$hits = array();
		$result = $this->hits_db->select($sql, '*', $data['limit'], $order);
		foreach ($result as $r) {
			$pos = strpos($r['hitsid'],'-',2) + 1;
			$ids_array[] = $id = substr($r['hitsid'],$pos);
			$hits[$id] = $r;
		}
		$ids = implode(',', $ids_array);
		if($ids) {
			$sql = "status=99 AND id IN ($ids)";
		} else {
			$sql = '';
		}
		$this->db->table_name = $this->tablename;
		$result = $this->db->select($sql, '*', $data['limit'],'','','id');
		foreach ($ids_array as $id) {
			if($result[$id]['title']!='') {
				$array[$id] = $result[$id];
				$array[$id] = array_merge($array[$id], $hits[$id]);
			}
		}
		return $array;
	}
}