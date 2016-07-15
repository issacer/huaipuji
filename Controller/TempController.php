<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/5/30
 * Time: 20:05
 */
class Temp{
    private $urlHd =null;
    
    public function __construct($urlHd){
        $this->urlHd =$urlHd."/Public/Tem/";
    }

    public function getDisplay(){
        $ctt =file_get_contents($this->urlHd."display.html");
        echo $ctt;
    }

    public function getDisTip(){
//        $ty =$_POST['ty'];
        $disNum =$_POST['disNum'];
        $res =false;
        if(!$res) {
            if($disNum ==1) {
                $ctt = file_get_contents($this->urlHd . "disTip.html");
                echo $ctt;
            }else{
                echo 0;
            }
        }else{
            echo 1;
        }
    }
}
require_once "../Public/config/config.php";
$func =$_REQUEST['func'];
$temp =new Temp($urlHd);
$temp->$func();