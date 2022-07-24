<?php include 'header.php'; ?>

<!-- Start insert query code -->

<?php
    
    include 'db.php'; 

    $ids = $_GET['id'];

    $showquery = "SELECT * FROM employee WHERE id = $ids";

    $showdata = mysqli_query($conn, $showquery);

    $showarray = mysqli_fetch_array($showdata);
    
    if(isset($_POST['submit']))
    {

        $idupdate = $_GET['id'];
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


    

            // $sql = "INSERT INTO employee (fname, lname, username, email, phone, address, city, country, pcode, gender, date, time, password,
            // cpassword) VALUES ('$fname', '$lname', '$username', '$email', '$phone', '$address', '$city', '$country', '$pcode', '$gender', '$date', '$time', '$password',
            // '$cpassword')";

            $updatequery = "UPDATE employee SET id ='$idupdate',  fname = '$fname', lname = '$lname', username = '$username', email = '$email', phone = '$phone', address = '$address', city = '$city', country = '$country', pcode = '$pcode', gender = '$gender', date = '$date', time = '$time', password = '$password', cpassword = '$cpassword' WHERE id = '$idupdate'";
            $updatequeryshow = mysqli_query($conn, $updatequery) or die('query faild');
                if($updatequeryshow)
                    { 
                        
                        echo "<script>
                        alert('Data Update');
                        </script>";
                        header('Location: http://localhost/youcrud/show.php');
                    }
                    else
                    {
                            echo "<script>
                            alert('Data not updated');1
                            </script>";
                            
                    }
        }    
    
    ?>
<!-- End insert query code -->

<div class="container mt-3">
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6">
                <h2>Edit Employee Details</h2>
                <div class="mb-3 mt-3">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname"
                        value="<?php echo $showarray['fname'];?>">
                </div>
                <div class="mb-3">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter last Name " name="lname"
                        value="<?php echo $showarray['lname'];?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username " name="username"
                        value="<?php echo $showarray['username'];?>">
                </div>
                <div class="mb-3">
                    <label for="email">Email id:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email"
                        value="<?php echo $showarray['email'];?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone">Phone Number:</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number " name="phone"
                        value="<?php echo $showarray['phone'];?>">
                </div>
                <div class="mb-3">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"
                        value="<?php echo $showarray['address'];?>">
                </div>
                <div class="mb-3">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"
                        value="<?php echo $showarray['city'];?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 mt-5 pt-2">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" placeholder="Enter Country " name="country"
                        value="<?php echo $showarray['country'];?>">
                </div>
                <div class="mb-3">
                    <label for="pcode">Pin Code:</label>
                    <input type="number" class="form-control" id="pcode" placeholder="Enter Pin Code" name="pcode"
                        value="<?php echo $showarray['pcode'];?>">
                </div><br>
                <div class="mb-3">
                    <label for="gender">Gender:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male"
                            <?php echo ($showarray['gender'] == 'male') ? 'checked' : '';?>>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female"
                            <?php echo ($showarray['gender'] == 'female') ? 'checked' : '';?>>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="udate">Date:</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter Date " name="date"
                        value="<?php echo $showarray['date'];?>">
                </div>
                <div class="mb-3">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" placeholder="Enter Time" name="time"
                        value="<?php echo $showarray['time'];?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password "
                        name="password" value="<?php echo $showarray['password'];?>">
                </div>
                <div class="mb-3">
                    <label for="cpassword">Confrom Password:</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="Enter Conform password"
                        name="cpassword" value="<?php echo $showarray['cpassword'];?>">
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-lg btn-primary" name="submit">Update</button>
            </div>
        </div>
    </form>


</div>


<?php include 'footer.php';?>
