<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form', '', 0);
class guestbook extends admin {
	function __construct() {
		parent::__construct();
		$this->M = new_html_special_chars(getcache('guestbook', 'commons'));
		$this->db = pc_base::load_model('guestbook_model');
	}

	public function init() {
		
		$where = array('siteid'=>$this->get_siteid(),'passed'=>'1');
 		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$infos = $this->db->listinfo($where,$order = 'id DESC,listorder DESC',$page, $pages = '10');
		$pages = $this->db->pages;
		include $this->admin_tpl('guestbook_list');
	}

	 
	
	
	//更新排序
 	public function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $id => $listorder) {
				$this->db->update(array('listorder'=>$listorder),array('id'=>$id));
			}
			showmessage(L('operation_success'),HTTP_REFERER);
		} 
	}
	
	
	public function show() {
		if(isset($_POST['dosubmit'])){
 			$id = intval($_GET['id']);
			if($id < 1) return false;
			$_POST['guestbook']['replytime']=SYS_TIME;
			$this->db->update($_POST['guestbook'],array('id'=>$id));
			
			showmessage(L('operation_success'),'?m=guestbook&c=guestbook&a=show','', 'show');
			
		}else{
 			$show_validator = $show_scroll = $show_header = true;
			
			//解出链接内容
			$info = $this->db->get_one(array('id'=>$_GET['id']));
			if(!$info) showmessage(L('guestbook_exit'));
			extract($info); 
 			include $this->admin_tpl('guestbook_show');
		}

	}
	
	
	public function delete() {
  		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
 					//批量删除留言板
					$this->db->delete(array('id'=>$id_arr));
					 
				}
				showmessage(L('operation_success'),HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				//删除留言板
				$result = $this->db->delete(array('id'=>$id));
				 
				if($result){
					showmessage(L('operation_success'),HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"),HTTP_REFERER);
				}
			}
			showmessage(L('operation_success'), HTTP_REFERER);
		}
	}
//批量分类到0
public function leixing0(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('leixing'=>0),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('leixing'=>0),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}	
}
//批量分类到1
public function leixing1(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('leixing'=>1),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('leixing'=>1),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}	
}
//批量分类到2
public function leixing2(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('leixing'=>2),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('leixing'=>2),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}	
}
//批量分类到3
public function leixing3(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('leixing'=>3),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('leixing'=>3),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}	
}
//批量分类到1
public function leixing4(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('leixing'=>4),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('leixing'=>4),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}	
}
	
  	//批量审核 ...
 	public function check_register(){
		if(isset($_POST['dosubmit'])) {
			if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
				showmessage(L('illegal_parameters'), HTTP_REFERER);
			} else {
				if(is_array($_POST['id'])){//批量审核
					foreach($_POST['id'] as $id_arr) {
						$this->db->update(array('passed'=>1),array('id'=>$id_arr));
					}
					showmessage(L('operation_success'), HTTP_REFERER);
				}else{//单个审核
					$id = intval($_GET['id']);
					if($id < 1) return false;
					$result = $this->db->update(array('passed'=>1),array('id'=>$id));
					if($result){
						showmessage(L('operation_success'), HTTP_REFERER);
					}else {
						showmessage(L("operation_failure"), HTTP_REFERER);
					}
				}
			}
		}else {//读取未审核列表
			$where = array('siteid'=>$this->get_siteid(),'passed'=>0);
			$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
			$infos = $this->db->listinfo($where,'id DESC',$page, $pages = '10');
			$pages = $this->db->pages;
			include $this->admin_tpl('check_register_list');
		}
		
	}
//批量未审核 ...
public function check_noregister(){
	if(isset($_POST['dosubmit'])) {
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $id_arr) {
					$this->db->update(array('passed'=>0),array('id'=>$id_arr));
				}
				showmessage(L('operation_success'), HTTP_REFERER);
			}else{
				$id = intval($_GET['id']);
				if($id < 1) return false;
				$result = $this->db->update(array('passed'=>0),array('id'=>$id));
				if($result){
					showmessage(L('operation_success'), HTTP_REFERER);
				}else {
					showmessage(L("operation_failure"), HTTP_REFERER);
				}
			}
		}
	}else {//读取未审核列表
		$where = array('siteid'=>$this->get_siteid(),'passed'=>0);
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$infos = $this->db->listinfo($where,'id DESC',$page, $pages = '10');
		$pages = $this->db->pages;
		include $this->admin_tpl('check_register_list');
	}
	
} 
 	//单个审核申请
 	public function check(){
		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else { 
			$id = intval($_GET['id']);
			if($id < 1) return false;
			//删除留言板
			$result = $this->db->update(array('passed'=>1),array('id'=>$id));
			if($result){
				showmessage(L('operation_success'),HTTP_REFERER);
			}else {
				showmessage(L("operation_failure"),HTTP_REFERER);
			}
			 
		}
	}

    
	
}
?>