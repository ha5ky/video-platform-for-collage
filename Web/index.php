<?php
/* 网站文件: 系统唯一入口 */

	/*	调试模式开启	*/
	define ('APP_DEBUG',true);
	
	/*	定义安全目录	*/
	define('SAFE_PATH',realpath('../').'/');	
	define('BUILD_DIR_SECURE', true); //使用安全目录，启用index.html

	/*	初始化目录	*/
	define('THINK_PATH',SAFE_PATH.'Tp/');
	define('APP_PATH', SAFE_PATH.'Ap/' );
	define('RUNTIME_PATH', SAFE_PATH.'Rt/' );
	define('WEB_PATH',SAFE_PATH.'Web/');

	/*	载入核心	*/	
	require THINK_PATH.'ThinkPHP.php';	
	
