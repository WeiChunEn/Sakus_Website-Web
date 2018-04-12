<?php
	include './conn.php';
	header('Content-Type: application/json; charset=utf8');
    // 宣告一個空陣列 $data
	$arr = array();
    // $t = $_GET['t'];
    if (!empty($_GET["a"])) {
        $a = $_GET["a"];
	} else {
		$a = "";
	}
    if (!empty($_GET["n"])) {
        $n = $_GET["n"];
	} else {
		$n = "";
	}

    $query = sprintf(
        INSERT INTO 
        $n,$a);

    $item = msQuery($query);
    while($itemArr = sqlsrv_fetch_array($item)) 
    {
        $data = array();
        $data["OID"] = $itemArr[0];
        $data["TType"] = $itemArr[1];
        array_push($arr, $data);
    }
    echo json_encode($arr);
	    //當成功 echo 出 api 之後，我們必須讓本次資料庫連線 $conn 釋放記憶體
	sqlsrv_close($conn);
?>