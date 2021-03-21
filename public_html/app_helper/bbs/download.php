<?
include_once("./_common.php");


$sql = " select bf_source, bf_file from $g4[board_file_table] where bo_table = '$bo_table' and wr_id = '$wr_id' and bf_no = '$no' ";
$file = sql_fetch($sql);
if (!$file[bf_file])
    alert_close("파일 정보가 존재하지 않습니다.");


$filepath = "$g4[path]/data/file/$bo_table/$file[bf_file]";
$filepath = addslashes($filepath);
if (!is_file($filepath) || !file_exists($filepath))
    alert("파일이 존재하지 않습니다.");



// 이미 다운로드 받은 파일인지를 검사한 후 게시물당 한번만 포인트를 차감하도록 수정
$ss_name = "ss_down_{$bo_table}_{$wr_id}";
if (!get_session($ss_name))
{
    // 다운로드 카운트 증가
    $sql = " update $g4[board_file_table] set bf_download = bf_download + 1 where bo_table = '$bo_table' and wr_id = '$wr_id' and bf_no = '$no' ";
    sql_query($sql);

    set_session($ss_name, TRUE);
}

$g4[title] = "$group[gr_subject] > $board[bo_subject] > " . conv_subject($write[wr_subject], 255) . " > 다운로드";

if (preg_match("/^utf/i", $g4[charset]))
    $original = urlencode($file[bf_source]);
else
    $original = $file[bf_source];


if(preg_match("/msie/i", $_SERVER[HTTP_USER_AGENT]) && preg_match("/5\.5/", $_SERVER[HTTP_USER_AGENT])) {
    header("content-type: doesn/matter");
    header("content-length: ".filesize("$filepath"));
    header("content-disposition: attachment; filename=\"$original\"");
    header("content-transfer-encoding: binary");
} else {
    $content_type = mime_content_type($file[bf_file]);
    if(!$content_type) $content_type = "file/unknown";
    header("content-type: {$content_type}");
    header("content-length: ".filesize("$filepath"));
    header("content-disposition: attachment; filename=\"$original\"");
    header("content-description: php generated data");
}
header("pragma: no-cache");
header("expires: 0");
flush();

$fp = fopen("$filepath", "rb");

// 4.00 대체
// 서버부하를 줄이려면 print 나 echo 또는 while 문을 이용한 방법보다는 이방법이...
//if (!fpassthru($fp)) {
//    fclose($fp);
//}

$download_rate = 10;

while(!feof($fp)) {
    //echo fread($fp, 100*1024);
    /*
    echo fread($fp, 100*1024);
    flush();
    */

    print fread($fp, round($download_rate * 1024));
    flush();
    usleep(1000);
}
fclose ($fp);
flush();