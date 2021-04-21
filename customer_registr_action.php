<?php
    include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(isset($_POST['registr']))
    {
    $login = $_POST['cust_uname'];
    $psw = $_POST['cust_psw'];

    }
    
    $query = "INSERT INTO customer(uname, pwd) VALUES ('$login', '$psw')";
    $result = mysqli_query($conn, $query);
    header("location:customer_home.php");
  
    
    

?>
