<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">codewithcpn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show.php">Show Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table caption-top responsive-table table-bordered">
                    <caption>Employee Data</caption>
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">F-Name</th>
                            <th scope="col">L-Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Pin</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Password</th>
                            <th scope="col" colspan="2">Operation</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'db.php';
                            
                            $sql1 = "SELECT * FROM employee";
                            $result1 = mysqli_query($conn, $sql1);

                            // $nums = mysqli_num_rows($result1);
                            while($row = mysqli_fetch_array($result1))
                            {
                        ?>
                        <tr>
                            <td scope='row'><?php echo $row['id'];?></td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['country'];?></td>
                            <td><?php echo $row['pcode'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['time'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><a href="updates.php?id=<?php echo $row['id'] ?>" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Update"><i class="fa fa-pencil-square"
                                        aria-hidden="true"></i></a></td>
                            <td><a href="delete.php?idth=<?php echo $row['id'] ?>" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Delete"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a></td>
                            </td>
                        </tr>
                        <?php 
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
