<html> <head> <title> payment window </title>

 </head>
 <html> <head><title> signup</title></head>
<style>

    body {font-family: Arial, Helvetica, sans-serif;
    
    }
    form {border: 5px solid #055575; width:50%;}

     h3{ font-family: "Helvetica Neue";
         color :rgb(5, 48, 48);
             }
             input[type=text], input[type=number] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
  }
  button {
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  background-color: #055575;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  font-size: large;
}
body {
    background-color ="blue";
}

}

</style>

 
 
 
 <body>



<div>
				
				
	<center>
    <body  background="256.jpg"> 
		<form>
			<i class="fas fa-times" ></i>
			<h3 >Visa/Master Card</h3>
			<div>
				<label><b> Card Holders Name <b> </label> <br>
				<input type="text" placeholder="Holder Name">
			</div>
			<div>
				<label> <b>Card Number <b></label> <br>
				<input type="number" placeholder="xxxx xxxx xxxx xxxx" >
			</div>
			<div>
				<label> <b>Expire Date <b> </label> <br>
				<input type="number" placeholder="year" max="2028" min="2020" required style="max-width: 24%;">
				<input type="number" placeholder="month" min="1" max="12" required style="max-width: 24%;">
			</div>
			<div>
				<label> <b>CCV </b> </label> <br>
				<input type="number" min="000" max="999" required name="ccv" >
			</div>
			<div>
				<div style="padding: 15px 0 0 0;font-weight: bold;color: red;font-size: 25px;"></div>
				<button type="submit" name="purchace" class="btn" >Purchase</button>
			</div>
		</form> </center>
	</div>

</body>
</html>