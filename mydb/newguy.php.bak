<?php
/************  NewGuy 模块——社团助考新人登记  *******************/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//连接数据库
	$con=mysql_connect();

	//连接失败的错误处理
	if(!$con){
		die("无法连接数据库");
	}

	mysql_select_db("test_signAU",$con);

	$sql="INSERT INTO tblCheerWithYou (
		Name,
		Gender,
		College,
		Faculty,
		Contact,
		PE,
		Exam,
		CET,
		PE_Subject,
		Advantage,
		Drawback,
		Exam_Selfstudy_Place,
		Exam_Requirements,
		CET_Simulate,
		FourOrSix,
		CET_Selfstudy_Place,
		CET_Requirements
		) 
		VALUES (
		'$_POST[Name]',
		'$_POST[Gender]',
		'$_POST[College]',
		'$_POST[Faculty]',
		'$_POST[Contact]',
		'$_POST[PE]',
		'$_POST[Exam]',
		'$_POST[CET]',
		'$_POST[PE_Subject]',
		'$_POST[Advantage]',
		'$_POST[Drawback]',
		'$_POST[Exam_Selfstudy_Place]',
		'$_POST[Exam_Requirements]',
		'$_POST[CET_Simulate]',
		'$_POST[FourOrSix]',
		'$_POST[CET_Selfstudy_Place]',
		'$_POST[CET_Requirements]'
		)";
		
	$sql = test_input($sql);
		
	try{
		if(mysql_query($sql,$con)){
			//echo "成功添加记录";
			exit("记录添加成功");
		}
		else
		{
			//echo "记录添加时出现问题：" . mysql_error();
			//echo "<br>";
			die("出错：<br>" . mysql_error());
		}
	}

	catch(Exception $e){
		echo "啊哦。。。服务器君出错啦。。。再试一次吧。。。";
		echo "<br><br>";
		echo "错误信息：" . $e->getMessage();
	}
	
	mysql_close($con);
}
else
{
	die("<h1>非法请求！</h1>");
}	
	
/*********   检查函数，用于检查用户输入并摒弃无效字符  ************/
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>