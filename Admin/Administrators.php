<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/header.php');
    
?>
<div class="container">
    <?php 
        include('./nav.php'); 
        include('../Controls/general.php');
        $admins = getAllAdmins();    
        while($row=mysqli_fetch_assoc($admins)){
            $name = $row['fName'].' '.$row['lName'];
            echo $name;
        }
    ?>

    <!-- show all users -->


    




</div>