<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once($g4[mpath]."/head.sub.php");
include_once($g4['path']."/lib/calendar.php");
set_session("ss_is_pc_view", "");

if($p){
$ppage=explode("_",$p);
	$pageNum=$ppage[0];
	$subNum=$ppage[1];
	$ssNum=$ppage[2];
	$tabNum=$ppage[3];
}

if($bo_table){
	$ppage=explode("_",$bo_table);
	$pageNum=$ppage[0];
	$subNum=$ppage[1];
	$ssNum=$ppage[2];
	$tabNum=$ppage[3];
}

$ca_temp = 0;
if(isset($it)){
	$ca_temp = 1;
	$ca_id = $it[ca_id2];
	if(!$it[ca_id2]) $ca_id = $it[ca_id];

}

if($ca_id){

	for($i=0; $i<strlen($ca_id); $i++) { 
		$str_cut[$i] = substr($ca_id,$i,1); 
	}
	if($str_cut[0] == "a") $str_cut[0] = 11;
	if($str_cut[0] == "b") $str_cut[0] = 12;
	if($str_cut[0] == "c") $str_cut[0] = 13;
	if($str_cut[0] == "d") $str_cut[0] = 14;
	if($str_cut[0] == "e") $str_cut[0] = 15;

	$pageNum = $str_cut[0]+1;
	$subNum = (strlen($ca_id) <= 2) ? 1 : $str_cut[2];
	$ssNum = (strlen($ca_id) <= 4) ? 1 : $str_cut[4];
	$tabNum = (strlen($ca_id) <= 6) ? 1 : $str_cut[6];

}


if($ca_temp == 1){
	unset($ca_id);
}

$tot=$pageNum."_".$subNum;
$tott=$pageNum."_".$subNum."_".$ssNum;

$cartcnt = get_cart_count(get_session("ss_on_uid"));

// 모바일 변수설정
$board_skin_mpath = $g4[mpath]."/skin/board/".$board[bo_skin];


//모바일 실시간채팅
$ninetalk_key = sql_fetch("SELECT site_key FROM ninetalk_site_key limit 0,1", false);
$talk_link = "location.href='".$g4["mpath"]."/ninetalk.php?site_key=".$ninetalk_key[site_key]."&return_url=".$_SERVER[HTTP_HOST].urlencode($_SERVER[REQUEST_URI])."'";



$menu = array();

$menu["pageNum"][1] = "Hotel zamong";


$menu["pageNum"][2] = "Accommodation";
	$menu["tot"][2][1] = "Deluxe Double";
	$menu["tot"][2][2] = "Family Twin";


$menu["pageNum"][3] = "Facilities";
	$menu["tot"][3][1] = "Front";
	$menu["tot"][3][2] = "Business Center";


$menu["pageNum"][4] = "Reservation";


$menu["pageNum"][5] = "Photo Gallery";


?>


<?if(defined("__INDEX")){
//팝업관리
if(file_exists("$g4[path]/lib/popmng.mobile.lib.php")){ //모바일 팝업관리자 지원되는 셋팅버전인지 확인
	include_once("$g4[path]/lib/popmng.mobile.lib.php");
}
}?>


<script>
function gotoTop(){
	jQuery('html, body').animate( {scrollTop:0} ,300);
}
</script>

<!-- 전화걸기 스크립트 
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
-->

<div id="snsArea"><!-- right_q 열였을때 뒷배경 -->
</div>

<div id="MenuArea" onclick="menuclose()">
</div>


<style type="text/css">

</style>

<script type="text/javascript">
	function menu(){
		jQuery("#MenuZone").height(jQuery("#wrap").height());
		jQuery("#MenuArea").show();
		jQuery("#MenuZone").show();
		jQuery("#MenuZone").animate({right:"0"});
	}
	function menuclose(){
		jQuery("#MenuArea").hide();
		jQuery("#MenuZone").animate({right:"-450px"}, function(){jQuery("#MenuZone").hide();});
	}

	function smenuView(me){

		var isOpen = jQuery(me).parent().hasClass("on");

		$("#Menu > li").removeClass("on");
		$("#Menu > li > ul").stop().slideUp(0);

		if(isOpen){
			jQuery(me).parent().children("ul").slideUp(0, function(){
				$(me).parent().removeClass("on");
			});	
		}else{
			jQuery(me).parent().children("ul").slideDown(0);
			$(me).parent().addClass("on");
			
		}
	}
</script>

<div id="wrap">

	<div id="MenuZone">
		<div class="menuzone_1">
			<img src="/m/images/menu/ci.png" alt="자몽호텔 로고">
		</div>
		
		<div class="menuzone_2">
			<img src="/m/images/menu/menu_close.png" onclick="menuclose()" alt="메뉴닫기">
		</div>

		<div class="menuzone_3">
			<a href="#munum" onclick="menum('menu04-1')"><img src="/m/images/menu/reservation.png" alt="예약바로가기">
		</div>

		<ul id="Menu" >
			<?foreach($menu["pageNum"] as $pn=>$pnStr) {?>
				<li <?=$pageNum == $pn ? "class='on'" : ""?>>
					<? if($pn==2 || $pn==3) {?>
						<a href="#menum" onclick="smenuView(this)" ><?=$pnStr?></a>
					<?} else {?>
						<a href="#menum" onclick="menum('menu<?=sprintf("%02d", $pn)?>-1')" <?=$pageNum == $pn ? "class='on'" : ""?> ><?=$pnStr?></a>
					<?} if(count($menu["tot"][$pn]) > 0){?>
						<ul id="sub_Menu">
							<?foreach($menu["tot"][$pn] as $sn=>$snStr) {?>
								<li  <?=$tot==$pn."_".$sn ? "class='on'" : ""?>>
									<a href="#menum" onclick="menum ('menu<?=sprintf("%02d", $pn)?>-<?=$sn?>')" ><?=$snStr?></a>
								</li>
							<?}?>
						</ul>
					<?}?>
					
				</li>

			<?}?>
		</ul>
	</div>


	<header>
		<div style="background:#000; height:120px; position:relative; z-index:3;">

			<img src="/m/images/menu/menu_open.png" class="menu" onclick="menu()" alt="메뉴오픈">
			<img src="/m/images/mainvisual/login.png" class="login" onclick="login()" alt="로그인바로가기">
			<img src="/m/images/mainvisual/ci.png" class="ci" onclick="home()" alt="로고">
		</div>

	</header>

	

	<div id="menu_cover_area">
		<?if(!defined("__INDEX")){?>

<?
if(file_exists("{$g4['path']}/m/images/subvisual/s{$p}.jpg"))				$Svisual = "s{$p}";
else if(file_exists("{$g4['path']}/m/images/subvisual/s{$bo_table}.jpg"))	$Svisual = "s{$bo_table}";
else if(file_exists("{$g4['path']}/m/images/subvisual/s{$tott}.jpg"))		$Svisual = "s{$tott}";
else if(file_exists("{$g4['path']}/m/images/subvisual/s{$tot}.jpg"))		$Svisual = "s{$tot}";
else if(file_exists("{$g4['path']}/m/images/subvisual/s{$pageNum}.jpg"))	$Svisual = "s{$pageNum}";
else																		$Svisual = "s0";
?>
<div class="subvisual" style="background-image:url('/m/images/subvisual/<?=$Svisual?>.jpg');">
		<p class="subvi_p1" ><?=$menu["pageNum"][$pageNum]?></p>

		<p class="subvi_p2">
			<? foreach($menu["pageNum"] as $pn=>$pnStr) {
					if($pn == 100) continue;
					
					if($pageNum == $pn) {
						echo "Home - ", $pnStr;

						if(count($menu["tot"][$pn]) > 0) {
							foreach($menu["tot"][$pn] as $sn=>$snStr)
								if($subNum == $sn)
									echo " - ", $snStr;
						}
					}
				}
			?>
		</p>
</div>

	<?if($pageNum==2||$pageNum==3){?>
	<div class="sub_title">
		
			<ul id="subvisual_tab" >
				<?foreach($menu["tot"][$pageNum] as $sn=>$snStr) {?>
					<li <?=$tot == $pageNum."_".$sn ? "class='on'" : ""?> >
						<a href="#menum" onclick="menum('menu<?=sprintf("%02d", $pageNum)?>-<?=$sn?>')" ><?=$snStr?></a>
					</li>
				<?}?>
			</ul>
		
		<div class="s_bar"></div>
	</div>
<?}?>

<?if($pageNum==5) {?>

	<p style="text-align:center; line-height:50px; font-size:50px; font-weight:500; padding:80px 0 43px;">Photo Gallery</p>
	<? if ($bo_table) {?>
		<div class="boardarea">
	<?}?>

<?}?>
<?}?>