$(document).ready(function(){

    $("#musculation").addClass("on");

    $("#step").click(function(){
        $(".musculation").hide();
        $(".step").show();
        $("#musculation").removeClass("on");
        $("#step").addClass("on");
    });

    $("#musculation").click(function(){
        $(".step").hide();
        $(".musculation").show();
        $("#step").removeClass("on");
        $("#musculation").addClass("on");
    });


});