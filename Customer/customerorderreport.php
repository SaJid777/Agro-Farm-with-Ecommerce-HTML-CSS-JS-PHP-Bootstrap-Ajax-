<?php

include "includes/connection.php";

session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<style type="text/css">
	.scroll
	{
		
		width:100%;
		height:300px; 
		overflow: scroll;
	}

.table	img{
		width: 45px; 
                height: 45px; 
                object-fit: contain;"
	}



	
		/* popup style */
.bg-modal{
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.7);
	
	position: absolute;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}

.modal-content{
	width: 500px;
	height: 450px;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 20px;
	position: relative;
}
#popup input {
width: 50%;
display: block;

margin: 15px auto;
}

.close{
	position: absolute;
	top 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}


		/* edit popup style */
.bg-modal2{
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.7);
	
	position: absolute;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}

.modal-content2{
	width: 500px;
	height: 470px;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 20px;
	position: relative;
}
#popup input {
width: 50%;
display: block;

margin: 15px auto;
}

.close2{
	position: absolute;
	top 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}



/* header style */
#shop_header{
	font-family: "Roboto",Helvetica,Arial,sans-sarif;
	font-size: 14px;
	line-height: 1.42857143;
	color: #333333;
	background-color: #f0f0f0;
}

#top{
	background-color: #005266;
	padding: 10px 0;
    text-align: center;

}

#top .offer{
	color: #fff;
}

#top .offer .btn{
	text-transform: uppercase;
}

@media(max-width: 991px){
	#top .offer{
		margin-bottom: 10px;
	}
}

@media(max-width: 991px){
	#top {
		font-size: 12px;
		text-align: center;
	}
}

#top a{
	color: #fff;

}

#top ul.menu{
 padding-top: 5px;
 margin: 0;
 text-align: right;
 font-size: 12px;
 list-style: none;
}

@media(max-width: 991px){
	#top ul.menu{
		text-align: center;
	}
}

#top ul.menu{
	text-align: center;
}

#top ul.menu >li a{
	color: #eeeeee;

}

#top ul.menu>li{
	display: inline-block;
}

#top ul.menu > li +li:before{
	content: "|\00a0";
	padding: 0 5px;
	color: #f7f7f7;
}




/* header style */

.navbar{
	background: white;
}

.navbar-collapse .right {
	float: right;
}

.navbar-brand{
	float: left;
	padding: 10px 15px;
	font-size: 18px;
	line-height: 20px;
	height: 17px;
}


.navbar-brand:hover,.navbar-brand:focus{
	text-decoration: none;
}

.navbar ul.nav>li>a{
	text-transform: uppercase;
	font-weight: bold;
	font-size: 14px;
}

.padding{
	padding-top: 10px;
}

.navbar ul.nav>li>a:hover{
	background: #e7e7e7;

}

.btn-primary{
	color: rgb(255,255,255);
	background-color: rgb(75,151,168);
	border-color: rgb(65,179,156);
}
  
  
  #header_text{
    font-size: 21px;
    
    color: #FFFFFF;
  }

  #title{
    margin-left: 90px;
  }
  .contactus{
  	
  	float: left;
  	width: 45%;
  	
  	margin: auto;
  	padding-top: 25px;
  }

  .callus{
  float: right;
  	margin-right: 20px;	
  	width: 25%;
  	height: 100%;
  	background-color: tomato;
  	text-align: center;
  }

  .contactinfo{
  	float: right;
  	
  	width: 50%;
  	height: 100%
  }
  




 .social{
text-align: left;

}

.social a{
margin: 12px 10px 0 0;	
color: #fff;
display: inline-block;
width: 30px;
height: 30px;
border-radius: 15px;
line-height: 30px;
font-size: 15px;
text-align: center;
transform: all 0.3s ease-out;
vertical-align: bottom;
background-color: #555555;

}
.social a i{
	padding-top:6px; 
}





#title h3{
	padding-left: 8px;
	color: tomato;
	text-transform: uppercase;
}

#title h4{
	color: grey;
	}

#header2{
	background-color: white;
	width: 100%;
	height: 117px;
}

.nav-right label{
	width: 20px;
	height: 30px;
	border-radius: 50%;

	color: tomato;
	font-size: 20px;
	background-color: red;
}

.nav-right p{
	color: white;
	text-align: center;
	
}

.nav-right a{
	padding-right: 50px;
	margin-top:  20px;
	
	text-decoration: none;

	
}

#login_style{
	color: tomato;
	margin-top: 10px;
	padding-top:  10px;
}

#cart_style{
padding:  0px;
}


</style>
</head>
<body>
<?php
	include "includes/customer_header.php";
	?>




<!-- 3rd head ends-->

</div>


		<div class="col-md-12" id="cart">
			<div class="box">
				<form action="" method="post" enctype="multipart-form-data">
					<legend><h1>Order Report</h1></legend>
					<div>
					<p class="text-muted">Currently You have 4 item(s)</p>
					<span class="pull-right">
							<input type="text" name="search" placeholder="Search by food Name">
							<button class="btn btn-default" type="submit" name="submit" value="submit" style="background-color: blue;color: white;">
								<i class="fa fa-search"> Search</i>
							</button>


					</span>	

				</div>

				<br>
				<br>
				<br>

					<div class="table-responsive">
						<div class="scroll">
						<table class="table">
							
<?php
if(isset($_POST['submit']))
{
		$q=mysqli_query($db,"select * from orders where Fname like '%$_POST[search]%' and email='$_SESSION[login_email]' order by `Status` ");
		if(mysqli_num_rows($q)==0)
		{
			?>
			<script type="text/javascript">
				alert("No Order Found");
			</script>
			<?php
			
			$result=mysqli_query($db,"select * from `orders` where email='$_SESSION[login_email]' order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	 
	echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		
		
	echo "</tr>";

}

echo "</table>";

		}

		else
		{
				echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	 
	echo "</tr>";

while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		
	echo "</tr>";

}

echo "</table>";

		}
}
	

//if search button is not pressed
else //if search button is not pressed
{
	$result=mysqli_query($db,"select * from `orders` where email='$_SESSION[login_email]' order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";

	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	 
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
						
	echo "</tr>";

}

echo "</table>";

}
?>

</div>
</table>

					


				</form>
				
			</div>   <!-- box ends  -->
</div>


<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>



		<!-- poopup edit item  -->




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>