<pre>
<?php
  //输出服务器的 IP地址、端口号以及主机名。$_SERVER 是 PHP 的全局数组，用于提供服务器和执行环境信息。
  echo "Server: ".$_SERVER["SERVER_ADDR"].':'.$_SERVER["SERVER_PORT"]." (".$_SERVER["SERVER_NAME"].")\n";
  //作用：输出环境变量 MESSAGE、USERNAME 和 PASSWORD 的值。
  //MESSAGE 来源于普通环境变量。
  echo "Message: ".$_ENV["MESSAGE"]."\n";
  //USERNAME 来源于 Kubernetes 的 ConfigMap。
  echo "Username: ".$_ENV["USERNAME"]."\n";
  //PASSWORD 来源于 Kubernetes 的 Secret。
  echo "Password: ".$_ENV["PASSWORD"]."\n";

  //示例 URL：http://foo.bar.com/?url=http://po1-svc
  // 这是一个访问 po1-svc 服务的 HTTP 请求。url 参数将被 PHP 脚本用来获取外部数据。
  //检查 URL 参数是否存在。
  if (isset($_GET["url"])) {
  //数据来源：通过 GET 参数传递的 url。
    echo "\nResponse from ".$_GET["url"]."...\n";
  }
?>
</pre>
<?php
//检查 URL 参数是否存在。
  if (isset($_GET["url"])) {
    //如果存在，通过 file_get_contents() 获取指定 URL 的响应内容，并输出。
    echo file_get_contents($_GET["url"]);
  }
?>

