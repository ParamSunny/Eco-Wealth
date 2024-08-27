<?php 
    include 'connect.php';

    if(isset($_POST['SignUp'])){
        $comName=$_POST['comName'];
        $phoneNum=$_POST['phoneNum'];
        $faxNum=$_POST['faxNum'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pinCode=$_POST['pinCode'];

        $checkEmail="SELECT * FROM company where email='$email'";
        $result=$conn->query($checkEmail);
        if($result->num_rows>0){
            echo "Email Address Already Exists !";
        } else {
            $insertQuery="INSERT INTO company(comName,phoneNum,faxNum,email,address,city,state,pinCode) values ('$comName','$phoneNum','$faxNum','$email','$address','$city','$state','$pinCode')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
                echo "The Password Is Sended To Your Mail Afer Varification";
            } else {
                echo "Error:".$conn->error;
            }
        }
    }

    // if(isset($_POST['SignIn'])){
    //     $email=$_POST['email'];
    //     $password=$_POST['password'];
    //     $password=md5($password);

    //     $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    //     $result=$conn->query($sql);
    //     if($result->num_rows>0){
    //         session_start();
    //         $row=$result->fetch_assoc();
    //         $_SESSION['email']=$row['email'];
    //         header("Location: homepage.php");
    //         exit();
    //     } else {
    //         echo "Not Found, Incorrect Email or Password";
    //     }
    // }
?>