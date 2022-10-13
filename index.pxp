<html>
	<head>
	<title>quiz</title>
	</head>
	<body>
		<?php
			$con = new mysqli ("127.0.0.1", "root", " ", "quiz");
			$res = $con -> query("SELECT * FROM questions");

			$row = $res -> fetch_all(MYSQLI_ASSOC);
			for($i-0;$i<count($rows);i++){
			echo $rows[$i]["content"];
			}
		?>
	</body>
</html>