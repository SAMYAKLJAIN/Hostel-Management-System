<html>
<head>
<title>NMIT  </title>
<style>

#hostelinfo
{
   width: 30%;

   
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-radius: 10px;
  padding: 20px;
}
</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body >





<div id="hostelinfo">
  <h1 style="font-size:50px">Nitte Meenakshi Institute Of Technology</h1>
  	<h2>Hostel Information</h2>
  </div>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>



<script>

    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });

</script>


	<div id="frm">
		<form action="process.php"  method="POST">
			<p>
				<label>Username: </label>
				<input type="text" id="user" name="user" value=""  />
			
			</p>
			<p>
				<label>Password: </label>
				<input type="password" id="pass" name="pass"  value="" />
			</p>
				<p>
				

<input type="submit" id="btn" value="Login " align="right" width="100"  name="logged_in" />	
</p>

			
		</form>
	</div>

 </body>
</html>
