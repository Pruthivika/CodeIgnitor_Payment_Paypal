<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Pay</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px Trebuchet MS;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	

	

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 100px 150px 50px 150px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;

	}

    



/* Add some padding inside the card container */


.column{
	padding:1px 400px 20px 20px;
	
}



#wrapper{
  height:525px;
  width:450px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:2px 2px 20px 2px;
  overflow:hidden;
  box-shadow:0px 2px 10px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:green;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}
footer{
  height:80px;;
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
footer .btn{
  margin:50px 15px 55px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
}
footer :nth-child(1){
  background-color:#fff;
  color:#f62f5e;
}
footer :nth-child(2){
  background-color:#f62f5e;
  color:#fff;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}
	</style>
</head>

<body>



<div id="container">

<h1><b><i>Booking Summary</i></b></h1>	
<div class="row">
	<div class="col-md-6">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
  		
  		
  			<div class="container">
			 <p> <img src="images/movie.jpg" alt="Avatar" style="display:inline-block" align-content="left">
   		 		<h4><b>Aladdin(3D)</b></h4> 
				English,3D
				GOLD CLASS-B12,B13  
				Wed,19 Jun,2019
				10:30 am

			</p>
				
            <p>
				<h6><i>Sub Total:                       LKR.1,117.88‬</i></h6>
				<h6><i>+Internet Handling Fees         LKR.82.12</i></h6>
				<h3><b>Amount Payable:                       LKR.1200.00</b></h3>
      </p>
      
 		 	</div>
	
	</div>

	<div class="col-md-6">
	<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="visa" class="form-check-input" type="checkbox" value="">
    Pay LKR.1200.00 with Visa
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
      <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->

      <form method="post" action=<?=base_url()."welcome/add2"?>> 
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="master" class="form-check-input" type="checkbox" value="">
    Pay LKR.1200.00 with Master
  </label>
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user"></i>
      <label for="cardholder">Cardholder's Name</label>
      <input type="text"  name="cardholder">
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="number" name="cardnumber">
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid thru</label>
      <input type="month" placeholder="MM/YY" name="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="number" name="cvv">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
    <button class="btn">Back</button>
    <button class="btn" name="proceed" type="submit">Confirm</button></a>
  </footer>
  </form>
</div><!--wrapper end-->
   </div>


</div>

</body>
</html>