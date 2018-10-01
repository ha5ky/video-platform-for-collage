<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    
    /* 构造函数，判断登录 */
    public function _initialize(){
        $config = M('config');
        $ma_name = $config->order('conf_id desc')->find();
        $this->assign('manage_name',$ma_name['conf_value']);
        if(!is_login()){
            $this->redirect('public/index');
        }
        
    }

    /**
     * 管理员界面
     * @return [type] [description]
     */
    public function index(){
        $log = M('log');
        // $conf = new \Admin\Model\ConfigModel();
        $conf = M('config');
        // $ma_name = $conf->order('conf_id desc')->find();
        // dump($ma_name);die();
        $where['log_what'] = array('like','login%');
        $time = $log->where(array('log_who' => session('user_name')))->where($where)->order('log_time desc')->limit(2)->select();
        // dump($time);die();
        $this->assign('time',$time[1]['log_time']);
        // $this->assign('manage_name',$ma_name['conf_value']);
        $this->assign('user_name',session('user_name'));
        $this->display('main');
    }


}