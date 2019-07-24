<?php
session_start();
?>
<?php
error_reporting(0);
?>
    <doctype html>
    <html>
    <body>
    <form id="ListToDoAddNew.php" method="post">
        <style>
            h2,h3
            {
                text-align:center;
            }
            p
            {
                font-size:22px;
                margin-left:150px;
            }
            p1
            {
                font-size:22px;
                margin-left:300px;
            }
            .texts
            {
                font-size:22px;
                margin-left:150px;
            }
            input[type=text]
            {
                margin-left:150px;
                font-size:20px;
                width:200px;
                height:26px;
                border: 2px solid black;
            }
            textarea
            {
                margin-left:300px;
                font-size:20px;
                width:776px;
                height:170px;
                border: 2px solid black;
            }
            .button4
            {
                margin-left:875px;
                width:210px;
                font-size:20px;
                border-radius:7px;
                border: 2px solid black;
            }
            .button6:hover
            {
                background-color:limegreen;
            }
            .button6
            {
                float:right;
                margin-right:300px;
                width:210px;
                font-size:20px;
                border-radius:7px;
                border: 2px solid black;
            }

        </style>
        <script>
            function Redirect1Back()
            {
                document.location.href = 'http://localhost/phpproject1/ListToDo.php'
            }

            var d = new Date();
            document.getElementById("time").innerHTML = d.getDate();
        </script>
        <header>
            <h2><br/>
                Darāmo lietu saraksts
            </h2>
            <h3>
                Pievienot jaunu
            </h3>
        </header>
        <div class="texts">
            <p>Virsraksts: </p>
            <input type="text" name="TextboxForFirstText" style="width:780px"
                   id="TextboxForFirstText">

        </div>

        <div class="texts2"><br/>
            <p1>Apraksts:</p1>
            <br/><br/>

            <input type="text" name="TextboxForSecondText">
            </input>
        </div>
        <br/>
        <div>
            <button class="button button6" name="submit">Pievienot jaunu</button>
        </div>
    </form><br/>

    </body>
    </html>


<?php
if(isset($_POST['submit']))
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "test";


    $virsraksts = $_POST['TextboxForFirstText'];
    $apraksts = $_POST['TextboxForSecondText'];

    $conn = new mysqli($host, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully ";


    $conn = new mysqli($host, $username, $password, $db_name);

    $date = date("G:i:s");

    $sql = "INSERT INTO `thingstodo` (Virsraksts, Apraksts) VALUES ('$virsraksts','$apraksts')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: http://localhost/phpproject1/ListToDo.php');
}
?>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "test";


        $virsraksts = $_POST['name1'];
        $apraksts = $_POST['name2'];

        $conn = new mysqli($host, $username, $password, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully ";
        ?>
