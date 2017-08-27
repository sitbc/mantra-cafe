// JavaScript Document
$(document).ready(function(){
	"use strict";
	
	$('.main-cat').hover(
		function(){$('.cat-desc', this).css('bottom', 0);},
		function(){$('.cat-desc', this).css('bottom', '-7em');
	});
	
	$('.main-cat a').hover(
		function(){$('.main-cat i', this).addClass('move-on-hover')},
		function(){$('.main-cat i', this).removeClass('move-on-hover')}
	);
	
	//SUB CATEGORY HEIGHT CONTROL
	
	var array = [];
	
	$('.sub-cat').each(function(){
		array.push($(this).height());
	});
	
	//console.log(array);
	
	var maxHeight = Math.max.apply(Math, array);
	
	//console.log(maxHeight);
	
	$('.sub-cat').css('height', maxHeight + 30);
	$('.courses').css('position', 'absolute').css('bottom', '1em');
	
	//$('.well').css('height', globHi);
	
});
