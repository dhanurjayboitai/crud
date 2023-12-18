<?php
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
    <div class="container">
    <div class="col-lg-10"><br><br>
        <h1 class="text-warning text-center">Display Table Data</h1>
        <br>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Username</th>
                <th class="text-center">Password</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Update</th>

            </tr>
            <?php
              include('config.php');
             $q="select * from curdtable";
             $query=mysqli_query($con,$q);
             while($res = mysqli_fetch_array($query)){

            
               
?>
            <tr>
                <td class="text-center"><?php echo $res['id']; ?> </td>
                <td class="text-center"><?php echo $res['username']; ?> </td>
                <td class="text-center"><?php echo $res['password']; ?> </td>
                <td class="text-center"> <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete </a></button></td>
                <td class="text-center"> <button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update </a></button></td>

            </tr>
           <?php
             }
             ?>
        </table>
             
    </div>
</div>
</body>
</html>