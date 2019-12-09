<?php
	$con = mysqli_connect('localhost','phpmyadmin','qwer1234','testdb');
?>

<html>
<head>
<meta charset="utf-8">
<title>1조 졸업작품</title>
<script>
setTimeout("history.go(0);",5000);
</script>
</head>

<body>
<?php

	$query = "SELECT * FROM data order by date desc limit 1";
	echo "date : ". date("Y-m-d H:i:s")."<br/>";
	$result = mysqli_query($con, $query);
	//mysquli_data_seek_($resilt, 2);
	while($row = mysqli_fetch_array($result))
	{
		echo "거리 : ". $row[distance];
		echo '<br>';

		 if($row[distance] > 20)
        	{
                	echo "<h1>서랍을 닫아주세요!</h1>";
        	}

        	else
        	{
                	echo "<h1>서랍이 열리지 않았습니다.</h1>";
        	}
		echo "----------------------------". "<br/>";
		
	}
	mysqli_close($con);
?>

</body>
</html>

