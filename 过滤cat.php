<?php
header("Content-type: text/html; charset=utf-8");
show_source(__FILE__);
$res = FALSE;
echo '<!--index.php?ip=-->';

if (isset($_GET['ip']) && $_GET['ip']) {
    $ip = $_GET['ip'];
    $m = [];
    if (!preg_match_all("/cat/", $ip, $m)) {
        $cmd = "ping -c 4 {$ip}";
        exec($cmd, $res);
    } else {
        $res = $m;
    }
}
if ($res) {
    print_r($res);
}

?>

可以使用“ca\t”绕过
