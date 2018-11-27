<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2018
 * Time: 13:03
 */

class smartForm extends form {
    protected function getMethod($att){
        if(!empty($_REQUEST[$att['name']])){
            $att['value']=$_REQUEST[$att['name']];
        }
        return parent::getMethod($att);
    }
    public function textarea($att) {
        if(!empty($_REQUEST[$att['name']])){
            $value=$_REQUEST[$att['name']];
        }
        $a = parent::getMethod($att);
        return '<textarea '.$a.' >'.$value.'</textarea><br><br>';
    }

}

$smartForm = new smartForm();
echo $smartForm->open(['action' => 'index.php', 'method' => 'post']);
echo $smartForm->input(['type' => 'text','placeholder'=>'Ваше имя', 'name' => 'name']);
echo $smartForm->password(['placeholder'=>'Ваше пароль', 'name' => 'pass']);
echo $smartForm->textarea(['name' => 'text', 'cols' => 100, 'rows' => 5]);
echo $smartForm->submit(['value'=>'submit']);
echo $smartForm->close();