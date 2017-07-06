$(function(){

    var widths=0;
    $(".navbox a").each(function(index,obj){
        widths+=$(obj).outerWidth()
    })
    $(".navbox").css("width",widths);


    var left=0;

    mui(".mui-content").on("dragstart",".navbox",function(e){

        left=parseInt($(".navbox").css("marginLeft"))?parseInt($(".navbox").css("marginLeft")):0;

    })
    mui(".mui-content").on("drag",".navbox",function(e){
        var lefts=left+e.detail.deltaX;
        //console.log($(window).width());
        if(lefts>0){
            lefts=0;
        }
        if(lefts<$(window).width()-widths){
            lefts=$(window).width()-widths
        }
        $(".navbox").css("marginLeft",lefts)
    })







    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);


})


/*
 上传的图片的尺寸  2000w   400
 500    10

 */



$(window).load(function(){
    $(".container").css("top",function(){
        return $(".mui-slider").outerHeight()+88;
    })

    myScroll = new IScroll('.container',{ scrollbars: true,bounce:true});


    var  flag=true;
    var num=0;
    console.log(myScroll)
    myScroll.on("scrollStart",function(){

        if(!flag){
            return;
        }

        //  加载相关的新闻
        if(myScroll.y==0&&myScroll.distX<0){
            flag=false;

            $(".load").css("display","block");

            //模拟网络延时
            $.ajax({
                url:"relative.php",
                dataType:"json",
                data:{keywords:$(".mui-table-view-cell:eq(0)").attr("relative"),num:num},
                success:function(e){
                    num++
                    for(var i=0;i<e.length;i++){

                        var li=$("<li class='mui-table-view-cell mui-media' relative='"+e[i].keywords+"'>");
                        li.html(` <a href="show.php?id=${e[i].id}">
                    <img class="mui-media-object mui-pull-right" src="../admin/${e[i].imgurl}">
                    <div class="mui-media-body">
                      ${e[i].title}
                        <p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
                    </div>
                </a>`);
                        $(".load").after(li);

                    }





                    $(".load").css("display","none");
                    myScroll.refresh();
                    flag=true;


                }


            })

        }


        if(myScroll.y==myScroll.maxScrollY&&myScroll.distX>=0){
            flag=true;
            console.log("底部");
        }
    })
})