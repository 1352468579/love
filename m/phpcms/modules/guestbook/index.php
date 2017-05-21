<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('form', '', 0);
class index {
	public function __construct() {
		$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : get_siteid();
  		define("SITEID",$siteid);
		$this->db = pc_base::load_model('guestbook_model');
	}
	private function _session_start() {
		$session_storage = 'session_'.pc_base::load_config('system','session_storage');
		pc_base::load_sys_class($session_storage);
	}
	
	public function init() {
		$siteid = SITEID;
		include template('guestbook', 'index');
	}
	

	public function register() { 
 		$siteid = SITEID;
 		if(isset($_POST['dosubmit'])){
			$this->_session_start();
			$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);
			if ($_SESSION['code'] != strtolower($code)) {
					showmessage(L('code_error'), HTTP_REFERER);
			}
			
			$name = isset($_POST['name']) && is_username(trim($_POST['name'])) ? trim($_POST['name']) : showmessage(L('name_not_empty'),HTTP_REFERER);
			$name = safe_replace($name);
			
			$qq=$_POST['qq'];
// 			if(!isset($qq) || !preg_match('/^[1-9]*[1-9][0-9]*$/',$qq)){
//				
// 				showmessage(L('qq_not_empty'),HTTP_REFERER);
// 			}
			
			$email=$_POST['email'];
// 			if(!isset($email) || !is_email($email)){
// 				showmessage(L('email_not_empty'),HTTP_REFERER);
// 			}
			
			$phone=$_POST['phone'];
//			if(!isset($phone) || !preg_match('/^1([0-9]{10})$/',$phone)){
// 				showmessage(L('phone_not_empty'),HTTP_REFERER);
// 			}
			
			$content=$_POST['content'];
			if($content==""){
 				showmessage(L('content_not_empty'),HTTP_REFERER);
 			}
 			$time=SYS_TIME;
 			$sql = array('siteid'=>$siteid,'name'=>$name,'qq'=>$qq,'email'=>$email,'phone'=>$phone,'content'=>new_addslashes($content),'addtime'=>$time);
 			 
 			$id=$this->db->insert($sql,true);
			if(!$id) return FALSE;
 			showmessage(L('add_success'),  HTTP_REFERER);
 		}else {
   			include template('guestbook', 'register');
 		}
	} 
	
}
?>