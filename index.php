<?php include 'header.php'; ?>
<div class="container mt-3">
    <form action="insertdata.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <h2>Employee Registration</h2>
                <div class="mb-3 mt-3">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                </div>
                <div class="mb-3">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter last Name " name="lname">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username " name="username">
                </div>
                <div class="mb-3">
                    <label for="email">Email id:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone">Phone Number:</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number " name="phone">
                </div>
                <div class="mb-3">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                </div>
                <div class="mb-3">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 mt-5 pt-2">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" placeholder="Enter Country " name="country">
                </div>
                <div class="mb-3">
                    <label for="pcode">Pin Code:</label>
                    <input type="number" class="form-control" id="pcode" placeholder="Enter Pin Code" name="pcode">
                </div><br>
                <div class="mb-3">
                    <label for="gender">Gender:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="udate">Date:</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter Date " name="date">
                </div>
                <div class="mb-3">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" placeholder="Enter Time" name="time">
                </div>
                <div class="mb-3 mt-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password "
                        name="password">
                </div>
                <div class="mb-3">
                    <label for="cpassword">Confrom Password:</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="Enter Conform password"
                        name="cpassword">
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>


</div>


<?php include 'footer.php';?>
