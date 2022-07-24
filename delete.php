<?php

include 'db.php';

$id = $_GET['idth'];

$deletequery = "DELETE  FROM employee WHERE id = $id";

$deleteresult = mysqli_query($conn, $deletequery);

if($deleteresult)
{
    echo "<script>
         alert('Record Deleted Succefully') 
         header('Location: http://localhost/youcrud/show.php');
    </script>";
   
}
else
{
    echo "<script>
          alert('Record not Deleted?')
    </script>";
}
?>
