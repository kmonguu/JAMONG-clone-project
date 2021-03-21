<style>

.swiper-mainm {margin:0 auto; width:100%; height:780px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.RightArea { position:absolute; bottom:42px; right:210px; z-index:2; outline:none;}
.LeftArea { position:absolute; bottom:42px; left:210px; z-index:2; outline:none;}

.m_1 { position:absolute; bottom:143px; right:22px; z-index:2;}
.m_1 p { font-size:80px; color:#fff; line-height:85px; }


</style>

<div class="swiper-container swiper-mainm" >


	 <div class="swiper-wrapper">
		<?for($i=1; $i<=5; $i++){?>
			<div style="background:url('/m/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="MainRight" onmouseover="rightBtnOn()" src="/res/images/mainvisual/mainright.png" alt="메인비주얼 다음버튼"></div>
				<div class="LeftArea"><img class="MainLeft" onmouseover="leftBtnOn()" src="/res/images/mainvisual/mainleft.png" alt="메인비주얼 이전버튼"></div>
			</div>
			
		<?}?>
	</div>
	<div class="m_1">
		<p style="font-weight:300; text-align:end;">Welcome</p>
		<p style="font-weight:bold;">Hotel Zamong</p>
	</div>

</div>


<script>
	function leftBtnOn() {
		$(".MainLeft").attr({"src" : "/res/images/mainvisual/mainleft_on.png"});
		$(".MainLeft").attr({"onmouseout" : "leftBtnOff()"});
	}

	function leftBtnOff() {
		$(".MainLeft").attr({"src" : "/res/images/mainvisual/mainleft.png"});
		$(".MainLeft").attr({"onmouseover" : "leftBtnOn()"});
	}

	function rightBtnOn() {
		$(".MainRight").attr({"src" : "/res/images/mainvisual/mainright_on.png"});
		$(".MainRight").attr({"onmouseout" : "rightBtnOff()"});
	}

	function rightBtnOff() {
		$(".MainRight").attr({"src" : "/res/images/mainvisual/mainright.png"});
		$(".MainRight").attr({"onmouseover" : "rightBtnOn()"});
	}

	var swiper_mainvisual = null;

	$(function(){
		swiper_mainvisual = new Swiper('.swiper-mainm', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
						navigation: {
							nextEl: '.RightArea',
							prevEl: '.LeftArea',
						},
		});
	});

</script>

