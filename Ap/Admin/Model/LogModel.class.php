<?php
namespace Admin\Model;
use Think\Model;

class LogModel extends Model
{
	protected $tableName = 'log'; 

	/**
	 * 写日志
	 */
	public function w_log($log_time,$log_where,$log_who,$log_what,$log_how){
		$data = array(
			'log_time' => $log_time,
			'log_where' => $log_where,
			'log_who' => $log_who,
			'log_what' => $log_what,
			'log_how' => $log_how,
			);
		return $this->data($data)->add();		
	}
}