<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$call = sql_fetch("SELECT COUNT(*) cnt FROM g4_call_log");
?>

<?if($bo_table){?>
	</div>
<?}?>


<style>

.footer_div1 { height:333px; width:100%; background:#d6bfa8; position:relative; }
.f_ci { width:160px; margin:0 auto; padding-top:41px; }
.f_info { width:600px; color:#775844; margin:0 auto; text-align:center; padding-top:43px; font-weight:300; }
.f_info span { font-weight:500; }

.f_info2 { width:600px;  text-align:left; font-weight:300; }
.f_info2 p { color:#775844; padding:35px 0 0 66px; }
.f_info2 p > span { font-weight:500; }
.f_info2 img { position:absolute; bottom:53px; right:75px; }

.f_info3 { width:100%; height:1px; background:#b59f88; position:absolute; bottom:0px; }

.footer_div2 { width:100%; height:57px; background:#cab197; position:relative; }
.f_info4 { position:absolute; padding-left:175px; }
.f_info4 ul { display:flex;  margin:0 auto; text-align:center; }
.f_info4 ul li { padding:15px; }
.f_info4 ul li:not(:first-child) ::before { content:""; width:1px; height:15px; background:#b1967e; position:absolute; margin:6px -15px; }
.f_info4 ul li a { color:#775844; }

.quick { position:fixed; display:block; bottom:203px; right:0px; height:150px; width:70px; z-index:3; }
.noneQuick { display:none; }

.top { position:absolute; left:0; bottom:0; }
.call { position:absolute; left:0; top:0px; }

</style>

<div class="footer_div1">
	<div class="f_ci">
		<img src="/m/images/mainvisual/f_ci.png" alt="자몽호텔 로고"/>
	</div>
	<div class="f_info">
		제주특별자치도 제주시 한림읍 한림해안로 136(한림리)<br>
		사업자등록번호 : 616-30-89392&nbsp;&nbsp;&nbsp;&nbsp;<span>T</span> 064) 796-1121&nbsp;&nbsp;&nbsp;&nbsp;<span>F</span> 064) 796-8070
	</div>

	<div class="f_info2">
		<p>Copyright &copy; 2020 <span><?=$g4['title']?></span>.All Right Reserved.</p>
		<a href="javascript:m_it9()"><img src="/m/images/mainvisual/it9.png" alt="아이티나인 바로가기"></a>
	</div>
	
	<div class="quick">
		<a href="#"><img src="/m/images/subvisual/top.png" alt="페이지 위로 올라가기" class="top"/></a>
		<a onclick="callNumber('064-796-1121')"><img src="/m/images/subvisual/call.png" alt="전화버튼" class="call" /></a>
	</div>

	<div class="f_info3"></div>

</div>

<div class="footer_div2">
	<div class="f_info4">
		<ul>
			<li><a href="javascript:info2()">개인정보처리방침</a></li>
			<li><a href="javascript:adm()">관리자페이지</a></li>
		</ul>
	</div>

</div>



 

<!--
<?preg_match("/오늘:(.*),어제:(.*),최대:(.*),전체:(.*)/", $config['cf_visit'], $visit);settype($visit[0], "integer");settype($visit[1], "integer");settype($visit[2], "integer");settype($visit[3], "integer");?>
<div style="position:relative;width:640px;height:40px;font-size:18px;background:#222222;color:#dadada;text-align:center;z-index:20;margin-top:-2px; margin-bottom:100px;">
	<div style="margin:6px 0 0;display:inline-block;">
		<span>Today</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[1]?></span>
	</div>
	<div style="margin:6px 0 0 30px;display:inline-block;">
		<span>Total</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[4]?></span>
	</div>
</div>
-->


</div><!-- #menu_cover_area -->

</div><!-- #wrap -->



<?if($config["cf_kakao_key"]){?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script>
// 사용할 앱의 Javascript 키를 설정해 주세요.
Kakao.init('<?=$config["cf_kakao_key"]?>');

</script>
<?}?>

<!-- 전화걸기 스크립트 -->
<script type="text/javascript">

var callFlag = true;
function callNumber(num){   
   if(callFlag){
	   $.post("<?=$g4[mpath]?>/_ajax_call_log.php", null, function(){
		callFlag = false;
		location.href="tel:"+num;
	   });
   }
   setTimeout(function(){callFlag=true;}, 1000 * 3);
}
</script>



<?
include_once($g4[mpath]."/tail.sub.php");
?>


<script>
	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".quick").addClass("noneQuick");
		}
		else {
			$(".quick").removeClass("noneQuick");
		}
	}
</script>