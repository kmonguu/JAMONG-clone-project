<style>
	.sub2_div1 { width:1200px; text-align:center; margin:0 auto; padding-top:83px; font-size:50px; font-weight:500; }

	.sub2_div2 { width:1200px; margin:0 auto; font-size:19px; font-weight:300; padding-top:50px; position:relative;}
	.sub2_div2 p { font-size:25px; font-weight:500; padding-bottom:20px; }
	.sub2_div2 img { position:absolute; right:0; top:113px; }
	
	.sub2_div3 { height:770px; width:1200px; margin:0 auto; padding-top:50px; position:relative; }

	.swiper-side { background-size:cover; background-position:center; }

	.swiper-subvisual_1 { height:20%; box-sizing:border-box; padding:10px 0; }
	.swiper-subvisual_1 .swiper-slide { height:100%; opacity:.4; }
	.swiper-subvisual_1 .swiper-slide-thumb-active { opacity:1; }

	.swiper-subvisual_2 { width:100%; height:80%; }
	.swiper-subvisual_2 .swiper-slide { height:100%; position:relative; margin:0 auto; }

	.sub2_div4 { width:1200px; height:300px; background:url('/res/images/subvisual/sub2_6.jpg') no-repeat center top; margin:0 auto; padding-top:50px; }

	.leftArea { height:100%; width:84px; position:absolute; top:0; z-index:2; left:0; outline:none; }
	.rightArea { height:100%; width:84px; position:absolute; top:0; z-index:2; right:0; outline:none; }

	.leftArea > img { position: absolute; top:50%; transform:translateY(-50%); opacity:0.4; }
	.leftArea > img:hover { opacity:.8; }
	.rightArea > img { position: absolute; top:50%; transform:translateY(-50%); opacity:0.4; }
	.rightArea > img:hover { opacity:.8; }

</style>


<div class="sub2_div1">Business Center</div>
<div class="sub2_div2">

	<p>비지니스 센터</p>
	호텔 이용객들만 이용이 가능한 비지니스 센터로 여행정보, 비지니스 업무 등 컴퓨터 용무가 필요한 고객분들이 편하게 <br>
	이용할 수 있도록 호텔 내 한켠에 비지니스 센터공간을 마련해 드리고 있습니다.


</div>

<div class="sub2_div3">
	<div class="swiper-container swiper-subvisual_2" >

		 <div class="swiper-wrapper">
			<?for($i=1; $i<=2; $i++){?>
				<div style="background:url('/res/images/subvisual/sub5/<?=$i?>.jpg'); background-position:center center;" class="swiper-slide" >
				</div>
			<?}?>
		</div>
	</div>

	<div class="leftArea">
		<img src="/res/images/subvisual/sub_left.png" alt="왼쪽 이미지로 넘기기">
	</div>

	<div class="rightArea">
		<img src="/res/images/subvisual/sub_right.png" alt="오른쪽 이미지로 넘기기">
	</div>

	<div class="swiper-container swiper-subvisual_1" >

		 <div class="swiper-wrapper">
			<?for($i=1; $i<=2; $i++){?>
				<div style="background:url('/res/images/subvisual/sub5/<?=$i?>.jpg'); background-position:center center;" class="swiper-slide" >
				</div>
			<?}?>
		</div>

	</div>

</div>

<div class="sub2_div4"></div>

 <script>
    var galleryThumbs = new Swiper('.swiper-subvisual_1', {
      spaceBetween: 10,
      slidesPerView: 2,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.swiper-subvisual_2', {
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
    });
  </script>


