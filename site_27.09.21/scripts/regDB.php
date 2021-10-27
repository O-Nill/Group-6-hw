<?php

class regDB
{
    private $db_connect;
    public function __construct($hostname, $username, $password, $dbname){
        $db_connect = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($db_connect, 'utf8');
        $this->db_connect = $db_connect;
    }
    public function correct_data($login, $password)
    {
        $db_connect = $this->db_connect;
        $select = mysqli_query($db_connect, "SELECT * FROM `authorization`");
        $arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
        $log = 0;
        foreach ($arr_select as $value) {
            if ($value['login'] == $login && $value['password'] == md5($password)) {
                $log = 1;
            }
        }
        return $log;
    }
    public function addUser($login, $password){
        $md_pass = md5($password);
        $db_connect = $this->db_connect;
        return mysqli_query($db_connect,
            "INSERT INTO `authorization`(`user_id`, `login`, `password`) VALUES (Null, '$login', '$md_pass');");
    }
}