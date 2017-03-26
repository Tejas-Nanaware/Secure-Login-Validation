<?php
        //Start session
        session_start();
        //Include database connection details
        require_once('connect.php');
     
        //Array to store validation errors
        $errmsg_arr = array();
     
        //Validation error flag
        $errflag = false;
     
        //Sanitize the POST values
        $username = $_POST['username'];
        $password = $_POST['password'];
        $ip = $_POST['ip'];
        //Input Validations
        if($username == '') {
            $errmsg_arr[] = 'username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
     
        //If there are input errors, redirect back to the login form
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            var_dump($errmsg_arr);
            session_write_close();
            header("refresh:5;url=index.php");
            exit();
        }
     
        //Create query
        $qry="SELECT username,password FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($connection,$qry);
        $num_row = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if( $num_row ==1 )
         {
            $_SESSION['username']=$row['username'];
            echo "success";
        }
        else
        {
            echo "failure";
        }
?>