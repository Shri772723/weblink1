document.onkeydown=function(e){return!e.ctrlKey||67!==e.keyCode&&86!==e.keyCode&&83!==e.keyCode&&85!==e.keyCode&&117!==e.keyCode&&17!==e.keycode&&85!==e.keycode&&80!==e.keyCode&&123!==e.keyCode?123===e.keyCode?!1:void 0:!1},$(function(){$(document).ready(function(){$("body").bind("cut copy paste",function(e){e.preventDefault()}),$("body").on("contextmenu",function(e){return!1}),$("body").on("onselectstart",function(e){return!1}),$("body").on("onmousedown",function(e){return!1})})});