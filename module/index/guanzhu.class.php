<?php
class guanzhu extends indexMain{
    function add(){
        if(!$this->session->get("indexLogin")){
            $near=$_POST["near"];
            $this->session->set("near",$near);
            echo "no";
        }else{
            $mid2=$_POST["mid"];
            $mid1=$this->session->get("mid");
            $db=new db("guanzhu");
            if($db->insert("mid1={$mid1},mid2={$mid2}")){
                echo "ok";
            }
        }


    }
    function del(){
        $mid2=$_POST["mid"];
        $mid1=$this->session->get("mid");
        $db=new db("guanzhu");
        if($db->where("mid1={$mid1} and mid2={$mid2}")->del()>0){
            echo "ok";
        }

    }
}