<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2018
 * Time: 15:25
 */

class flash {
    private $session;
    public function __construct(){
        $this->session=new session();
    }
    public function setMessage($name, $value){
        if(!($this->session->sessionIsSetValue($name)))
            $this->session->sessionCreate($name, $value);
    }
    public function getMessage($name){
        if($this->session->sessionIsSetValue($name)){
            return $this->session->sessionGetValue($name);
        }
        return 'error';
    }
}
$flash = new flash();
$flash->setMessage("name text", "text messenger");
echo $flash->getMessage("name text");