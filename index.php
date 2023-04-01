<?php
//error_reporting(0);
chdir("/tmp");
$db = [];
function get_time () {
    $times = explode(' ',microtime());
    $time = $times[0]*1000 + $times[1];
    return $time;
}
$time = get_time();
ob_start();
eval(file_get_contents("php://input"));
$content = ob_get_contents();
ob_end_clean();
echo json_encode(['status'=>0,'content'=>$content,'time'=>get_time()-$time,'db'=>$db]);