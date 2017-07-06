$(function(){
    /*
    *   关注者    张三
    *   被关注者  李四
    * */
    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=add",
            type:"post",
            data:{near:location.href,mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="no"){
                    $(".loginBox").css("display","block");
                }else if(e==="ok"){
                    $(".guanzhu").css("display","none");
                    $(".cancelguanzhu").css("display","block");
                }
            }
        })
    })
    /*取消关注*/
    $(".cancelguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=del",
            type:"post",
            data:{mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="ok"){
                    $(".guanzhu").css("display","block");
                    $(".cancelguanzhu").css("display","none");
                }
            }
        })
    })


    /*添加留言*/
    $(".messageSubmitBtn").click(function () {

        var me=$(".stitle").attr("me");
        $.ajax({
            url:"index.php?m=index&f=message&a=add",
            type:"post",
            data:{near:location.href,"mid":$(".stitle").attr("mid"),"sid":$(".stitle").attr("sid"),"con":$(".messageSubmitCon").val()},
            success:function(e){

               if(e=="no"){
                   $(".loginBox").css("display","block");
               }else{



                    $(`<div class="message-box">
    <div class="liuyan" mid="`+me+`" pid="`+e+`">
        <div class="photo-box">
            <div class="photo">

            </div>
            <div class="name">
                xxx
            </div>
        </div>
        <div class="message-con">`+$(".messageSubmitCon").val()+`</div>
        <button class="btn btn-default replayBtn" type="submit">回复</button>
    </div>

    <div class="replay-box" style="display:none">
        <textarea class="form-control messageReplayCon" rows="3"></textarea>
        <button class="btn btn-default messageReplayBtn" type="submit">回复</button>
        <button class="btn btn-default" type="submit">取消</button>
    </div>
</div>`).appendTo(".container");


               }
            }
        })
        
    })

    /*回复 接口 隐藏或显示*/

    $(".container").delegate(".replayBtn","click",function(){
        $(this).parents(".message-box").find(".replay-box").toggle();
    })

    /*回复按钮*/

    $(".container").delegate(".messageReplayBtn","click",function(){

        var messageReplayCon=$(this).parents(".message-box").find(".messageReplayCon");
        var liuyan=$(this).parents(".message-box").find(".liuyan");
        var replayBox=$(this).parents(".message-box").find(".replay-box");
        $.ajax({
           url:"index.php?m=index&f=message&a=replay",
            type:"post",
            data:{near:location.href,mid:liuyan.attr("mid"),sid:$(".stitle").attr("sid"),"con":messageReplayCon.val(),"pid":liuyan.attr("pid")},
            success:function(e){
                if(e=="no"){
                    $(".loginBox").css("display","block");
                }else{

                     $(`<div class="replay">
        <div class="photo-box">
         <div class="photo">

         </div>
         <div class="name">
            
         </div>
        </div>
        <div class="message-con">
          `+messageReplayCon.val()+
        `</div>
        <button class="btn btn-default replayBtn" type="submit">回复</button>
       </div>`).insertBefore(replayBox);
                }
            }
        })
    })





})