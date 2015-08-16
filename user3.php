/**
 * Created by Charry on 2015/7/30.
 */
/**
 * 从 file 域获取 本地图片 url
 */
function getFileUrl(sourceObj) {
    var url;
    if (navigator.userAgent.indexOf("MSIE") >= 1) { // IE10取消了滤镜
        //url = document.getElementById(sourceId).value;document.all.imgOne.select();            $("#preview").focus();

        sourceObj.select();

        url = document.selection.createRange().text;

    } else if (navigator.userAgent.indexOf("Firefox") > 0) { // Firefox
        url = window.URL.createObjectURL(document.getElementById(sourceObj.id).files.item(0));
    } else if (navigator.userAgent.indexOf("Chrome") > 0) { // Chrome
        url = window.URL.createObjectURL(document.getElementById(sourceObj.id).files.item(0));
    }else if(navigator.userAgent.indexOf("MSIE 10.0") > 0){
        url = window.URL.createObjectURL(document.getElementById(sourceObj.id).files.item(0));
    }else{
        url = window.URL.createObjectURL(document.getElementById(sourceObj.id).files.item(0));
    }
    return url;
}

/**
 * 将本地图片 显示到浏览器上
 */
function preImg(sourceObj, targetId) {
    var url = getFileUrl(sourceObj);
    var imgPre = document.getElementById(targetId);
    if(window.navigator.userAgent.indexOf("MSIE") >= 1 && !(navigator.userAgent.indexOf("MSIE 10.0") > 0) ) {
        var picpreview = document.getElementById("preview");
        picpreview.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = url;
    }else{
        imgPre.src = url;
    }

}


function deleteRecord(del){
    del.parent().parent().fadeOut("slow");
}

$(document).ready(function(){


    $("#changePhoto").click(function(){
        $("input#imgOne").click();
        if ($(this).siblings("img").attr("src") != ""){
            $("#confirmChange").removeClass("hidden");
        }
    });

    $("#favoContent").hide();
    $("#historyContent").hide();

    var resumeVal = null;
    $(function(){
        var i = 0;
        resumeVal =  $("#resumeContent").find("tbody");
        while (i++ < 15){
            resumeVal.append("<tr><td><a id=resumethinkerName_"+i + " href='#'>KOBE</a></td><td><a id=resumeCreator_"
               +i + " href='#'>KOBE</a></td><td>2015年8月4日23:35:16</td><td><a id=resumeFinalEditor_"+i +
               " href='#'>KOBE</a></td><td>2015年8月4日23:36:48</td><td id=resumeStatus_"+i + ">审核中...</td></tr>");
        }

    });

    var favoVal = null;
    $(function(){
        var i = 0;
        favoVal =  $("#favoContent").find("tbody");
        while (i++ < 15){
            favoVal.append("<tr><th><a id=favoThankerName_"+i + " href='#'>Charry</a></th><td>2015年8月4日03:53:28</td><td><a id=favoDel_"
                +i + " href='#' onclick='deleteRecord($(this));'>删除</a></td></tr>");
        }
    });

    var hisVal = null;
    $(function(){
        var i = 0;
        hisVal =  $("#historyContent").find("tbody");
        while (i++ < 15){

            hisVal.append("<tr><th><a id=historyKey_"+i + " href='#'>Charry</a></th><td>2015年8月4日03:53:28</td><td><a id=historyDel_"
                +i + " href='#' onclick='deleteRecord($(this));'>删除</a></td></tr>");
        }

    });

    $("#resume").click(function(){
        $("#favoContent").hide();
        $("#resumeContent").show();
        $("#historyContent").hide();
        $("#resume").parent().addClass("active");
        $("#favo").parent().removeClass("active");
        $("#history").parent().removeClass("active");

    });

    $("#favo").click(function(){
        $("#favoContent").show();
        $("#resumeContent").hide();
        $("#historyContent").hide();
        $("#resume").parent().removeClass("active");
        $("#favo").parent().addClass("active");
        $("#history").parent().removeClass("active");
    });

    $("#history").click(function(){
        $("#favoContent").hide();
        $("#resumeContent").hide();
        $("#historyContent").show();
        $("#resume").parent().removeClass("active");
        $("#favo").parent().removeClass("active");
        $("#history").parent().addClass("active");
    });

    $("#personalCenter").click(function(){
        $("#personalCenter").parent().addClass("active");
        $("#backHome").parent().removeClass("active");
        $("#logout").parent().removeClass("active");
    });
    $("#backHome").click(function(){
        $("#personalCenter").parent().removeClass("active");
        $("#backHome").parent().addClass("active");
        $("#logout").parent().removeClass("active");
    });
    $("#logout").click(function(){
        $("#personalCenter").parent().removeClass("active");
        $("#backHome").parent().removeClass("active");
        $("#logout").parent().addClass("active");
    });

    function navCheck(li){
        li.parent().addClass("active");
        li.parent().siblings().removeClass("active");
    }

    $("nav").find("a").click(function(){
        navCheck($(this));
    });


});

