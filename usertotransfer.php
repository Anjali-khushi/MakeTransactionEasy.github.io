<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transfer Money</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <style type="text/css">
        .button{
        color: floralwhite;
        transition: 1.5s;
        }
        .button.hover{
        background-color: lightyellow;
        color: black;
        }
       .table-hover tbody tr:hover td  
        {  
        background-color: lightyellow;  
        color: black;
        }   
    </style>
    </head>
    <body>
        <?php
        $server="localhost";
        $username="root";
        $password="";
        $db="mysqlfiles";
        $con=mysqli_connect($server,$username,$password,$db);
        if(!$con)
        {  die("connection to this database failed due to " .mysqli_connect_error());
        }
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con,$sql);
        ?>
        
        <?php include 'nav.php';   ?>

        <div class="container">
            <h2 class="text-center pt-4"><b>Transfer Money</b></h2>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table id="t01" class="table table-hover table-sm table-striped table-condensed table-bordered">
                            <thead>
                                <tr class="table-warning">
                                    <th scope="col" class="text-center py-2">ID</th>
                                    <th scope="col" class="text-center py-2">Card-No</th>
                                    <th scope="col" class="text-center py-2">Name</th>
                                    <th scope="col" class="text-center py-2">E-Mail</th>
                                    <th scope="col" class="text-center py-2">Balance</th>
                                    <th scope="col" class="text-center py-2">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $abc=1;
                                while($rows=mysqli_fetch_assoc($result))
                                {
                                ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['SerialNo'] ?></td>
                                    <td class="py-2"><?php echo $rows['CardNumber'] ?></td>
                                    <td class="py-2"><?php echo $rows['Name']?></td>
                                    <td class="py-2"><?php echo $rows['Email']?></td>
                                    <td class="py-2"><?php echo $rows['Balance']?></td>
                                    <td><a href="userdetails.php?SerialNo=<?php echo $abc; ?>"> <button type="button" class="btn btn-outline-danger">Transact</button></a></td>
                                </tr>
                                <?php
                                $abc+=1; }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <footer>
            <p class="p-3 bg-dark text-white text-center">@MakeTransferEasy</p>
            <p class="p-3 text-dark text-center">&copy 2021. Made by <b>Anjali</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>