<?php

use Home\Model\StudentModel;

/**
 * 判断是否登录 和注册
 * @return boolean [description]
 */
function is_login_reg () {
	$CheckLoginModel = new StudentModel();
	$std_num  = I('Username');
	$std_pwd  = I('Password');
	if ($CheckLoginModel->check($std_num,$std_pwd)) {
		return true;
	}else {
		return false;
	}
}

/**
 * 判断是否注册
 */
// function is_reg () {
// 	$std_num = I('Username');
// 	$std_pwd = I('Password');
// 	if (check()) {
// 		return true;
// 	}else {
// 		return false;
// 	}
