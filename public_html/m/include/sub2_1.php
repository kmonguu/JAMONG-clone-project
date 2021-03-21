<style>
.sub2_div1 {  position:relative; width:600px; height:135px; font-size:65px; font-weight:500; color:#000; text-align:center; font-family:roboto; margin:0 auto; line-height:160px; }

.sub2_div2 { height:465px; width:600px; margin:0 auto; padding-top:50px; position:relative; }

.swiper-side { background-size:cover; background-position:center; }

.swiper-sub2-1 { width:100%; height:75%; }
.swiper-sub2-1 .swiper-slide { height:100%; position:relative; margin:0 auto; }

.swiper-sub2-2 { height:25%; box-sizing:border-box; padding-top:20px; }

.swiper-sub2-2 .swiper-slide img { width: 100%; height:100%; }
.swiper-sub2-2 .swiper-slide-thumb-active .black { opacity:0; }
.black { position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:3; }


.leftArea { height:65px; width:65px; position:absolute; bottom:116px; z-index:2; right:68px; outline:none; }
.rightArea { height:65px; width:65px; position:absolute; bottom:116px; z-index:2; right:0; outline:none; }

.leftArea > img { position: absolute; top:50%; transform:translateY(-50%); opacity:0.4; }
.leftArea > img:hover { opacity:.8; }
.rightArea > img { position: absolute; top:50%; transform:translateY(-50%); opacity:0.4; }
.rightArea > img:hover { opacity:.8; }


.sub2_div3 { position:relative; width:600px; height:401px; margin:0 auto; }
.sub2_div3 > a > img { display:block; margin:0 auto; padding-top:30px; } 

.sub2_div4 { position:relative; width:600px; margin:0 auto; padding-top:65px; padding-bottom:80px; }
	
</style>

<div class="sub2_div1">Deluxe Double</div>

<div class="sub2_div2">
	<div class="swiper-container swiper-sub2-1" >

		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div style="background:url('/m/images/subvisual/sub2-2/<?=$i?>.jpg'); background-position:center center;" class="swiper-slide" >

				</div>
			<?}?>
		</div>
	</div>

	<div class="leftArea">
		<img src="/m/images/subvisual/arrow_l.png" alt="왼쪽 이미지로 넘기기">
	</div>

	<div class="rightArea">
		<img src="/m/images/subvisual/arrow_r.png" alt="오른쪽 이미지로 넘기기">
	</div>

	<div class="swiper-container swiper-sub2-2" >

		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div class="swiper-slide" >
					<img src='/m/images/subvisual/sub2-2/<?=$i?>.jpg' alt="방사진" />
					<div class="black"></div>
				</div>
			<?}?>
		</div>

	</div>

</div>

<div class="sub2_div3">
	<img src="/m/images/subvisual/sub2-3.jpg" alt="패밀리 요금표" />
	<a href="#menum" onclick="menum('menu04-1')"><img src="/m/images/subvisual/sub2-3-1.jpg" alt="예약바로가기"></a>
</div>

<div class="sub2_div4">
	<img src="/m/images/subvisual/sub2-4-1.jpg" alt="info" />
</div>

<script>
	var galleryThumbs = new Swiper('.swiper-sub2-2', {
		spaceBetween: 10,
		slidesPerView: 4,
		loop: true,
		freeMode: true,
		loopedSlides: 5, //looped slides should be the same
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		autoplay: {
			delay: 4000,
		},
		on:{
			transitionStart:function(){ },
			transitionEnd:function(){
				this.autoplay.stop();
				this.autoplay.start();
			}
		},
		
		
	});
	var galleryTop = new Swiper('.swiper-sub2-1', {
		spaceBetween: 10,
		loop: true,
		loopedSlides: 5, //looped slides should be the same
		navigation: {
		nextEl: '.rightArea',
		prevEl: '.leftArea',
		},
		thumbs: {
		swiper: galleryThumbs,
		},
		autoplay: {
			delay: 4000,
		},
		on:{
			transitionStart:function(){ },
			transitionEnd:function(){
				this.autoplay.stop();
				this.autoplay.start();
			}
		},
	
	});
	</script>