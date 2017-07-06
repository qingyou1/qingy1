<?php
class login extends indexMain{
    function init(){
        $this->smarty->display("zjh_login.html");
    }
    function regIn(){
        $this->smarty->display("zjh_Reg.html");
    }
    function reg(){
//            if($_POST["code"]!==$this->session->get("code")){
//                echo "验证码错误";
//                exit;
//            }

            $uname=$_POST["mname"];

            if(empty($mname)){
                echo "用户不能为空";
                exit;
            }
            $db=new db("user");
            $result=$db->where("uname='{$uname}'")->select();
            if(count($result)>0){
                echo "用户名存在";
                exit;
            }

            $mpass=$_POST["mpass"];
            if(empty($mpass)){
                echo "密码不能为空";
                exit;
            }
            $mpass1=$_POST["mpass1"];
            if(empty($mpass)){
                echo "确认密码不能为空";
                exit;
            }

            if($mpass!=$mpass1){
                echo "两次密码不一致";
                exit;
            }

            $mpass=md5($mpass);

            if($db->insert("uname='{$uname}',upass='{$mpass}'")){
                echo "ok";
                exit;
            }


    }

    function willLogin(){
//            $code=$_POST["code"];
//        if($_POST["code"]!==$this->session->get("code")){
//            echo "验证码错误";
//            exit;
//        }
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();

        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    $this->session->set("nicheng",$v["nicheng"]);
                    $this->session->set("mrole",$v["mrole"]);
                    $near=$this->session->get("near")?$this->session->get("near"):"index.php?m=index&f=index&a=start";

                    echo "ok".$near;
                    exit();
                }
            }
        }

        echo "用户名或密码有误";

    }

    function logout(){
        $this->session->clear();
        echo "ok";
    }
}