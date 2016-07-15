<?php
class dbconfig {
    private static $dbms = "mysql";
    private static $host = '127.0.0.1';
    private static $port = '3306';
    private static $username = 'root';
    private static $password = 'root';
    private static $dbname = '';
    private static $charset = 'utf8';
    private static $showErrorInfo=false;
    private static $dsn;

    /**
     *
     * @return   返回pdo dsn配置
     */
    public static function getDsn() {
        if (!isset(self::$dsn)) {
            self::$dsn = self::$dbms . ':host=' . self::$host . ';port=' .
                self::$port . ';dbname=' . self::$dbname;
            if (strlen(self::$charset) > 0) {
                self::$dsn = self::$dsn . ';charset=' . self::$charset;
            }
        }
        return self::$dsn;
    }

    /**
     * 设置mysql数据库服务器主机
     * @param  $host 主机的ip地址
     */
    public static function setHost($host) {
        if (isset($host) && strlen($host) > 0)
            self::$host = trim($host);
    }

    /**
     * 设置mysql数据库服务器的端口
     * @param  $port 端口
     */
    public static function setPort($port) {
        if (isset($port) && strlen($port) > 0)
            self::$port = trim($port);
    }

    /**
     * 设置mysql数据库服务器的登陆用户名
     * @param  $username
     */
    public static function setUsername($username) {
        if (isset($username) && strlen($username) > 0)
            self::$username = $username;
    }

    /**
     * 设置mysql数据库服务器的登陆密码
     * @param  $password
     */
    public static function setPassword($password) {
        if (isset($password) && strlen($password) > 0)
            self::$password = $password;
    }

    /**
     * 设置mysql数据库服务器的数据库实例名
     * @param  $dbname 数据库实例名
     */
    public static function setDBname($dbname) {
        if (isset($dbname) && strlen($dbname) > 0)
            self::$dbname = $dbname;
    }

    /**
     * 设置数据库编码
     * @param  $charset
     */
    public static function setCharset($charset) {
        if (isset($charset) && strlen($charset) > 0)
            self::$charset = $charset;
    }

    /**
     * 设置是否显示错误信息
     * @param $bool
     */
    public static function setShowErrorInfo($bool) {
        if (isset($bool))
            self::$showErrorInfo = $bool;
    }
    /**
     * 返回用户名
     * @return string
     */
    static function getUsername(){
        return self::$username;
    }

    /**
     * 返回密码
     * @return string
     */
    static function getPassword(){
        return self::$password;
    }

    /**
     * 是否显示错误信息
     * @return bool
     */
    static function isShowErrorInfo(){
        return self::$showErrorInfo;
    }
}

/**
 * 一个数据库操作工具类
 * Author:f4ck_langzi@foxmail.com
 * Date:2016-07-10 17:37
 */
class Mysql_PDO {
    private static $_instance=null;
    private static $_conn=null;


    /**
     * Mysql_PDO constructor.
     */
    private function __construct(){
        try{
            self::$_conn = new pdo(dbconfig::getDsn(), dbconfig::getUsername(), dbconfig::getPassword());
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    /**
     * 私有克隆函数，防止外面克隆对象
     */
    private function __clone(){

    }
    /**
     * @return Mysql_PDO 得到唯一对象
     */
    public static function getInstance() {
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * @param $sql
     * @param null $parameters
     * @return string
     */
    private function exequery($sql, $parameters = null) {
        $stmt = self::$_conn->prepare($sql);
        $status=$stmt->execute($parameters);
        if ($status===false){
            if (dbconfig::isShowErrorInfo()===true){
                exit('错误信息：'.$stmt->errorInfo()['2']);
            }
            return 'SQL ERROR';
        }
        $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
        $stmt = null;
        return $rs;
    }

    /**
     * @param $sql
     * @param null $parameters
     * @return string
     */
    private function exeupdate($sql, $parameters = null) {
        $stmt = self::$_conn->prepare($sql);
        $status=$stmt->execute($parameters);
        if ($status===false){
            if (dbconfig::isShowErrorInfo()===true){
                exit('错误信息：'.$stmt->errorInfo()['2']);
            }
            return 'SQL ERROR';
        }
        $return['affectedRows'] = $stmt->rowcount();
        $return['lastInsertId'] = self::$_conn->lastInsertId();
        $stmt = null;
        return $return;
    }

    /**
     * 返回多行记录
     * @param  $sql
     * @param  $parameters
     * @return  返回多行记录
     */
    public function getRows($sql, $parameters = null) {
        return $this->exequery($sql, $parameters);
    }

    /**
     * 返回为单条记录
     * @param  $sql
     * @param  $parameters
     * @return 返回为单条记录
     */
    public function getRow($sql, $parameters = null) {
        $rs = $this->exequery($sql, $parameters);
        if (count($rs) > 0) {
            return $rs[0];
        } else {
            return null;
        }
    }

    /**
     * 执行一条更新语句.insert / upadate / delete
     * @param  $sql
     * @param  $parameters
     * @return  返回一个数组(分别为影响的记录数、最后插入数据的ID)
     */
    public function update($sql, $parameters = null) {
        return $this->exeupdate($sql, $parameters);
    }
}
?>
