<?php
/**
 *===================================================
 *Filename:authModel.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 12:38
 *===================================================
 **/
//验证用户
class authModel{
    private $_auth='';

    /**
     * 判断是否登录
     * authModel constructor.
     */
    public function __construct(){
        if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
            $this->_auth=$_SESSION['auth'];
        }
    }

    /**
     * 验证
     * @return bool
     */
    public function loginSubmit(){
        if (empty($_POST['username']) || empty($_POST['password'])){
            return false;
        }
        $_username=html($_POST['username']);
        $_password=html($_POST['password']);
        if ($this->_auth=$this->checkUser($_username,$_password)){
            $_SESSION['auth']=$this->_auth;
            return true;
        }else{
            return false;
        }
    }

    /**
     * 获取登录状态
     * @return string
     */
    public function getAuto(){
        return $this->_auth;
    }
    private function checkUser($_username,$_password){
        $_auth=M('admin')->getRow($_username);
        if (!empty($_auth) && $_auth['password']==$_password){
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        unset($_SESSION['auth']);
        setcookie('username','',-1);
        $this->_auth='';
    }



}
?>
