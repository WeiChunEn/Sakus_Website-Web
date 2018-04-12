<?php
//判斷 $_GET 內容
if($_GET){
	echo '使用了<font color="red">get</font>方式傳遞資料,請看「<font color="red">網址列</font>」上顯示的網址內容<br /><br />';
	if($_GET['name']!=''){echo '姓名:'.$_GET['name'].'<br />';}else{echo '無名氏<br />';}
	if($_GET['telphone']!=''){echo '密碼:'.$_GET['telephone'].'<br />';}else{echo '無密碼<br />';}
	
	echo '<p style="color:red">送出的資料將會是以「陣列」方式儲存在 $_GET 變數當中，<br />可使用 var_dump($_GET) 或 print_r($_GET) 涵數查詢內容如下:</p>';
	echo '<p>';
	var_dump($_GET);
	echo '</p>';
}