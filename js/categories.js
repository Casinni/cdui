$(document).ready(function(){

$("#tout").addClass("active");

$("#tout").click(function(){
    $(".tout").show();
    $("#step,#course,#muscu").removeClass("active");
    $("#tout").addClass("active");
});

$("#step").click(function(){
    $(".tout").hide();
    $(".step").show();
    $("#tout,#course,#muscu").removeClass("active");
    $("#step").addClass("active");
});

$("#course").click(function(){
    $(".tout").hide();
    $(".course").show();
    $("#tout,#step,#muscu").removeClass("active");
    $("#course").addClass("active");
});

$("#muscu").click(function(){
    $(".tout").hide();
    $(".muscu").show();
    $("#tout,#step,#course").removeClass("active");
    $("#muscu").addClass("active");
});







});