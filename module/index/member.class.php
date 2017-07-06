<?php
class member extends indexMain{
   function init(){
       $this->smarty->assign("login",$this->session->get("indexLogin"));
       $this->smarty->assign("mname",$this->session->get("mname"));

       $this->smarty->assign("mid",$this->session->get("mid"));
       $this->smarty->assign("nicheng",$this->session->get("nicheng"));

      $this->smarty->display("member.html");
   }
   function edit(){
       $mid=$_POST["mid"];
       $filed=$_POST["filed"];
       $val=$_POST["val"];
       $db=new db("member");
       if($db->where("mid={$mid}")->update("$filed='{$val}'")>0){
           echo "更新成功";
           $this->session->set("nicheng",$val);
       }else{
           echo "更新失败";
       }
   }
}