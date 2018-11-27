<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2018
 * Time: 15:10
 */

class session {
    public function __construct(){
        session_start();
    }
    public function sessionCreate($name, $value){
        $_SESSION[$name] = $value;
    }
    public function sessionGetValue($name){
        return $_SESSION[$name];
    }
    public function sessionDeleteValue($name){
        unset($_SESSION[$name]);
    }
    public function sessionIsSetValue($name){
        return isset($_SESSION[$name]);
    }
}

$session = new session();
$session->sessionCreate('session', '555');
//$session->sessionDeleteValue('session');
var_dump($session->sessionGetValue('session'));
var_dump($session->sessionIsSetValue('session'));