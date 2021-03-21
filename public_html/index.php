<?
include_once("./_common.php");
include_once("$g4[path]/lib/latest.lib.php");

define("__INDEX",TRUE);

$g4['title'] = "";
include_once("./_head.php");
?>
<div id="mainWrap">
<?
	//팝업
	include_once("$g4[path]/lib/popmng.lib.php");
?>

	<div class="wrap-main wrap-content">
		<section class="layout">
			<div class="page Bg01">
				<?include_once("{$g4["path"]}/res/include/mainvisual.php");?>
			</div>

			<div class="page Bg02">
				<?include_once("{$g4["path"]}/res/include/m1.php");?>
			</div>

			<div class="page Bg03">
				<?include_once("{$g4["path"]}/res/include/m2.php");?>
			</div>

			<div class="page Bg04">
				<?include_once("{$g4["path"]}/res/include/m3.php");?>
			</div>

			<div class="page Bg05">
				<?include_once("{$g4["path"]}/res/include/m4.php");?>
			</div>

			<div class="page Bg06 last" >
				<?include_once("{$g4["path"]}/res/include/copy.php");?>
			</div>
			
		</section>
	</div>
</div>

<?include_once("./script.php");?>



<?
include_once("./_tail.php");
?>