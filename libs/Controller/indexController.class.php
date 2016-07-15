<?php
/**
 *===================================================
 *Filename:indexController.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-12 13:02
 *===================================================
 **/
class indexController{
    private function showAbout(){
        $_data=M('about')->aboutInfo();
        View::assign(array('about'=>$_data));
    }

    public function index(){
        $_data=M('news')->getAllNews();
        foreach ($_data as $item=>$value){
            $_data[$item]['content']=strip_tags($value['content']);
        }
        $this->showAbout();
        View::assign(array('data'=>$_data));
        View::display('index/index.html');
    }

    public function newsshow(){
        $_data=M('news')->getNews($_GET['id']);
        $this->showAbout();
        View::assign(array('data'=>$_data));
        View::display('index/show.html');
    }
}
?>
