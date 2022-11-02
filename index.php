<html>
	<head>
	<title>Quiz matematyczny</title>
	</head>
	<body>
        <div class="pytania">
            <form method="post">
        <?php
        $con=new mysqli("127.0.0.1","root","pass","quiz_matematyczny");
        $res=$con->query("SELECT id, desription FROM questions");
        $rows=$res->fetch_all(MYSQLI_ASSOC);
        for($i=0;$i<count($rows);$i++){
            echo $rows[$i]["description"].`</br>`;
            $res2 = $con->query("SELECT");
            $rows2 = $res2 -> fetch_all(MYSQLI.ASSOC);
            for ($i=0); 
        }
        ?>
            </form>
        </div>
	</body>
</html>