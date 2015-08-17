// JavaScript Document
$(document).ready(function( ) {
	$('.drop').hide();
	
	$('#learnLink li').bind('mouseenter', function(){
   		$('#learnLink .drop').slideDown("slow", function(){
            $('#learnLink .drop').stop().animate();
    	});
	});
	/*
	$('#learnLink li').bind('mouseenter', function() {
		$('#learnLink .drop').stop(); 
		$('#learnLink .drop').slideDown("slow",function() {$('#learnLink .drop').removeAttr('style')});
	});*/
 	$('#learnLink').bind('mouseleave', function() {
		$('#learnLink .drop').stop(); 
		$('#learnLink .drop').slideUp("slow");
	});
	
	
	$('#participateLink li').bind('mouseenter', function(){
   		$('#participateLink .drop').slideDown("slow", function(){
            $('#participateLink .drop').stop().animate();
    	});
	});
	/*
	$('#participateLink li').bind('mouseenter', function() {
		$('#participateLink .drop').slideDown('slow');
	});
	*/
 	$('#participateLink').bind('mouseleave', function() {
		$('#participateLink .drop').stop();
		$('#participateLink .drop').slideUp('slow');
	});
	
	$('#seeLink li').bind('mouseenter', function(){
   		$('#seeLink .drop').slideDown("slow", function(){
            $('#seeLink .drop').stop().animate();
    	});
	});
	/*
	$('#seeLink li').bind('mouseenter', function() {
		$('#seeLink .drop').slideDown('slow');
	});
	*/
 	$('#seeLink').bind('mouseleave', function() {
		$('#seeLink .drop').stop();
		$('#seeLink .drop').slideUp('slow');
	});
	
	$('#helpLink li').bind('mouseenter', function(){
   		$('#helpLink .drop').slideDown("slow", function(){
            $('#helpLink .drop').stop().animate();
    	});
	});
	/*
	$('#helpLink li').bind('mouseenter', function() {
		$('#helpLink .drop').slideDown('slow');
	});
	*/
 	$('#helpLink').bind('mouseleave', function() {
		$('#helpLink .drop').stop();
		$('#helpLink .drop').slideUp('slow');
	});
}); // end of ready()