<?php
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller {   

    /**
     * 用于公有方法
     * @return [type] [description]
     */
    public function index(){
        $data=array(
            "sysname"=>g_conf("sysname"),
            );
        // F('data/sysname',g_conf("sysname"));

        $this->assign("data",$data);        
        $this->display('login');
    }

    /**
     * 后台主界面 main
     * @return [type] [description]
     */
    public function login() {
    	if(IS_POST){
            $data=new \Admin\Model\TeacherModel();
            $rtn=$data->t_search(I("user"));
            if($rtn["tid"]>0){
                if(v_pwd(I("pass"),$rtn["t_pwd"])){
                    //成功！
                    session('user_role',$rtn['t_role']);
                    session('user_id',$rtn["tid"]); 
                    session('user_name',$rtn["t_rname"]); 
                    session('user_num', $rtn['t_num']);
                    if(w_log(time(),__SELF__,$rtn["t_rname"],"login from ".get_client_ip(),"用户登录成功")){
                        $this->redirect("/admin/index/index");    
                    } else
                    {
                        $this->error("日志处理失败！",U("/admin/public/index"));
                    }          
                }else{
                    $this->error("用户密码错误！",U("/admin/public/index"));
                }

            }else{
                $this->error("用户不存在！",U("/admin/public/index"));
            }

        }
        else
        {
            $this->error("登录失败！",U("/admin/public/index"));
        }
    }

    public function logout() {  
        session(null);  
        $this->success("用户成功退出！",U("/admin/public/index"));
    }

    

    

    public function update_v() {
        $data=new \Admin\Model\TeacherModel();
        $tid = I('sid');
        $name = I('std_num');
        $num = I('std_name');
        if($data->t_update($sid,$num,$name)) {
            if(w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }


    
}