<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
	<title>BMI Calculator</title>
</head>
<body>
	<form method="post" action="">
		<h1>BMI Calculator</h1>
		<fieldset>
			<legend align="left">
				Check your BMI now!
			</legend>
			Weight in kg: <input type="text" name="weight"><br>
			Height in m: <input type="text" name="height"><br>
			<input type="submit" value="Calculate">
			<?php
			if (!empty($_POST)) {
				$weight = $_POST["weight"];
				$height = $_POST["height"];
				$bmi = $weight/(pow($height,2));
				echo <<<END
				The answer is: <input type="text" value="$bmi">
				END;
			}
			?>
			<script type="text/javascript">
				var bmi = "<?php echo ($bmi); ?>";

				if (bmi < 18.5) {
					document.write("You are underweight.");
				}
				else if (bmi >= 18.5 && bmi <= 24.9) {
					document.write("You are a healthy weight.");
				}
				else if (bmi >= 25 && bmi <= 29.9) {
					document.write("You are overweight.");
				}
				else {
					document.write("You are obese.");
				}
			</script>
		</fieldset>
	</form>
	<form method="post" action="">
		<h1>BMI Calculator (lbs/in)</h1>
		<fieldset>
			<legend align="left">
				Check your BMI now!
			</legend>
			Weight in lbs: <input type="text" name="weight"><br>
			Height in inches: <input type="text" name="height"><br>
			<input type="submit" value="Calculate">
			<?php
			if (!empty($_POST)) {
				$weight2 = $_POST["weight"];
				$height2 = $_POST["height"];
				$bmi2 = ($weight2/(pow($height2,2))) * 703;
				echo <<<END
				The answer is: <input type="text" value="$bmi2">
				END;
			}
			?>
			<script type="text/javascript">
				var bmi2 = "<?php echo ($bmi2); ?>";

				if (bmi2 < 18.5) {
					document.write("You are underweight.");
				}
				else if (bmi2 >= 18.5 && bmi2 <= 24.9) {
					document.write("You are a healthy weight.");
				}
				else if (bmi2 >= 25 && bmi2 <= 29.9) {
					document.write("You are overweight.");
				}
				else {
					document.write("You are obese.");
				}
			</script>
		</fieldset>
	</form>
</body>
</html>