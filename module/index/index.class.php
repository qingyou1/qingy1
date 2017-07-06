<?php
class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $db=new db("lists");
        $result=$db->where("status=2")->select();
        $hot=$db->where("status=3")->limit("0,3")->order("sid desc")->select();
        $this->smarty->assign("normal",$result);
        $this->smarty->assign("hot",$hot);
        $this->smarty->display("zjh_index.html");
    }

    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function start(){
        $this->smarty->display("gj_index.html");
    }
}