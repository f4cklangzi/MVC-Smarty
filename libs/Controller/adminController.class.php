<?php
/**
 *===================================================
 *Filename:adminController.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 12:03
 *===================================================
 **/
class adminController{
    public $_auth='';

    public function __construct(){
        //判断是否登录->auth模型处理
        $this->_auth=M('auth')->getAuto();
        if (empty($this->_auth) && PC::$_method !=='login'){
            $this->showMessage('请登录后操作！','admin.php?controller=admin&method=login');
        }
    }

    public function login(){
        if (isset($_POST['username']) && isset($_POST['password'])){
            //登录处理的业务逻辑放在admin auth
            //admin模型：从数据库取得用户数据
            //auth模型：验证信息
            $this->checkLogin();
        }else{
            //显示登录界面
            View::display('admin/login.html');

        }
    }

    public function index(){
        $_newsNum=M('news')->count();
        View::assign(array('newsnum'=>$_newsNum['0']['count'],'username'=>$_COOKIE['username']));
        View::display('admin/index.html');
    }

    public function newsadd(){
        //判断是否有POST数据
        if (empty($_POST)){
            //没有就显示添加、修改界面
            //读取信息->newsModel
            if (isset($_GET['id'])){
                $_news=M('news')->getNews($_GET['id']);
            }else{
                $_news=array();
            }
            View::assign(array('data'=>$_news,'username'=>$_COOKIE['username']));
            View::display('admin/newsadd.html');
        }else{
            //进入添加、修改的处理程序
            $this->newsSubmit();
        }
    }
    public function logout(){
        M('auth')->logout();
        $this->showMessage('退出成功！','admin.php?controller=admin&method=login');
    }

    public function newslist(){
        $_data=M('news')->getAllNews();
        View::assign(array('data'=>$_data,'username'=>$_COOKIE['username']));
        View::display('admin/newslist.html');
    }

    public function newsdel(){
        if (isset($_GET['id'])){
            $_status=M('news')->delOne($_GET['id']);
            if ($_status===true){
                $this->showMessage('删除成功！','admin.php?controller=admin&method=newslist');
            }else{
                $this->showMessage('删除失败！','admin.php?controller=admin&method=newslist');
            }
        }
    }

    private function newsSubmit(){
        $_status=M('news')->newsSubmit($_POST);
        if ($_status==0){
            if (empty($_POST['id'])){
                $this->showMessage('表单未填写完整！','admin.php?controller=admin&method=newsadd&id=');

            }else{
                $this->showMessage('表单未填写完整！','admin.php?controller=admin&method=newsadd&id='.$_POST['id']);
            }
        }elseif ($_status==1){
            $this->showMessage('添加成功！','admin.php?controller=admin&method=newslist');
        }elseif ($_status==2){
            $this->showMessage('修改成功！','admin.php?controller=admin&method=newslist');
        }else{
            $this->showMessage('系统错误！','back');
        }
    }
    private function checkLogin(){
        if (M('auth')->loginSubmit()){
            setcookie('username',$_POST['username']);
            $this->showMessage('登录成功！','admin.php?controller=admin&method=index');
        }else{
            $this->showMessage('登录失败！','admin.php?controller=admin&method=login');
        }
    }

    private function showMessage($_message,$_url){
        if ($_url=='back'){
            echo "<script>alert('$_message');history.back();</script>>";

        }else{
            echo "<script>alert('$_message');location.href='$_url';</script>>";
        }
    }
}
?>
