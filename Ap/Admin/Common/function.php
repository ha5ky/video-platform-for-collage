<?php


/*	判断用户登录状态	 */
function is_login(){
    return session('user_id')>0 ? session('user_id') : 0;
}

function g_pwd($o_pwd,$salt="efan.in"){
	return md5($salt.$o_pwd);
}

function v_pwd($i_pwd,$d_pwd,$salt="efan.in"){
	return md5($salt.$i_pwd)==$d_pwd?1:0;
}

function g_conf($conf_name){
	$data=new \Admin\Model\ConfigModel();
	return $data->getValue($conf_name);
}

function w_log($log_time,$log_where,$log_who,$log_what,$log_how){
	$data=new \Admin\Model\LogModel();
	return $data->w_log($log_time,$log_where,$log_who,$log_what,$log_how);
}

function c_menu($action_name){
	//定义4数组
	//判断1234
	$action = array(
		array(
			'top',
			'top_video',
			'config',
			'user',
			'red_log'
			),
		array(
			'teacher',
			'course',
			'chapter',
			'student',
			'count'
			),
		array(
			'materials',
			'count_t',
			'comment'
			),
		array(
			'newPwd',
			'logout'
			)
		);

	foreach ($action as $key => $value) {
		foreach ($value as $k => $v) {
			if ($action_name == $v) {
				$result = $key;
				return $result;
				// break 2;
			}
		}
	}
	// }dump($action);die();
	
}

?>