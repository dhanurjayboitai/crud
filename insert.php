<?php
include('config.php');
if(isset($_POST['Done'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q="INSERT INTO `curdtable`(`username`, `password`) VALUES ('$username','$password')";
    $query=mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="POST">
        <br><br> <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation </h1>

                </div><br>
                <label>Username: </label>
                <input type="text" name="username" class="form-control" ><br><br>

                <label>Password: </label>
                <input type="password" name="password" class="form-control" ><br>

                <button class="btn btn-success" type="submit" name="Done">Submit</button><br>
                <br>

            </div>

        </form>


    </div>
</body>
</html> 