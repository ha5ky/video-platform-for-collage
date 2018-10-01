<?php
namespace Admin\Controller;

use Think\Controller;

/**
 * 管理员控制器
 */
class AdminController extends Controller 
{

	/**
	 * 初始化方法
	 * @return [type] [description]
	 */
	public function _initialize () {
        if (session('user_role') == 0) {
            $this->error('无权限');
        }
	}

	/**
	 * 学生设置
	 */
	public function student(){
        $student = M('student');
        $count = $student->count();
        $page = new \Think\Page($count,10);
        $list = $student->order('sid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('Student/db_data_s');
    }

    public function details_s() {
        $this->assign('sid', I('sid'));
        $this->display('Student/details_s');
    }

    public function delete_s() {
        $data=new \Admin\Model\StudentModel();
        $data->std_del(I('num'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    public function update_s() {
        $data=new \Admin\Model\StudentModel();
        $sid = I('sid');
        $name = I('std_num');
        $num = I('std_name');
        if($data->std_update($sid,$num,$name)) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    public function insert_s() {
        $this->display('Student/details_s_insert');
    }

    public function insert_student() {
        $data=new \Admin\Model\StudentModel();
        $num = I('num');
        $name = I('name');
        $data->std_add($num,$name);
        if(w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加成功")) {
            $this->success('用户添加成功');
        }
    }

    /**
     * 课程设置
     */
    public function course () {
        $sort = M('sort');
        $count = $sort->count();
        $page = new \Think\Page($count,10);
        $list = $sort->where('sort_pid = 0')->order('sort_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('Course/db_data_f');
    }

    public function delete_f() {
        $data=new \Admin\Model\SortModel();
        $data->sort_del(I('sort_id'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    public function details_f() {
        $this->assign('sort_id', I('sort_id'));
        $this->display('Course/details_f');
    }

    public function insert_f() {
        $this->display('Course/details_f_insert');
    }

    public function insert_course() {
        $img = $this->upload_p();
        $sort = new \Admin\Model\SortModel();
        if ($sort->sort_add(I('sort_name'),I('sort_intro'),I('sort_pid'),$img)) {
            w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加成功");
            $this->success('1');
        }else {
            w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加失败");
            $this->error('0');
        }
    }

    public function upload_p() {
        $upload_p = new \Think\Upload();
        $upload_p->maxSize   = 102400000;
        $upload_p->exts      = array('jpg','jpeg','bmp','png');
        $upload_p->rootPath  = SAFE_PATH.'Web/Upload/upload_p';
        $info = $upload_p->upload(); 
        
        if (!$info) {
            $this->error($upload_p->getError());
        }else {
            foreach($info as $file){
                $path = $file['savepath'].$file['savename'];
            }
            return '/Upload/upload_p'.$path;
        }
    }

    public function update_f() {
        $data=new \Admin\Model\SortModel();        
        if($data->sort_upd(I('sort_id'),I('sort_name'),I('sort_intro'),I('pid'))) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    /**
     * 教师设置
     */
    public function teacher () {
        $teacher = M('teacher');
        $video = M('video');
        $conf = $teacher->order('tid')->select();
        foreach ($conf as $k => $arr) {
            $video_count = $video->where(array('tid' => $arr['tid']))->count();
            $arr['count'] = $video_count;
            $list[] = $arr;
        }
        $this->assign('conf', $list);
    	$this->display('Teacher/teacher');
    }

    /**
     * 添加
     * @return [type] [description]
     */
    public function insert_t() {
        $this->display('Teacher/teacher_insert');
    }

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
        $this->display('Teacher/teacher_update');
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
        $pwd = g_pwd(I('t_pwd'));
        $role = I('t_role');
        if($data->t_update($tid,$name,$num,$pwd,$role)) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
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

    /**
     * 章节设置
     */
    public function chapter () {
        $sort = M('sort');
        $list = $sort->where('sort_pid = 0')->order('sort_id desc')->select();
        // $this->assign('page', $show);
        $this->assign('list', $list);
        // $this->assign('list1', $list);
        $this->display('Chapter/chapter');
    }

    public function details_c () {
        // $this->assign('sort_id', I('sort_id'));
        // $this->assign('sort_name', I('sort_name'));
        $chapter = M('sort');
        // echo I('course_name');die();
        $id = $chapter->where(array('sort_name' => I('course_name')))->getField('sort_id');
        // echo $id;die();
        // $count = $chapter->count();
        // $page = new \Think\Page($count,6);
        $list = $chapter->where('sort_pid = 0')->order('sort_id desc')->select();
        $list1 = $chapter->where(array('sort_pid' => $id))->order('sort_id desc')->select();
        // $show = $page->show();
        // $this->assign('page', $show);
        $this->assign('list', $list);
        $this->assign('list1', $list1);
        $this->display('Chapter/chapter');
    }

    public function insert_c() {
        $this->display('Chapter/details_c_insert');
    }

    public function insert_chapter() {
        $sort = new \Admin\Model\SortModel();
        $pid = $sort->getPid(I('sort_name'));
        if ($sort->chapter_add(I('c_name'),I('t_rname'),I('sort_intro'),$pid)) {
            w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加成功");
            $this->success('1');
        }else {
            w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加失败");
            $this->error('0');
        }
    }

    public function delete_c () {
        $data = new \Admin\Model\SortModel();
        $data->sort_del(I('sort_id'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    public function update_c() {
        $this->assign('id', I('sort_id'));
        $this->display('Chapter/details_c_update');
    }

    public function update_chapter() {
        $data=new \Admin\Model\SortModel();
        $pid = $data->getPid(I('sort_name'));     
        if($data->chapter_upd(I('sort_id'),I('c_name'),I('sort_intro'),I('t_rname'),$pid)) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    /**
     * 统计数据
     */
    public function count () {
        $teacher = M('teacher');
        $video = M('video');
        // $count = $teacher->where('t_role = 0')->count();
        // $page = new \Think\Page($count,15);

        $list = $teacher->select();
        foreach ($list as $k => $v) {
            $v_count[] = $v;
            $v_count[$k]['numbers'] = $video->where(array('tid' => $v['tid']))->count();
        }
        // dump($v_count);die();
        // $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $v_count);
        $this->display('Count/count_teacher');
    }

    public function details_count () {
        $video = M('video');
        $count = $video->where(array('tid' => I('tid')))->count();
        $this->assign('id',I('tid'));
        $this->assign('name',I('name'));
        $this->assign('num',I('num'));
        $this->assign('count',$count);
        $this->display('Count/details_ct');
    }

    public function delete_count() {
        
    }

    /**
     * 首页视频推荐
     * @return [type] [description]
     */
    public function sticky() {
        $video = M('video');
        // $arr = I('checkbox');
        $slide = M('slide');
        $arrJson = $slide->order('slide_time desc')->limit(1)->getField('slide_video');
        $arr = json_decode($arrJson,true);
        array_pop($arr);
        array_unshift($arr, I('sort_id'));
        // echo $arrJson;die();
        // dump($arr);die();
        foreach ($arr as $k => $v) {
            $json_arr[] = $video->where(array('sort_id' => $v))->getField('vid');
        }
        // dump($json_arr);die();
        $json = json_encode($arr);
        $json_p = json_encode($json_arr);
        // echo $json_p;die();
        $slide = new \Admin\Model\SlideModel();
        if ($slide->slide_add($json)) {
            pop('添加成功！');
            $this->success('');
        }else {
            pop('添加失败。。。');
            $this->error('');
        }

    }
}