<?php
  
 include 'db.php'; 

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $pcode = $_POST['pcode'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if($password == $cpassword)
    {
        $sql = "INSERT INTO employee (fname, lname, username, email, phone, address, city, country, pcode, gender, date, time, password,
        cpassword) VALUES ('$fname', '$lname', '$username', '$email', '$phone', '$address', '$city', '$country', '$pcode', '$gender', '$date', '$time', '$password',
        '$cpassword')";
        $result = mysqli_query($conn, $sql) or die('query faild');
            if($result)
                { 
                     
                    echo "<script>
                    alert('Successfully complete Registration')
                    </script>";
                    // header('Location: http://localhost/youcrud/');
                }
                else
                {
                        echo "<script>
                        alert('Registration not successful completed.. Please try again')
                        </script>";
                       
                }
   }
   else
   {
        echo "<script>
        alert('Password & Conform Password Does Not Match')
        </script>";   
           
   }

}

?>
