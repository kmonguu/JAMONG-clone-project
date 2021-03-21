<?
include_once("./_common.php");
include_once("$g4[path]/lib/latest.lib.php");

define("__INDEX",TRUE);
include_once ("./_head.php");
?>                                                                                                   

<style>
#test { position:relative; top: 150px; text-align:center; }
#test > img { position:relative; padding:0 30px; animation: rotate-animation 3s ease-out forwards; animation-iteration-count:infinite; animation-timing-function:linear; animation-delay:2s; }


.bear_1 { width:300px; height:300px; margin-top:10px; }
.bear_2 { width:300px; height:300px;  }
.bear_3 { width:300px; height:300px;  }
.bear_4 { width:300px; height:300px;  }


@keyframes rotate-animation {
	from { transform: rotate(0deg); }
	to { transform: rotate(360deg); }
}

</style>

<div id="test">

<img onclick="moving(this, 500, 'easeInExpo')" src="/res/images/test/1.jpg" alt="1" class="bear_1"/>
<img onclick="moving(this, 500, 'easeInBack')" src="/res/images/test/2.jpg" alt="2" class="bear_2"/>
<img onclick="moving(this, 500, 'easeInOutBounce')" src="/res/images/test/3.jpg" alt="3" class="bear_3"/>
<img onclick="moving(this, 500, 'easeOutQuad')" src="/res/images/test/4.jpg" alt="4" class="bear_4"/>

<button type="button" onclick="back()">되돌리기</button>
<button type="button" onclick="move()">모두 움직이기</button>

</div>

<script>

function moving(o,n,e){
	$(o).stop().css({top:10}).animate({
		top:300
	},n,e);
}

function back(){
	$('#test img').stop().animate({
		top:0
	},1000,'easeOutElastic');

}

function move(){
	$('#test img').stop().animate({
		top:300
	},1000,'easeOutElastic');
}





</script>