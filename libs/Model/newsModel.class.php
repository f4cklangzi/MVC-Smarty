<?php
/**
 *===================================================
 *Filename:news.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 14:13
 *===================================================
 **/
class newsModel{
    public $_table='news';
    public function count(){
        $_sql="SELECT COUNT(*) AS `count` FROM $this->_table";
        return DB::getRows($_sql);
    }

    public function getNews($_id){
        if (empty($_id)){
            return array();
        }else{
            $_sql="SELECT * FROM $this->_table WHERE id=:id";
            return DB::getRow($_sql,array(':id'=>$_id));
        }
    }

    public function getAllNews(){
            $_sql="SELECT * FROM $this->_table ORDER BY `date` DESC ";
            return DB::getRows($_sql);
    }

    public function delOne($_id){
        $_sql="DELETE FROM {$this->_table} WHERE id=:id";
        $_status = DB::update($_sql,array(':id'=>$_id));
        if ($_status['affectedRows']==1){
            return true;
        }else{
            return false;
        }
    }

    public function newsSubmit($_data){
        if (empty($_data['title']) or empty($_data['content'])){
            return 0;
        }
        if (empty($_data['author'])){
            $_data['author']=$_COOKIE['username'];
        }
        $_content=$_data['content'];
        $_data=html($_data);
        $_data['content']=$_content;
        if (!empty($_POST['id'])){
            $_sql="UPDATE {$this->_table} SET `title`=:title,`author`=:author,`from`=:from,`content`=:content,`date`=:time WHERE `id`=:id";
            $_status=DB::update($_sql,array(':title'=>$_data['title'],':author'=>$_data['author'],':from'=>$_data['from'],':content'=>$_data['content'],':time'=>time(),':id'=>$_POST['id']));
            if ($_status['affectedRows']==1){
                return 2;
            }else{
                return 3;
            }
        }else{
            $_POST=html($_POST);
            $_sql="INSERT INTO {$this->_table} (`title`,`author`,`from`,`content`,`date`) VALUES(:title,:author,:from,:content,:time)";
            $_status=DB::update($_sql,array(':title'=>$_data['title'],':author'=>$_data['author'],':from'=>$_data['from'],':content'=>$_data['content'],':time'=>time()));
            if ($_status['affectedRows']==1){
                return 1;
            }else{
                return 3;
            }
        }
    }
}
?>
