<?php
    $fullname = $_POST['fullname'];
    $rollno = $_POST['rollno'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $transactionid = $_POST['transactionid'];
    $filename = $_FILES["stdimg"]["name"];
    
    $conn =new mysqli('localhost','root','','test1');
    if($conn -> connect_error){
        die('connection Failed :' .$conn -> connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into testtable(fullname,rollno,phoneno,email,transactionid,img_source) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$fullname,$rollno,$phoneno,$email,$transactionid,$filename);
        $folder ="std_img/".$filename;
        move_uploaded_file($_FILES["stdimg"]["tmp_name"],$folder);
        $stmt->execute();
        header("Location: home.html");
        $stmt->close();
        $conn->close();
    }
    ?>