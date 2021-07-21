<?php
$server="localhost";
$username="root";
$password="";
$db="mysqlfiles";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{  die("connection to this database failed due to " .mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $from = $_GET['SerialNo'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where SerialNo=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where SerialNo=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }



     else if($amount == $sql1['Balance'])
     {
     echo '<script type="text/javascript">';
     echo ' alert("Noo! You Can not transfer your whole money.")';
     echo '</script>';
     }


    else {
        
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE users set Balance=$newbalance where SerialNo=$from";
                mysqli_query($con,$sql);
             
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE users set Balance=$newbalance where SerialNo=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transfer(`Sender`,`Receiver`,`Balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
        .button{
        background-color: #ffd9e4;
        color: #6B0772;
        border: 2px solid lightpink;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
        padding: 8px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        ont-size: 18px;
        }
        .button:hover{
        box-shadow: 0 12px 16px 0 rgb(239, 197, 234), 0 17px 50px 0 rgb(244, 216, 241);
        background-color: #AF1281;  
        border: 2px solid #d977ce;
        text-decoration: none;
        color:white;
        }
    </style>
</head>

<body>
 
<?php
  include 'nav.php';
?>

    <div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                
            $server="localhost";
            $username="root";
            $password="";
            $db="mysqlfiles";
            $con=mysqli_connect($server,$username,$password,$db);
            if(!$con)
            {  die("connection to this database failed due to " .mysqli_connect_error());
            }
            
                $sid=$_GET['SerialNo'];
                $sql = "SELECT * FROM  users where SerialNo=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr class="table-danger">
                    <th class="text-center">Id</th>
                    <th class="text-center">CardNumber</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['SerialNo'] ?></td>
                    <td class="py-2"><?php echo $rows['CardNumber'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value=""disabled selected>Choose</option>
            <?php
                $server="localhost";
                $username="root";
                $password="";
                $db="mysqlfiles";
                $con=mysqli_connect($server,$username,$password,$db);
                if(!$con)
                {  die("connection to this database failed due to " .mysqli_connect_error());
                }
                $sid=$_GET['SerialNo'];
                $sql = "SELECT * FROM users where SerialNo!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['SerialNo'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" class="col-lg-6 col-md-6 col-12">
            <button class="button button-hover" class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
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