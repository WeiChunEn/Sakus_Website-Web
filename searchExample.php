<?php
	include "./conn.php";
	header('Content-Type: application/json; charset=utf8');
	header("Access-Control-Allow-Origin:http://10.56.21.232:8087/project/SAKUS_茶訂單.html ");
	// 宣告一個空陣列 $data
	$arr = array();
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$telephone = $_GET['telephone'];
	$email = $_GET['email'];
	$tea = $_GET['tea'];
	$price = "0";
	$sum = $_GET['sum'];
	$error=$_GET['problem'];
	
	echo $firstname;

	$query = sprintf("
	exec xp_insertTeaReservation '%s', '%s', '%s', '%s', '%s', '%s', '%s'",
	$telephone,$firstname,$lastname,$email,$tea,$price,$sum);

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
	// 	// $stmt = sqlsrv_prepare($conn, $sql, $procedure_params);


	

	
 ?>