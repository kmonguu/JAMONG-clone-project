<style>
.sub1_div1 { position:relative; width:600px; height:129px; font-size:65px; font-weight:500; color:#000; text-align:center; font-family:roboto; margin:0 auto; line-height:120px;}

.sub1_div2 { position:relative; width:600px; height:325px; margin:0 auto; background:url('/m/images/subvisual/sub1-1.jpg') no-repeat center; }

.sub1_div3 { width:640px; height:815px; background:url('/m/images/subvisual/sub1-2.jpg') no-repeat center; }

.sub1_div4 { position:relative; width:600px; height:118px; margin:0 auto; background:url('/m/images/subvisual/sub1-3.jpg') no-repeat center; }

.swiper_mzamonghotel { width:100%; height:387px; position:relative; right:0; z-index:1; }
.swiper_mzamonghotel .swiper-slide { width:404px; height:274px; position:relative; margin:0 auto; }

.swiper_bar { position:absolute; bottom: 88px !important; }
.swiper_bar .swiper-pagination-bullet {width:128px; height:3px; bottom:88px; background:#d6bfa8; margin:0 !important; opacity:0; border-radius:0; }
.swiper_bar .swiper-pagination-bullet-active {opacity:1;}


.m_arrow { position:relative; width:122px; height:22px; bottom:60px; margin:0 auto; }
.m_arrow::before { content:""; position:absolute; width:1px; height:22px; background:#d9d9d9; right:61px; }
.SubRight { position:absolute; right:0; z-index:2; outline:none;}
.SubLeft { position:absolute;  left:0; z-index:2; outline:none;}

.sub1_div5 { position:relative; width:600px; height:126px; margin:0 auto; background:url('/m/images/subvisual/sub1-5.jpg') no-repeat center; }

.sub1_div6 { position:relative; width:100%; height:350px; background:#f9f4f2; }
.address { display:none; position:absolute; bottom:150px; left:20px; box-shadow:5px 5px 8px 5px rgba(0,0,0,0.1); }
.showaddress { display:block; }
.sub1_div6 a { color:#fff; text-decoration:none; position:absolute; padding:17px 46px 17px 42px; background:#805f4a; text-align:center; font-weight:300; top:240px; left:198px; }
.sub1_div6 a span { font-weight:700; }

</style>

<div class="sub1_div1">Prologue</div>
<div class="sub1_div2"></div>
<div class="sub1_div3"></div>
<div class="sub1_div4"></div>


<div class="swiper-container swiper_mzamonghotel">
	 <div class="swiper-wrapper">
		<?for($i=1; $i<=5; $i++){?>
			<div style="background:url('/m/images/subvisual/sub1-4/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
	
			</div>
		<?}?>
	</div>

	<div style="position:absolute; width:100%; height:1px; background:#cccccc; bottom:90px; "></div>

	<div class="swiper_bar">
		<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
	</div>
	
	<div class="m_arrow">
		<div class="RightArea"><img class="SubRight" src="/m/images/subvisual/swiper_mzamonghotel_right.png" alt="메인비주얼 다음버튼"></div>
		<div class="LeftArea"><img class="SubLeft" src="/m/images/subvisual/swiper_mzamonghotel_left.png" alt="메인비주얼 이전버튼"></div>
	</div>

</div>

<div class="sub1_div5"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.456986015139!2d126.25938365923813!3d33.41481270608925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350c607795dbcbeb%3A0xc5b50c734a87261e!2z7J6Q66q97Zi47YWU!5e0!3m2!1sko!2skr!4v1610424065588!5m2!1sko!2skr" width="640" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div class="sub1_div6">
	<img src="/m/images/subvisual/sub1-6.jpg" class="address">
	<a href="http://kko.to/-CVvDLNYj">kakao <span>map</span> 보러가기</a>
</div>

<script>

	var swiper_sub1 = null;
	$(function(){
		swiper_sub1 = new Swiper('.swiper_mzamonghotel', {
						spaceBetween: 60,
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
							transitionStart:function(){ },
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.SubRight',
							prevEl: '.SubLeft',
						},

						pagination: {
							el: '.swiper_bar',
							type:'bullets',
						}
			});
		});
</script>

<script>
	$(function(){
		mapScroll();
	});

	$(window).scroll(function() {
		mapScroll();
	});
	
	function mapScroll(){
		var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

		if(scrollBottom <= 300) {
			$(".address").addClass("showaddress");
		}
		else {
			$(".address").removeClass("showaddress");
		}
	}
</script>