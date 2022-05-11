$(document).ready(function(){
    $("#homeContents").show();
    $("#cokeContents").hide();
    $("#spriteContents").hide();
    $("#pepperContents").hide();

   $("#btnHome").click(function(){
    $("#homeContents").fadeIn(2000);
    $("#cokeContents").hide();
    $("#spriteContents").hide();
    $("#pepperContents").hide();
   }); 

   $("#btnCoke").click(function(){
    $("#homeContents").hide();
    $("#cokeContents").show();
    $("#spriteContents").hide();
    $("#pepperContents").hide();
   }); 

   $("#btnSprite").click(function(){
    $("#homeContents").hide();
    $("#cokeContents").hide();
    $("#spriteContents").show();
    $("#pepperContents").hide();
   }); 

   
   $("#btnPepper").click(function(){
    $("#homeContents").hide();
    $("#cokeContents").hide();
    $("#spriteContents").hide();
    $("#pepperContents").show();
   }); 
  });
  