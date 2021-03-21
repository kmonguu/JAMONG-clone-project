<style>

.Mainlist_1 { background:url( '/m/images/mainvisual/info.jpg' ) no-repeat center top; height:427px; width:100%; position:relative; }
.Mainlist_1 a { border:1px solid #fff; position:absolute; top:350px; left:190px; padding:0 70px; color:#fff; font-size:25px; }

.swiper-Mainlist_2 { height:1000px; width:100%; position: relative; margin:0 auto; left:0; right:0; top:0; z-index:1; overflow:hidden; }

.title { position:absolute; color:#fff; font-size:50px; font-weight:500; top:57px; left:20px; z-index:3; }

.more { position:absolute; border-bottom: 2px solid #fff; bottom:400px; right:20px; padding-bottom:10px; z-index:3; }
.more a { color:#fff; font-size:20px; font-weight:500; }

.bar { position:absolute; height:1px; width:100%; background:#6e6665; bottom:363px; z-index:3; }

.btn { position:absolute; width:75px; height:25px; top:73px; right:21px; z-index:3; }
.btn::before { position:absolute; content:""; display:block; left:37px; width:2px; height:25px; background:#6e6665; }
.left { position:absolute; width:13px; height:25px; left:0; outline:none; }
.right { position:absolute; width:13px; height:25px; right:0; outline:none; }

.m_btn { position:absolute; width:592px; height:55px; bottom:85px; left:24px; z-index:3; }
.m_btn a { display:block; color:#fff; font-size:21px; font-weight:500; line-height:25.8px; border:1px solid #6e6665; padding:17px 108px; }
.m_btn a:first-child { float:left; }
.m_btn a:last-child { float:right; }
.m_btn a:hover { background:#d6bfa8; }

.Mainlist_3 { position:relative; width:100%; height:382px; z-index:3; }

.Mainlist_4 { position:relative; width:100%; height:890px; background:url('/m/images/mainvisual/gallery_bg.jpg') no-repeat center top; }
.Mainlist_4-1 { width:100%; margin:0 auto; padding-top:60px; }
.gallery_title {font-size:50px; color:#775844; font-weight:500; padding:0 0 34px 20px; }
.gallery_title a {font-size:16px; color:#775844; float:right; font-weight:500; border-bottom:2px solid #baafa8; text-decoration:none; padding:37px 0 9px 0;}

.arrow { position:absolute; height:25px; width:75px; top:95px; right:20px; z-index:3; }
.arrow::before { position:absolute; content:""; display:block; left:37px; width:2px; height:25px; background:#c6c6c6; }
.g_left { position:absolute; width:13px; height:25px; left:0; outline:none; }
.g_right { position:absolute; width:13px; height:25px; right:0; outline:none; }

.info { position:absolute; border-bottom:2px solid #baada6; padding-bottom:10px; bottom:90px; right:50px; z-index:3; }
.info a { color:#775844; font-size:18px; font-weight:500; }

</style>

<div class="Mainlist_1">
	<a href="#menum" onclick="menum('menu01-1')">Read More</a>
</div>

<div class="swiper-container swiper-Mainlist_2">
	<div class="title">Accommodation</div>
	<div class="more"><a href="#menum" onclick="menum('menu02-1')">Read More</a></div>
	<div class="bar"></div>
	<div class="btn">

		<div class="left">
			<img src="/m/images/mainvisual/leftbtn.png" alt="이전">
		</div>

		<div class="right">
			<img src="/m/images/mainvisual/rightbtn.png" alt="다음">
		</div>

	</div>

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=2; $i++){?>
			<div style="background:url('/m/images/mainvisual/room/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
		<?}?>
	</div>

	<div class="m_btn">
		<a href="#menum" onclick="menum('menu02-2')">더보기</a>
		<a href="#menum" onclick="menum('menu04-1')">예약안내</a>
	</div>

</div>

<div class="Mainlist_3">
	<div class="banner">
		<a href="#menum" onclick="menum('menu03-1')"><img src="/m/images/mainvisual/front.jpg" alt="프론트 바로가기" /></a>
		<a href="#menum" onclick="menum('menu03-2')"><img src="/m/images/mainvisual/business.jpg" alt="비즈니스센터 바로가기" /></a>
	</div>
</div>

<div class="Mainlist_4">
	<div class="Mainlist_4-1">
		<div class="gallery_title">
			<span>Photo Gallery</span>
			<div class="arrow">

				<div class="g_left">
					<img src="/m/images/mainvisual/g_left.png" alt="이전">
				</div>

				<div class="g_right">
					<img src="/m/images/mainvisual/g_right.png" alt="다음">
				</div>

			</div>
			
		</div>
		<?=latestm("gallery", "5_1_1_1",  12, 35);?>
		<div class="info"><a href="#menum" onclick="menum('menu05-1')">Read More</a></div>
	</div>
	
</div>

<script>
var swiper_mainvisual = null;

	$(function(){
		swiper_mainvisual = new Swiper('.swiper-Mainlist_2', {
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
							nextEl: '.right',
							prevEl: '.left',
						},
		});
	});

</script>