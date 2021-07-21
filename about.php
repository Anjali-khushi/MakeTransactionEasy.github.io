<!DOCTYPE html>
<html>
  <head>
    
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    
    <style text/css>
    .button {
    background-color: lightgrey;
    color: darkblue;
    border: 2px solid darkblue;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    padding: 8px 30px;   /* button lenght and width */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    }
    .button:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: forestgreen;
    text-decoration: none;
    color: white;
    }
    </style>

</head>
<body>

<?php include 'nav.php';   ?>

<div class="jumbotron">
  <h1><b>Make Transaction Easy ^_^ !!</b></h1>
  <p>We the developers.</p>
</div>
<div class="text-right" class="col-lg-6 col-md-6 col-12">
<a href="index.php"><button class="button button-hover"><b>Back </b></button></a>
</div>


<section class="my-4">
	<div class="py-2">
		<h2 class="text-center"><b>About Us</b></h2>
	</div>

 <div class="container-fluid">
	<div class="row">
		<div class="col-auto col-lg-6 col-md-4 col-sm-4 ">
             <img src="images/giphy.webp" class="img-fluid aboutimg">
		</div>
    <div class="col-lg-6 col-md-6 col-auto">
             <h2 class="display-4">Make Transfer Easy</h2>
             <p class="py-2">This site helps you to tranfer your money from anywhere, anytime and from any device. It comes with GUI interface which makes your transaction easier. This dynamic website is created, inorder to complete task 1 (basic bank system) of web devlopment and designing of <b> The Sparks Foundation </b> batch-21. 
             </p>
             <a href="contactdetail.php" class="btn btn-success"> Check More </a>
    </div>
	</div>
 </div>
</section>
<br>
<footer>
  <p class="p-3 bg-dark text-white text-center">@MakeTransactionEasy</p>
  <p class="p-3 text-dark text-center">&copy 2021. Made by <b>Anjali</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>