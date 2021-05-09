$(document).ready(function(){
    $(".menu").click(function(){
        $(".keep").toggleClass("width");
    });
});
function submit(){
    var text=$("#write").val();
    var pass=$("#password").val();
    $.ajax({
        url: "post.php",
        type: "post",
        dataType: "json",
        data: {text: text,pass: pass}}).done(
        function (result){
        //data=JSON.parse(result);
        if(result.success=='false'){
            alert("False");
        }
        else{
            alert("True");
        }
    });
};
function getBai(a){
    var old=a.innerHTML;
    a.innerHTML="<span><i class=\"fas fa-heartbeat fa-spin\" style=\"font-size:24px\"></i></span>loading";
    //console.log(a['id']);
    //a.innerHTML=old;
    var wu=a['id'];
    $.ajax({
        url: "get.php",
        type: "get",
        dataType: "json",
        data: {wu: wu}
    }).done(
        function(result){
            if("success" in result){
                alert("Loi");
                a.innerHTML=old;
                return;
            }else{
                var html="";
                html+="<h1>"+wu+"</h1>";
                html+="<table>"
                html+="<tr><th>ID</th><th>Bài Viết</th></tr>"
                for(i in result){
                    html+="<tr><td>"+i+"</td><td><a target='_blank' href='"+result[i].href+"'>"+result[i].name+"</a></td></tr>"
                }
                html+="</table>"
                $("#main").html(html);
                a.innerHTML=old;
            }
        }
    );
   
}
