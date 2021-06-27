<?php
    $Email = htmlentities($_POST['Email']);
    $PhoneNumber = htmlentities($_POST['PhoneNumber']);
    $Message = htmlentities($_POST['Message']);
    $Name = htmlentities($_POST['Name']);
    $sender = htmlentities($_POST['sender']);

    if(!empty($Email) && !empty($PhoneNumber) && !empty($Message)){
        if(filter_var($Email, FILTER_VALIDATE_Email)){
            $sender = "From: aliprograming41@gmail.com";
            if(mail($Email, $PhoneNumber, $Message, $Name, $sender)){
                echo "success";
            }else{
                echo "Failed while sending your Message!";
            }
        }else{
            echo "Please enter a valid Email!";
        } 
    }else{
        echo "All fields are required!";
    }

?>
