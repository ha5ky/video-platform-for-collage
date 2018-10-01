<?php
namespace Admin\Controller;

use Think\Controller;

class OtherController extends Controller 
{

	/**
	 * 初始化方法
	 */
	public function _initialize() {

	}

	/**
	 * 修改密码
	 */
	public function newPwd() {
		$this->assign('num', session('user_num'));
		$this->assign('name',session('user_name'));
		$this->assign('id', session('user_id'));
		$this->display('Other/updatePwd');
	}

	public function update_p() {
		$data = new \Admin\Model\TeacherModel();
		if (I('t_pwd') == I('confirm_pwd')) {
			$pwd = g_pwd(I('t_pwd'));
			if($data->confirmPwd(I('tid'),$pwd)) {
	            if(w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户修改成功")) {
	                $this->success('用户修改成功');
	            }else {
	            	w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户修改失败");
	            	$this->error('用户修改失败');
	            }
        	}
		}else {
			$this->error('密码不正确');
		}
	}
}