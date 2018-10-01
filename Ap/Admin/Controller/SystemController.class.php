<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends Controller {
    
    /* 构造函数，判断登录 */
    public function _initialize(){
        if(!is_login()){

            $this->redirect('public/index');
        }else{
            if (session('user_role') == 0) {
                $this->error('无权限');
            }
        }   
    }

    /**
     * 管理员界面
     * @return [type] [description]
     */
    public function index(){
        $this->redirect('index/index');
    }

    /**
     * 数据字典
     * @return [type] [description]
     */
    public function config(){
        $data=new \Admin\Model\ConfigModel();
        $conf=$data->getAll();

        $this->assign("conf",$conf);
        $this->display('System/config');
    }

    public function config_add(){
        if(IS_POST){
            //处理数据
            $data=new \Admin\Model\ConfigModel();
            $id=$data->newDict(i('conf_name'),i('conf_value'),i('conf_sort'),i('conf_pid'));
            if($id>0){
                $this->success("数据添加成功",U("/admin/system/config"));
            }else{
                $this->error("参数输入不正确");
            }
        }else{
            
            $this->display();            
        }

    }
    
    /**
     * 数据库显示
     */
    public function user(){
        // $data=new \Admin\Model\ConfigModel();
        // $conf=$data->getAll();

        // $this->assign("conf",$conf);
        // $this->display();
        $teacher = M('teacher');
        $conf = $teacher->where('t_role > 0')->order('tid')->select();
        $this->assign('conf', $conf);
        $this->display('System/user');
    }

    

    public function db_data_v(){
        $teacher = M('video');
        $list = $teacher->select();
        $this->assign('list', $list);
        $this->display('video/db_data_v');
    }

    /**
     * 查看日志
     */
    public function red_log () {
        $log = M('log');
        $count = $log->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $list = $log->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display('System/red_log');
    }

    /**
     * 删除
     * @return [type] [description]
     */
    public function delete_t() {
        $data=new \Admin\Model\TeacherModel();
        $data->t_del(I('num'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
        }
    }

    
    public function delete_v() {
        $data=new \Admin\Model\VideoModel();
        $data->video_del(I('vid'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    /**
     * 删除设置数据
     */
    public function delete_conf () {
        $data = new \Admin\Model\ConfigModel();
        if($data->delConf(I('id'))){
            if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
                pop('删除成功');
                $this->success();
            }
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    /**
     * 添加
     * @return [type] [description]
     */
    public function insert_t() {
        $this->display('System/details_t_insert');
    }

    /**
     * 插入数据
     * @return [type] [description]
     */
    public function insert_tec() {
        $data=new \Admin\Model\TeacherModel();
        $name = I('t_rname');
        $num = I('t_num');
        $role = I('t_role');
        $data->t_add($name,$num,$role);
        if(w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加成功")) {
            $this->success('用户添加成功');
        }
    }
    

    /**
     * 具体数据页面
     * @return [type] [description]
     */
    public function details_t() {
        $this->assign('tid', I('tid'));
        $this->display('System/details_t');
    }

    

    public function details_v() {
        $this->assign('vid', I('video_id'));
        $this->display('Video/details_v');
    }

    public function details_conf () {
        $this->assign('conf_id', I('id'));
        $this->display('System/details_conf');
    }

    /**
     * 修改数据
     * @return [type] [description]
     */
    public function update_t() {
        $data=new \Admin\Model\TeacherModel();
        $tid = I('tid');
        $name = I('t_rname');
        $num = I('t_num');
        $role = I('t_role');
        if($data->t_update($tid,$name,$num,$role)) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    public function update_conf() {
        $data = new \Admin\Model\ConfigModel();
        if($data->savConf(I('conf_id'),I('name'),I('value'),I('sort'))) {
            if(w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    /**
     * 首页数据设置跳转页面
     */
    public function top() {
        $this->display('System/top');
    }

    public function top_operate() {
        $logo = $this->upload_f();
        $arr = array(
            '1' => I('top_c1'),
            '2' => I('top_c2'),
            '3' => I('top_c3'),
            '4' => I('top_c4'),
            '5' => I('top_c5')
            );
        $top = new \Admin\Model\TopModel();
        $conf = new \Admin\Model\ConfigModel();
        $json = json_encode($arr);
        if ($top->top_add(I('top_conf'),$json,$logo,I('head'),I('f_foot'))&&$conf->setValue(I('m_foot'))) {
            pop('添加成功！');
            $this->success('');
        }else {
            pop('添加失败。。。');
            $this->error('');
        }
    }

    public function upload_f() {
        $upload_f = new \Think\Upload();
        $upload_f->maxSize   = 102400000;
        $upload_f->exts      = array('jpg','jpeg','bmp','png');
        $upload_f->rootPath  = SAFE_PATH.'Web/Upload/upload_f';
        $info = $upload_f->upload(); 
        
        if (!$info) {
            $this->error($upload_f->getError());
        }else {
            foreach($info as $file){
                $path = $file['savepath'].$file['savename'];
            }
            return '/Upload/upload_f'.$path;
        }
    }

    public function details_c () {
        $this->assign('sort_id', I('sort_id'));
        $this->assign('sort_name', I('sort_name'));
        $chapter = M('sort');
        $count = $chapter->count();
        $page = new \Think\Page($count,6);
        $list = $chapter->where(array('sort_pid' => I('sort_id')))->order('sort_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('System/top_video_details');
    }

    public function top_video() {
        $sort = M('slide');
        $list = $sort->order('slide_time desc')->select();
        $this->assign('list', $list);
        $this->display('System/top_video');
    }

    /**
     * 存入json数组#是否需要这个方法#
     * @return [type] [description]
     */
    public function video_operate() {
        $slide = new \Admin\Model\SlideModel();
        $list = $slide->where('types = 2')->select();
        // dump($list);die();
        $slide->slide_null($list);
        if ($slide->slide_upd(I('checkbox'))) {

            $this->success('置顶成功');

        }else{
            $this->error('置顶失败');
        }
        
    }

    /**
     * 置顶
     */
    public function conf_st() {
        $conf = M('config');
        if($list = $conf->where(array('conf_id' => I('id')))->find()){
            $this->assign('manage_name',$list['conf_value']);
            $this->success('置顶成功');
        }else{
            $this->error('置顶失败。。。');
        }
        // dump($list);die();
        
    }
}