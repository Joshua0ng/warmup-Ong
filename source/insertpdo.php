<html>
<head>
<title> PDO php Insertion of data </title>
</head>
<body>
<center>
<h1> PHP PDO: Insertion of Data into Database in PHP using PDO </h1>
<form action="" method="POST">
    <table width="10%" border="1" cellpadding="5" cell spacing="5">
    <tr>
        <td>
            <center>
                <input type="text" name="name" placeholder="Enter Name"/></br><br>
                <input type="text" name="message" placeholder="Enter Message"/></br><br>
                
                <button type="submit" name="insert">INSERT</button>
            </center>
        </td>
    </tr>
    </table>


</form>
</center>
</body>
</html>


<?php
include 'pdodbcon.php';

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $message = $_POST['message'];


    $pdoQuery = "INSERT INTO pdodemodata(name , message) VALUES (:name,:message)";

    $pdoQuery_run = $pdodbcon->prepare($pdoQuery);

    $pdoQuery_exec = $pdoQuery_run->execute(array(":name"=>$name,":message"=>$message));

    if($pdoQuery_exec)
    {
        echo '<script> alert("Data Inserted in PHP PDO") </script>';
    }
    else
    {
        echo '<script> alert("Data Not Inserted in PHP PDO") </script>';

    }
}

?>