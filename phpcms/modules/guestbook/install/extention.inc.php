<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$parentid = $menu_db->insert(array('name'=>'guestbook', 'parentid'=>29, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'check_guestbook', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'check_register', 'data'=>'', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'show_guestbook', 'parentid'=>$parentid, 'm'=>'guestbook', 'c'=>'guestbook', 'a'=>'show', 'data'=>'', 'listorder'=>0, 'display'=>'0'));


$language = array('guestbook'=>'留言板', 'edit_guestbook'=>'查看留言', 'delete_guestbook'=>'删除留言','check_guestbook'=>'审核留言');
?>