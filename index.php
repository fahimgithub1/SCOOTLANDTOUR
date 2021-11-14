<?php
    //include_once("manhtml.html");

    $con = mysqli_connect('localhost', 'root', '','review');
    
    $txtMessage = $_POST['txtMessage'];

    // database insert SQL code
    $sql = "INSERT INTO `massages` (`comments`) VALUES ('$txtMessage')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
    }

?>
