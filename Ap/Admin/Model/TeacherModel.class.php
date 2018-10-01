<?php
namespace Admin\Model;
use Think\Model;

class TeacherModel extends Model
{
	/**
	 * 查询信息
	 */
	public function t_search ($num) {
		return $this->where(array('t_num' => $num))->find();
	}

	/**
	 * 删除教师
	 */
	public function t_del ($num) {
		return $this->where(array('t_num' => $num))->delete();
	}

	/**
	 * 更新教师信息
	 */
	public function t_update ($tid,$t_rname,$t_num,$pwd,$t_role) {
		$data = array(
			't_rname' => $t_rname,
			't_num' => $t_num,
			't_pwd' => $pwd,
			't_role' => $t_role
			);
		return $this->where(array('tid' => $tid))->save($data);
	}

	/**
	 * 增加小数量教师
	 */
	public function t_add ($name,$num,$role) {
		$data = array(
			't_rname'  => $name,
			't_num' => $num,
			't_role' => $role
			);
		return $this->data($data)->add();
	}

	/**
	 * 只修改密码
	 */
	public function confirmPwd($tid,$pwd) {
		$data = array(
			't_pwd' => $pwd
			);
		return $this->where(array('tid' => $tid))->field('t_pwd')->save($data);
	}
}