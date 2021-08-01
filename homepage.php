<!DOCTYPE html>
<html>
<head>
<style>
*{
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33%;
  padding: 10px;
  height :70%;
}

.row:after {
  content: "";
  display:table;
  clear: both;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #020f36;
  cursor: pointer;
}
body{
   background-color: #96ddf3;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: rgb(5, 37, 85);
  color: white;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: rgb(19, 15, 15);
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: rgb(1, 19, 58);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(2, 43, 59);
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
a{
  color: white;
}

li a:hover {
  background-color: rgb(3, 28, 61);
}



</style>
</head>
<body>
  <ul>
  <li><a href="index.php">Logout</a></li>
    <li><a class="active" href="facilities.php">Facilities</a></li>
   
    <li><a href="about.php">Help</a></li>
    <li><a href="cart.php">Go to Cart</a></li>
    
  </ul> 

  <center>
 <h1><marquee direction ="right"> Welcome To Smart fashion Store </marquee></h1>

 
 <img src="234.jpg" width=15%, height= 20% style="border-radius: 60%;">
<h2><i> View Items </i></h2>

<h3>Choose grid view or list view.</h3>


<div id="btnContainer">
  <button class="btn" onclick="list_View()"><i class="bars"></i> List</button> 
  <button class="btn active" onclick="grid_View()"><i class="flarge"></i> Grid</button>
</div>  </center>
<br>


 <div class="row">
 <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="5.jpg"  style="width:100%" >
  <h1>Kids Dress</h1>
  <p class="price">Rs 2500<br/>
  discount 10%</p>
  <p><b><i>Only 10 pieces available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now </a></button></p>
</div> </div>  
  
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="6.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Hand Grip </h1>
  <p class="price">Rs 500<br/>
  discount 5%</p>
  <p> <b><i>Only 10 items available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now </a></button></p>
</div> 
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="10.jpg" alt="Denim Jeans" style="width:100%" >
  <h1>Hand bag</h1>
  <p class="price"> Rs. 1500<br/>
  discount 10%</p>
  <p><b><i>Limitted stock available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button>  <a href="payment.php">Buy Now </a></button></p>
</div> 
  </div>
</div>

<div class="row">
 <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Kids Suit </h1>
  <p class="price">Rs. 3000<br/>
  Discount 10%</p>
  <p><b><i>Only 10 suits available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button> <a href="cart.php"> Add to Cart </a></button></p>
  <p><button>  <a href="payment.php"> Buy Now </a> </button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="2.jpg"  style="width:95%">
  <h1>Bubble Frock</h1>
  <p class="price">Rs. 2800<br/>
  Discount 10%</p>
  <p> <b><i>Only 10 Frocks available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now </a></button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="17.jpg"  style="width:95%">
  <h1>Cotton Kids gown</h1>
  <p class="price">Rs. 2000<br/>
  Discount 10%</p>
  <p> <b><i>Only 10 gowns available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button><a href="payment.php">Buy Now </a></button></p>
</div>
  </div>
</div>

<div class="row">
 <div class="column" style="background-color:#96ddf3">
    <div class="card">
  <img src="15.jpg"  style="width:95%">
  <h1>Women Watch</h1>
  <p class="price">Rs. 800<br/>
  Discount 5%</p>
  <p><b><i>Only 10 pieces available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now</a></button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="111.jpg" style="width:95%">
  <h1>Man watch</h1>
  <p class="price">RS. 1200<br/>
  Discount 10%</p>
  <p> <b><i>Only 5 timepiece available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now</a></button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="18.jpg"  style="width:100%">
  <h1>Man Brand watch </h1>
  <p class="price">Rs. 2500<br/>
  Discount 10%</p>
  <i>limited stock available.</i></b>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now</a></button></p>
</div>
  </div>
</div>

<div class="row">
 <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="19.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Women bracelet</h1>
  <p class="price">Rs. 500<br/>
  Disvcount 5%</p>
  <b><i>Only 5 pieces available.</i></b>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now</a></button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="20.jpg"  style="width:100%">
  <h1>Kids shoe</h1>
  <p class="price">Rs. 600<br/>
  Discount 5%</p>
  <p> <b><i>Only 10 pairs available.</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart</a></button></p>
  <p><button> <a href="payment.php">Buy Now</a></button></p>
</div>
  </div>
  <div class="column" style="background-color:#96ddf3;">
    <div class="card">
  <img src="21.jpg" alt="Denim Jeans" style="width:95%">
  <h1>Kids Dress pack</h1>
  <p class="price">Rs. 2500<br/>
  Discount 10%</p>
  <p><b><i>limited stock available</i></b></p>
  <p >Estimated delivery date:within next five days.No returns.</p>
  <p><button><a href="cart.php">Add to Cart </a></button></p>
  <p><button> <a href="payment.php">Buy Now </a></button></p>
</div>
  </div>
</div>
<script>
var elements = document.getElementsByClassName("column");
var a;

function list_View() {
  for (a = 0; a < elements.length; a++) {
    elements[a].style.width = "100%";
  }
}

function grid_View() {
  for (a = 0; a < elements.length; a++) {
    elements[a].style.width = "33%";
    
  }
}

var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var a = 0; a < btns.length; a++) {
  btns[a].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
