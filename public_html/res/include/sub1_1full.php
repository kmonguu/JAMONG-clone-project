<style>
	.sub1_div1 { background:url('/res/images/subvisual/sub1_1.jpg') no-repeat center top; height:427px; }
	.sub1_div2 { background:url('/res/images/subvisual/sub1_2.jpg') no-repeat center top; height:804px; }
	.sub1_div3 { background:url('/res/images/subvisual/sub1_3.jpg') no-repeat center top; height:243px; }

	.swiper-subvisual { width:100%; min-width:1200px; max-width:1919px; height:524px; position:relative; margin:0 auto; z-index:1; overflow:hidden; }
	.swiper-subvisual .swiper-slide { width:590px; height:400px; position:relative; margin:0 auto; }

	.s_Arrow { width:122px; height:22px; position:absolute; left:50%; margin-left:-61px; bottom:0; z-index:2; }
	.s_Arrow::before { content:""; display:block; left:61px; top:0; width:1px; height:22px; background:#d9d9d9; position:absolute; }
	
	.s_Arrow > div { position:absolute; width:41px; height:100%; top:0; cursor:pointer; outline:none; }
	.s_Arrow > div > img { position:absolute; transition:.2s linear; opacity:0.2; }
	.rightarea { right:0; }
	.rightarea > img { left:0; }
	.rightarea:hover > img { left:20px; opacity:1; }
	.leftarea { left:0; }
	.leftarea > img { right:0; }
	.leftarea:hover > img { right:20px; opacity:1; }

	.s_slidebar { width:100%; height:1px; background:#cccccc; position:absolute; z-index:3; bottom:63px; }
	
	.swiper-pagination { position:absolute; bottom: 58px !important; }
	.swiper-pagination > .swiper-pagination-bullet { width:200px; height:3px; bottom:58px; background:#d6bfa8; margin:0 !important; opacity:0; border-radius:0; }
	.swiper-pagination .swiper-pagination-bullet-active { opacity:1; }

	.sub1_div4 { background:url('/res/images/subvisual/sub1_4.jpg') no-repeat center top; height:227px; }

	.sub1_div5 { background:url('/res/images/subvisual/sub1_5.jpg') no-repeat center top; height:770px; font-size: 18px; position:relative; }

	.sub1_div5 span { font-weight:700; }
	.sub1_div5-1 { position:absolute; top:170px; left:360px; font-weight:300; }

	.sub1_div5-2 { position:absolute; top:340px; left:360px; font-weight:300; }

	.sub1_div5 a { position:absolute; top:500px; left:360px; padding:17px 46px 17px 42px; background:#000; text-align:center; font-weight:300; }
	.sub1_div5 a { color:#fff; text-decoration:none; }
	.sub1_div5 a:hover { background:#805f4a; }

	.sub1_div6 { position:absolute; right:0; top:85px; }

</style>

<div class="sub1_div1"></div>
<div class="sub1_div2"></div>
<div class="sub1_div3"></div>

<div class="swiper-container swiper-subvisual" >

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=7; $i++){?>
			<div style="background:url('/res/images/subvisual/<?=$i?>.jpg'); background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>
	
	<div class="s_slidebar"></div>

	<div class="swiper-pagination"></div>

	<div class="s_Arrow">

		<div class="leftarea">
			<img src="/res/images/mainvisual/m4_left_on.png" alt="왼쪽 이미지로 넘기기">
		</div>

		<div class="rightarea">
			<img src="/res/images/mainvisual/m4_right_on.png" alt="오른쪽 이미지로 넘기기">
		</div>
	</div>
	 
	
</div>

<div class="sub1_div4"></div>
<div class="sub1_div5">
	
	<div class="sub1_div5-1">
		<span>T</span>&nbsp 064) 796-1121 <br>
		<span>F</span>&nbsp 064) 796-8070
	</div>

	<div class="sub1_div5-2">
	
		제주특별자치도 제주시 <br>
		한림읍 한림해안로 136(한림리) 자몽호텔

	</div>

	
	<a href="http://kko.to/yeV4ibNDp">kakao <span>map</span> 보러가기</a>

	<div class="sub1_div6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1665.1664842306877!2d126.26030782588387!3d33.414562485425726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350c607795dbcbeb%3A0xc5b50c734a87261e!2z7J6Q66q97Zi47YWU!5e0!3m2!1sko!2skr!4v1609997306497!5m2!1sko!2skr" width="1140" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>


</div>



<script>
	
	var swiper = null;

	$(function(){

		swiper = new Swiper ('.swiper-subvisual', {
			spaceBetween: 20,
			centeredSlides: true,
			autoplay: {
				delay: 4000,
			},
			disableOnInteraction: false,
			effect:'slide',
			speed: 1000,
			loop:true,
			slidesPerView:'auto',
			observer:true,
			simulateTouch: false,
			on:{
				transitionStart:function(){
					
				},
				transitionEnd:function(){
					this.autoplay.stop();
					this.autoplay.start();
				}
			},
			navigation: {
				nextEl: '.rightarea',
				prevEl: '.leftarea',
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		});
    });
  </script>