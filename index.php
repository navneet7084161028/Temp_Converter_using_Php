<!DOCTYPE html>
<html>
<head>
	<title>Conversion</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    	.first{
					border-radius: 15px;
					background-color:  #404040;
					width: 35%;
					margin: auto;
					height: auto;
					padding: 20px;
					margin-top: 60px;
				}
	    input[type="number"]
				{
					width: 55%;
					height: 30px;
					padding : 10px;
					font-size: 25px;
					background-color: #c7dec7;;
					border-radius: 10px;
					border: 2px solid white;
				}
				.drop{
					width: 30%;
    				height: 35px;
   					background-color: #008CBA;
    				border: 2px solid white;
    				border-radius: 10px;
    				color: white;
    				font-size: 20px;
    				margin-top: 13px;
				}
		input[type="submit"]
					{
					width: 85px;
    				height: 35px;
    				background-color: teal;
    				border: 2px solid white;
   					border-radius: 10px;
   					color: white;
    				margin-left: 35px;
    				font-size: 20px;
				}
    </style>
</head>
<body style="background:lightblue">

		<?php
			if(isset($_POST['btn'])){
				$a = $_POST['temperature'];
				if ($a == ''){
					echo "<script>alert('Enter any Numeric Value:-')</script>";
				}
				else{
					$b = $_POST['temp'];
					if ($b == '1'){
						$result = ($a - 32)* 5/9;
					}
					else if ($b == '2'){
						$result = $a*(9/5)+32;
					}
					else if($b == 'select'){
						echo "<script>alert('Plz select any Converter:-')</script>";
					}
				}
			}
		?>

		<div class="first">
			<h2 style="color: white; text-align: center;">Converter (F to C) and (C to F)</h2>
			<hr>

			<form method="POST" style="margin-top: 23px; text-align: center;">
				<label style="color: white; font-size: 20px; letter-spacing: 1px;"><b>Temperature:</b></label><br><br>
				<input type="number" name="temperature" id="deg" placeholder="0"><br><br>
				
				<label style="color: white; font-size: 20px;letter-spacing: 1px;"><b>Result:</b></label><br><br>
				<input type="number" name="result" id="res" value="<?php echo $result ?>" placeholder="0" /><br>
				<br>

				<select  name="temp" class="drop">
					<option value="select">Convert To</option>
					<option value="1">Celcius</option>
					<option value="2">Fahrenheit</option>
				</select>
				<input type="submit" value="submit" name="btn" />
			</form>
				<hr style="margin-top: 43px;">
				<p style="text-align: center;color: white;">The perfect reckoner needs no counting-slips.....</p>
		</div>
</body>
</html>

 