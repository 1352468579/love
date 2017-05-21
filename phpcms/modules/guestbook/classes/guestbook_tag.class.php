<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class guestbook_tag {
 	private $guestbook_db,$type_db;
	
	public function __construct() {
		$this->db = pc_base::load_model('guestbook_model');
 	}
	
 
	public function lists($data) {
		$siteid = intval($data['siteid']);
		$leixing = intval($data['leixing']);
		if (!$siteid)$siteid = get_siteid();
		$sql = array('siteid'=>$siteid,'leixing'=>$leixing,'passed'=>'1');
  		$r = $this->db->select($sql, '*', $data['limit'], $data['order']);
		
		return new_html_special_chars($r);
	}
	public function count($data){
		$siteid = intval($data['siteid']);
		$leixing = intval($data['leixing']);
		if (!$siteid)$siteid = get_siteid();
		$sql = array('siteid'=>$siteid,'leixing'=>$leixing,'passed'=>'1');
		return $this->db->count($sql);
		 
	}
	
}