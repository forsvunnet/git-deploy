 <?php 
$github_ips = '207.97.227.253, 50.57.128.197, 108.171.174.178, 50.57.231.61';

$log = json_decode(file_get_contents('log.txt'));
if (isset($_POST) && count($_POST) > 0) {
  /*if (!empty($log)) {
    $log [] = $_POST;
  } else {
  }*/
  $log = array('ip'=>$_SERVER['REMOTE_ADDR'] ,'git'=>shell_exec('git pull'),'post'=>$_POST);
  file_put_contents('log.txt', json_encode($log));

} else {
  echo"<h1>Helps using the right repo</h1>".
    $log . '<hr>' . $github_ips
    ;
}