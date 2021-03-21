<div class="wrap-footer">
	<footer class="layout">
		<div class="position">
			<!--하단 영역-->
			<div class="f_ci">
				<img src="/res/images/footer/f_ci.png" alt="로고">
			</div>
			
			<div class="f_1">
				제주특별자치도 제주시 한림읍 한림해안로 136(한림리)<br>
				사업자등록번호 : 616-30-89392<br>
				<span>T</span>&nbsp;064) 796-1121 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>F</span>&nbsp;064) 796-8070
			</div>
			
			<div class="f_2">

				<div class="f_3">
					Copyright &copy; 2020 <span><?=$g4['title']?></span>.All Right Reserved. | PRIVACY POLICY
				</div>

				<div class="f_4">
					<a href="javascript:it9()"><img src="/res/images/footer/f_it9.png" alt="아이티나인 바로가기"></a>
					<a href="javascript:adm()"><img src="/res/images/footer/f_adm.png" alt="관리자 로그인 바로가기"></a>
				</div>

			</div>
			<div class="top">
				<a href="#top" onclick="go_page(1)"><img src="/res/images/footer/gototop.png" alt="페이지 위로 바로가기" /></a>
			</div>
			
		</div>
	</footer>
</div>

<script>

	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".top").addClass("noneTop");
		}
		else {
			$(".top").removeClass("noneTop");
		}
	}
	
</script>