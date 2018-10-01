<?php

namespace Home\Model;

use Think\Model;

class StudentModel extends Model {
	

	/**
	 * 比对数据库的学生信息 账户是否存在
	 * @param  [type] $std_name [description]
	 * @param  [type] $std_pwd  [description]
	 * @return [type]           [description]
	 */
	public function check ($std_num,$std_pwd) {
		$boo = $this->where(array('$std_num' => $std_num, '$std_pwd' =>$std_pwd))->find();
		if (!empty($boo)) {
			return ture;
		}else {
			return false;
		}
	}
	public function register ($std_num,$std_pwd,$email,$tel) {
		if (is_login_reg()) {
			pop('已注册！');
			return false;
		}else {
			$data = array(
				'std_num' => $std_num, 
				'std_pwd' => $std_pwd, 
				'email' => $email, 
				'tel' => $tel
				);
			$id = $this->data($data)->add();
			if ($id) {
				pop('注册成功！');
				return true;
			}
		}
		
	}
}