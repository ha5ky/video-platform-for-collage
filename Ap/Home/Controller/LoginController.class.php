<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\StudentModel;

class LoginController extends Controller {
	public function login () {
		if (IS_POST) {
        	pop('登录成功！');
        	$this->display('Index/index');
        }else {
        	pop('该账户不存在！');
        	$this->display('Index/index');
        }
	}
}