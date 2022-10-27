<html>
    <head>
    <meta charset="utf-8">
        <title>Quiz</title>
        <style>
            header {
                background-color: #33d333;
                height: 10%;
                text-align: center;
            }
            section {
                background-color: #33c633;
                height: 90%;
                text-align: center;
            }
        </style>
        <div class="pytania">
            <form method="post">
        <?php
        $con = new mysqli("127.0.0.1","root","pass","quiz_matematyczny");
        $res = $con->query("SELECT id, desription FROM questions");
        $rows = $res->fetch_all(MYSQLI_ASSOC);
        for($i=0;$i<count($rows);$i++){
            echo $rows[$i]["description"].`</br>`;
            $res2 = $con->query("SELECT");
            $rows2 = $res2 -> fetch_all(MYSQLI.ASSOC);
            for ($i=0)
        }
        ?>
            </form>
        </div>
        <body>
            <header><strong><font size="8">Quiz matematyczny</font></strong></header>
            <section><br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <strong><font size="6">Rozpocznij quiz!</font></strong></section>
        </body>
    </head>
</html>