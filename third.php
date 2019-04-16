<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="cc" >
<div>
<div class="box"><h1>Stellar</h1></div>
<img class="c" src="p2logo.png">
<a href="" class="a" >SIGN IN  |</a>
<a href="" class="b" >SIGN UP |</a>
</div>
<hr>
<div class="topnav">
<a href="home" style="color:orange";><font size="6">STELLAR</font></a>
<div class="men1">
    <button class="men2"> <a href="home.html">MEN</a></button>
<div class="men">
      <a href="tshirt.php">T-shirts</a>
      <a href="#">Trousers</a>
      <a href="#">Jeans</a>
	  <a href="#">Jackets</a>
      <a href="#">Shoes</a>
      <a href="#">Shirts</a>
    </div></div>
<div class="men1">
   <button class="men2"><a href="admin.html">WOMEN</a></button>
   <div class="men">
      <a href="#">Tops</a>
      <a href="#">saree</a>
      <a href="#">Dresses</a>
	  <a href="#">Suits</a>
      <a href="#">Footwear</a>
      <a href="#">Gowns</a>
    </div></div>
	<div class="men1">
   <button class="men2"><a href="owner.html">KIDS</a></button>
   <div class="men">
      <a href="#">Shirt</a>
      <a href="#">Jeans</a>
      <a href="#">Dresses</a>
	  <a href="#">Frock</a>
      <a href="#">Footwear</a>
      <a href="#">Bags</a>
    </div></div>
	<div class="men1">
   <button class="men2"><a href="customer.html">ACCESSIORES</a></button>
   <div class="men">
      <a href="#">Bags</a>
      <a href="#">Jwellery</a>
      <a href="#">Watches</a>
	  <a href="#">Bracelet</a>
      <a href="#">Sunglasses</a>
      <a href="#">Wallet</a>
    </div></div>
	
	 <div class="men1">
   <button class="men2"> <a href="About.html">SPORTS</a></button>
   <div class="men">
      <a href="#">FootBall</a>
      <a href="#">Sport shoes</a>
      <a href="#">Shorts</a>
	  <a href="#">Track suit</a>
      <a href="#">Badminton</a>
     
    </div></div>
	</div>
<div class="filter">
<h3>Filter</h3>
<h4>Price</h4>
<input type="checkbox" name="c1">Rs100-Rs500<br>
<input type="checkbox" name="c2">Rs500-Rs1500<br>
<input type="checkbox" name="c3">Rs1500-Rs3000<br>
<input type="checkbox" name="c4">Above Rs3000
<hr>
<h4>Color</h4>
<input type="checkbox" name="c5">Red<br>
<input type="checkbox" name="c5">Blue<br>
<input type="checkbox" name="c5">Black<br>
<input type="checkbox" name="c5">White<br>
<input type="button" name="butn" class="butn" value="Search">
</div>
</div>

<?php { ?>
	
			<?php			
			$servername = "localhost";
                	$username = "root";
                	$password = "";
                	$conn=mysqli_connect($servername,$username,$password,"e-commerce");
					
  	                $sql="select * from men";
  	                $res=mysqli_query($conn,$sql);
				//$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
				while($rows = mysqli_fetch_array($res) ) { ?>
									
				<img src="<?php echo $rows["img"]; ?>" class="image" width="300" alt="shivi" height="300">
				
				<?php } ?>
	
<?php } ?>
</body>
