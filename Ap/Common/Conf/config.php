<?php
/* 系统文件: 所有系统级别的配置 */

return array(
	/* 模块相关配置 */
	'DEFAULT_MODULE'     => 'Home',
	'MODULE_DENY_LIST'   => array('Common'),

	/* 系统数据加密设置 */
	'DATA_AUTH_KEY' => 'T;[+CzuYg|K/.sxyr$!&~VwkNtiqlmZ-81S)IaUd', //默认数据加密KEY
	
	//静态缓存
	'HTML_CACHE_ON'     =>    false, // 开启静态缓存
	'HTML_CACHE_TIME'   =>    60,   // 全局静态缓存有效期（秒）
	'HTML_FILE_SUFFIX'  =>    '.html', // 设置静态缓存文件后缀
	'HTML_CACHE_RULES'  =>     array(  // 定义静态缓存规则
     	// 定义格式1 数组方式
     	'*'=>array('{$_SERVER.REQUEST_URI|md5}'), 
	),

	/* 调试配置 */
	'SHOW_PAGE_TRACE' => false,

	 /* URL配置 */
	'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'            => 1, //URL模式
	'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
	'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
	'URL_HTML_SUFFIX'	=>	'html',	//URL MODE决定伪静态和url显示

	/* 全局过滤配置 */
	'DEFAULT_FILTER'	=>	'strip_tags,stripslashes,htmlspecialchars', //全局过滤函数	

	/* 其他配置 */
	'LOAD_EXT_CONFIG' => 'database', //数据库配置,使用外部配置
	'LOAD_EXT_FILE'	=> 'common',	
	'TMPL_VAR_IDENTIFY' => 'array', //点语法解析
	
);
