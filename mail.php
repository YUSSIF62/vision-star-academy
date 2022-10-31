<?php



    if(isset($_POST['send'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        //check if inputs are not empty
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($tel) && !empty($message)){

        

            //set Subject
            $subject = "FROM VISION ACADEMY WEBSITE - {$firstname}" . " " . "{$lastname}";
            $message = wordwrap($message,70);

            // send email
            mail($email,$subject,$message);
        } else {
            echo "<script>alert('Sorry!! All Fields Are Required!!')</script>";
        }

    }

?>