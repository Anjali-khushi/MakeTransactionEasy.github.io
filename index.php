<!DOCTYPE html>
<html>
<head>
	
	<title>Make Transaction Easy</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">  
    <style>
    button{
        padding: 9px.25px;
        background-color: rgba(0, 136, 169, 1.0);
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
      }
    button:hover{
        background-color: rgba(0, 136, 169, 0.8);
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MakeTransactionEasy</a>
  <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#oser">Services</a>
      </li>
    </ul>
  </div>
</nav>   
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/transfer1.jpg" alt="Los Angeles" width="1050" height="390">
      <div class="carousel-caption">
        <h3>Quick Transfer</h3>
        <p>Easy to use with any device!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/transfer2.jpg" alt="Chicago" width="1050" height="390">
      <div class="carousel-caption">
        <h3>Digitalization</h3>
        <p>Help's us grow!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/transfer3.jpg" alt="New York" width="1050" height="390">
      <div class="carousel-caption">
        <h3>Your Saving</h3>
        <p>Your trust keep us going!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-3">
	<div class="py-4">
		<h2 class="text-center"><b>About Us</b></h2>
	</div>
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
             <img src="images/giphy.webp" class="img-fluid aboutimg">
		</div>
    <div class="col-lg-6 col-md-6 col-12">
             <h2 class="display-4">Make Transfer Easy</h2>
             <p class="py-5">This site helps you to tranfer your money from anywhere, anytime and from any device. It comes with GUI interface which makes your transaction easier. This is a dynamic website created to showcase a basic bank system, inorder to complete a task 1 of sparks foundation batch-21.
             </p>
             <a href="contactdetail.php" class="btn btn-success" > Check More </a>
    </div>
	</div>
 </div>
</section>
<section class="my-3">
  <div class="py-4">
    <h2 id="oser" class="text-center" ><b>Our Services</b></h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-lg-4 col-md-4 col-12 col-sm-4 py-3 py-sm-3">
        <div class="card" >
          <img class="card-img-top" src="images/users.png" alt="..." >
          <div class="card-body" >
            <h4 class="card-title">List</h4>
            <p class="card-text">View all customers.</p>
            <a href="usertotransfer.php" class="btn btn-success">Client List</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 col-sm-4 py-3 py-sm-3">
        <div class="card" >
          <img class="card-img-top" src="images/tran.jpg" alt="..."  >
          <div class="card-body">
            <h4 class="card-title">Transfer</h4>
            <p class="card-text">Tranfer your money.</p>
            <a href="usertotransfer.php" class="btn btn-success">Transaction</a></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 col-sm-4 py-3 py-sm-3">
        <div class="card" >
          <img class="card-img-top" src="images/hist.png" alt="..."  >
          <div class="card-body">
            <h4 class="card-title">History</h4>
            <p class="card-text">View previous transactions.</p>
            <a href="transhistory.php" class="btn btn-success">See</a></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@MakeTransactionEasy</p>
  <p class="p-3 text-dark text-center">&copy 2021. Made by <b>Anjali</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>