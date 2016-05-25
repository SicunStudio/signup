<?php
/******************  第一次运行，初始化数据库  ***********************/

echo "连接数据库。。。<br>";
$con=mysql_connect();

//连接失败的错误处理
if(!$con){
	echo "数据库连接失败！<br>";
	die("无法连接数据库");
}

echo "检测是否已创建数据库。。。<br>";
	if (mysql_query("CREATE DATABASE test_signAU",$con))
	  {
	  echo "Database created <br>";
	  }
	else
	  {
	  echo "Error creating database: " . mysql_error();
	  }
mysql_select_db("test_signAU",$con); 


echo "检测是否已创建登记表。。。<br>";
$sql="CREATE TABLE tblCheerWithYou 
	(
		ID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		Name						varchar(15),
		Gender						char(4),
		College						varchar(50),
		Faculty						varchar(50),
		Contact						tinytext,
		PE							bool,
		Exam						bool,
		CET							bool,
		PE_Subject					varchar(15),
		Advantage					varchar(15),
		Drawback					varchar(15),
		Exam_Selfstudy_Place		varchar(15),
		Exam_Requirements			text,
		CET_Simulate				char(8),
		FourOrSix					char(8),
		CET_Selfstudy_Place			varchar(15),
		CET_Requirements			text
		
	)";
mysql_query($sql,$con);
echo mysql_error();


mysql_close($con);
?>