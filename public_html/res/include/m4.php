<style>

	.m_div5 {background:url('/res/images/mainvisual/m3_3.jpg'); height:1000px; width:100%; position:relative; }

	.m_div5-1 { position:relative; height:600px; width:1200px; margin:0 auto; }
	.m_div5_title {font-size:50px; color:#775844; font-weight:500; text-align:center; padding-bottom:20px; }
	.m_div5_title a {position:absolute; font-size:16px; color:#775844; right:30px; top:27px; font-weight:500; border-bottom:2px solid #baafa8; text-decoration:none; line-height:35px;}

	.bar2 {background:#c9c9c9; width:100%; height:1px; position:absolute; z-index:3; bottom:40px; }
	.m_Arrow { width:122px; height:22px; position:absolute; left:50%; margin-left:-61px; bottom:0; z-index:2; }
	.m_Arrow::before { content:""; display:block; left:61px; top:0; width:1px; height:22px; background:#d9d9d9; position:absolute; }


	.m_Arrow > div { position:absolute; width:41px; height:100%; top:0; cursor:pointer; outline:none; }
	.m_Arrow > div > img { position:absolute; transition:.2s linear; opacity:0.2; }
	.m_right { right:0; }
	.m_right > img { left:0; }
	.m_right:hover > img { left:20px; opacity:1; }
	.m_left { left:0; }
	.m_left > img { right:0; }
	.m_left:hover > img { right:20px; opacity:1; }

	.swiper_bar .swiper-pagination-bullet { position:absolute; background:#775844; height:3px; width:1200px; margin:0 auto; right:0; left:0; bottom:39px !important; z-index:3; border-radius:0; }


	
</style>

<div class="m_div5">
	<div style="position:absolute; width:100%; height:600px; top:19%; left:0; right:0;">
		<div class="m_div5-1">
			<div class="m_div5_title">
				<span>Photo Gallery</span>
				<a href="#ReadMore" onclick="menulink('menu05-1')">Read More</a>
			</div>

			<?=latest("gallery", "5_1_1_1",  12, 35);?>
			<div class="m_Arrow">

				<div class="m_left">
					<img src="/res/images/mainvisual/m4_left_on.png" alt="왼쪽 화살표" />
				</div>

				<div class="m_right">
					<img src="/res/images/mainvisual/m4_right_on.png" alt="오른쪽 화살표" />
				</div>

			</div>

		</div>
		<div class="bar2"></div>
		<div class="swiper_bar">
			<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
		</div>
	</div>

</div>
