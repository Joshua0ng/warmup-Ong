<html>
<head>
<title> PDO PHP Operation of Data </title>
    <style>
        input{
            width:100%;
            height:30px;
        }
        button{
            width:50%;
            height:30px;
        }
    </style>
</head>
<body>
<center>
<h1> PHP PDO: Insertion of Data into Database in PHP using PDO </h1>
<form action="" method="POST">
    <table width="10%" border="1" cellpadding="5" cell spacing="5">
    <tr>
        <td><br><br>
            <center>
                <input type="text" name="name" placeholder="Enter Name"/></br><br>
                <input type="text" name="message" placeholder="Enter Message"/></br><br>
                
                <button type="submit" name="insert">INSERT</button>
                <button type="submit" name="display">DISPLAY</button>
            </center><br><br>
        </td>
    </tr>
    </table>
</form>
</center>
</body>
</html>

<?php
include 'pdodbcon.php';

if(isset($_POST['display']))
{
    $pdoQuery = "SELECT * FROM pdodemodata";
    $pdoQuery_run = $pdodbcon->query($pdoQuery);

    if($pdoQuery_run)
    {
        echo '<table width="50%" border="1" cellpadding="5" cellspacing="5"
            <tr>
                <td> id </td>
                <td> name </td>
                <td> message </td>
                <td> posting time </td>
            </tr>
        ';
        //while($row = $pdoQuery_run->fetch(PDO::FETCH_OBJ))
        foreach($pdoQuery_run as $row)
        {
        echo '   <tr>
            <th> '.$row->id.' </th>
            <th> '.$row->name.' </th>
            <th> '.$row->message.' </th>
            <th> '.$row->postingtime.' </th>
                 </tr>

        ';
        }
    }
    else
    {
        echo '<script> alert ("No Record / Data Found")</script>';
    }
}
?>