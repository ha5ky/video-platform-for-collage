<?php

namespace Admin\Model;
use Think\Model;

/**
* 
*/
class ConfigModel extends Model
{
	protected $tableName = 'config'; 

	public function setName($name) {
		$data = array(
			'conf_name' => $name
			);
		$id = $this->data($data)->add();
		return $this->where(array('conf_id' => $id))->getField('conf_name');
	}

	/**
	 * 获取设定的名字
	 */
	public function setValue($value) {
		$data = array(
			'conf_value' => $value
			);
		return $this->data($data)->add();
		// return $this->where(array('conf_id' => $id))->getField('conf_value');
	}

	/**
	 * 查询信息
	 */
	public function getValue($conf_name) {
		return $this->where(array('conf_name' => $conf_name))->getField('conf_value');
	}	

	/**
	 * 查询信息
	 */
	public function getAll() {
		return $this->where()->select();
	}

	/**
	 * 新建
	 */
	public function newDict($conf_name,$conf_value,$conf_sort,$conf_pid) {
		$data = array(
			'conf_name' => $conf_name,
			'conf_sort' => $conf_sort,
			);
		$id=$this->where($data)->getField('conf_id');
		if($id>0){
			return 0;
		}else{
			$data = array(
				'conf_name' => $conf_name,
				'conf_sort' => $conf_sort,
				'conf_value' => $conf_value,
				'conf_pid' => $conf_pid,
				);		
			return $this->data($data)->add();	
		}
	}

	/**
	 * 删除系统设置数据
	 */
	public function delConf($conf_id) {
		$where = array(
			'conf_id' => $conf_id
			);
		return $this->where($where)->delete();
	}

	/**
	 * 修改系统设置数据
	 */
	public function savConf($conf_id,$name,$value,$sort) {
		$where = array(
			'conf_id' => $conf_id
			);
		$data = array(
			'conf_name' => $name,
			'conf_value' => $value,
			'conf_sort' => $sort
			);
		return $this->where($where)->save($data);
	}
}