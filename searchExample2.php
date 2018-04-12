<?php
	include "./conn.php";
	header('Content-Type: application/json; charset=utf8');
	header("Access-Control-Allow-Origin:http://10.56.21.232:8087/project/SAKUS_營位訂單.html ");
	// 宣告一個空陣列 $data
	$arr = array();
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$telephone = $_GET['telephone'];
	$email = $_GET['email'];
    $area = $_GET['area'];
    $areastyle =$_GET['areastyle'];
    $date = $_GET['date'];
    $carnum = $_GET['carnum'];
    $camp = $_GET['camp'];
    $campnum = $_GET['campnum'];
    $quilt = $_GET['quilt'];
	$quiltnum = $_GET['quiltnum'];
	$pet = $_GET['pet'];
	$petnum = $_GET['petnum'];
	$error = $_GET['problem'];
	

	$query = sprintf("
	exec xp_insertCampReservation '%s', '%s', '%s', '%s', '%s','%s', %d , %d , %d, %d, %d, %d, %d, %d" ,
	$telephone,$firstname,$lastname,$email,$date,$area,$areastyle,$carnum,$camp,$campnum,$quilt,$quiltnum,$pet,$petnum);

	msQuery($query);

	$query = sprintf("
	declare @I int
	INSERT INTO Object (CName) values('$error')
	set @I = @@identity
	INSERT INTO dbo.Report (RID,problem, Telephone, Email)
	VALUES (@I,'$error', '$telephone', '$email') ");

	echo 'A '.$query;
	$item =msQuery($query);
	echo $item;


	// if(isset($firstname) && isset($lastname) && isset($telephone) && isset($email) && isset($tea) && isset($price) && isset($sum) )
	// {
	// 	//寫好指令
	// 	echo 'In';
    //     // $sql = '{exec xp_insertTeaReservation (?, ?, ?, ?, ?, ?, ?)}';
    //     // //寫好要帶的參數
	// 	// $procedure_params = array(
	// 	// 	array(&$firstname, SQLSRV_PARAM_IN),
	// 	// 	array(&$lastname, SQLSRV_PARAM_IN),
	// 	// 	array(&$telephone, SQLSRV_PARAM_IN),
	// 	// 	array(&$email, SQLSRV_PARAM_IN),
	// 	// 	array(&$tea, SQLSRV_PARAM_IN),
	// 	// 	array(&$price, SQLSRV_PARAM_IN),
	// 	// 	array(&$sum, SQLSRV_PARAM_IN),
    //         //底下這裡store procedure會回傳資料，所以最後有幾個是SQLSRV_PARAM_OUT
    //         //沒回傳就拿掉ㄅ
	// 		//array(&$MeID, SQLSRV_PARAM_OUT, null, SQLSRV_SQLTYPE_INT),
	// 		//array(&$SID, SQLSRV_PARAM_OUT, null, SQLSRV_SQLTYPE_INT),
	// 		//array(&$PassportCode, SQLSRV_PARAM_OUT, null, SQLSRV_SQLTYPE_VARCHAR(32)),
	// 		//array(&$State, SQLSRV_PARAM_OUT, null, SQLSRV_SQLTYPE_INT)
	// 	// );
	// }
    //     // 執行storeprocedure
	// 	//$stmt = sqlsrv_prepare($conn, $sql, $procedure_params);


	

	
 ?>