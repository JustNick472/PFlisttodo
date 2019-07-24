<?php
session_start();
?>
<?php
error_reporting(0);
?>
<html>
<body>
<form action="ListToDoEdit.php" method="POST">
    <style>
        h2, h3
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
            border:2px solid black;
        }

        textarea
        {
            margin-left:300px;
            font-size:20px;
            width:776px;
            height:170px;
            border:2px solid black;
        }

        .button4
        {
            width:210px;
            margin-left:874px;
            font-size:20px;
            border-radius:7px;
            border:2px solid black;
        }

        .button4:hover
        {
            background-color:limegreen;
        }

        .button6
        {
            margin-left:300px;
            width:210px;
            font-size:20px;
            border-radius:7px;
            border:2px solid black;
        }
        .button5
        {
            margin-left:180px;
            width:150px;
            font-size:20px;
            border-radius:7px;
            border:2px solid black;
        }

        .button5:hover
        {
            background-color:red;
        }


    </style>
    <script>
        function Redirect1Back() {
            document.location.href = 'http://localhost/phpproject1/ListToDo.php'
        }


    </script>
    <header>
        <h2><br/>
            Darāmo lietu saraksts
        </h2>
        <h3>
            Labot
        </h3>
    </header>
    <div class="texts">
        <p>Virsraksts: </p>
        <input type="text" name="TextboxForFirstText" style="width:780px"
               id="TextboxForFirstText"

               value="<?php echo $row['$text']; ?>">

    </div>

    <div class="texts2"><br/>
        <p1>Apraksts:</p1>
        <br/><br/>

        <textarea name="TextboxForSecondText" cols="70" rows="8">
        <?php echo $_SESSION['.$text']; ?>
        </textarea>
    </div>
    <br/>
    <button class="button button6" name="submit" onclick="Redirect1Back()">Doties atpakaļ</button>
    <button class="button button5" name="submit">Dzēst</button>
    <button class="button button4" name="submit2">Saglabāt</button>
        </input>
    <?php
    if (isset($_POST['submit']))
    {
        $result = mysqli_query($conn, "SELECT * FROM `thingstodo`");

        header('Location: http://localhost/phpproject1/ListToDo.php');
    }
    ?>
    <?php
    if (isset($_POST['submit2'])) {
        $sql = "INSERT INTO thingstodo (Virsraksts, Apraksts, Date) VALUES ('$virsraksts','$apraksts','$date')";
        header('Location: http://localhost/phpproject1/ListToDo.php');
    }
    if (isset($_POST['Delete']))
    {
        $query = "DELETE FROM thingstodo WHERE Virsraksts = $firstText and Apraksts = $secondText";
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        if($conn->query(($query)===TRUE))
        {
            echo "Record deleted";
        }
        else
        {
            echo "no";
        }

        $query = "UPDATE thingstodo SET Virsraksts='$firstText' AND thingstodo SET Apraksts ='$Apraksts'";
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        if($conn->query(($query)===TRUE))
        {
            echo "Record updated";
        }
        else
        {
            echo "no!!";
        }
        header('Location: http://localhost/phpproject1/ListToDo.php');
    }

    ?>
    </div>

</form>

</body>
</html>

<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "thingstodo";


$virsraksts = $_POST['name1'];
$apraksts = $_POST['name2'];

?>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>

    <?php
}
?>
