
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Tyler Wingfield Quiz-O-Rama</title>
</head>
<body>

<?php

	function CLEAR($conn){

		$conn->query("DELETE FROM scores");
	}?>
	
	<h1>Oh Lawd, Here Comes a Quiz</h1>
	
	<form action="index.php" method="post">
	
	
		<label for="text-input">Enter your name</label>
			<input type="text" name="name" required>
			
		<h3>Question 1</h3>
			<p>Back in the 90s, who was in a very famous TV show?</p>
			<label for="option1">Bojack Horseman</label>
			<input type="radio" name="question1" value="Bojack Horseman">
			<br>
			<label for="option2">Mr. PeanutButter</label>
			<input type="radio" name="question1" value="Mr. PeanutButter">
			<br>
			<label for="option3">The Monopoly Man</label>
			<input type="radio" name="question1" value="The Monopoly Man">
			<br>
			<label for="option4">Your mom lol</label>
			<input type="radio" name="question1" value="Your mom lol">
			<hr>
			
		<h3>Question 2</h3>
			<p>Who likes to get schwifty?</p>
			<label for="option1">Mort Goldman</label>
			<input type="radio" name="question2" value="Mort Goldman">
			<br>
			<label for="option2">Roger Rabbit</label>
			<input type="radio" name="question2" value="Roger Rabbit">
			<br>
			<label for="option3">Rick Sanchez</label>
			<input type="radio" name="question2" value="Rick Sanchez">
			<br>
			<label for="option4">Bender Rodriguez</label>
			<input type="radio" name="question2" value="Bender Rodriguez">
			<hr>
			
		<h3>Question 3</h3>
			<p>In the pilot episode of Rick and Morty, where does Rick instruct Morty to hide the mega-seeds?</p>
			<label for="option1">In his backpack</label>
			<input type="radio" name="question3" value="In his backpack">
			<br>
			<label for="option2">Wayyy up inside his butt</label>
			<input type="radio" name="question3" value="Wayyy up inside his butt">
			<br>
			<label for="option3">In a Power Rangers lunchbox</label>
			<input type="radio" name="question3" value="In a Power Rangers lunchbox">
			<br>
			<label for="option4">In the trunk of the ship</label>
			<input type="radio" name="question3" value="In the trunk of the ship">	
			<hr>
			
		<h3>Question 4</h3>
			<p>Who did 9/11?</p>
			<label for="option1">Global warming</label>
			<input type="radio" name="question4" value="Global warming">
			<br>
			<label for="option2">A declining and agitated bee population</label>
			<input type="radio" name="question4" value="A declining and agitated bee population">
			<br>
			<label for="option3">Bush</label>
			<input type="radio" name="question4" value="Bush">
			<br>
			<label for="option4">Beyonce</label>
			<input type="radio" name="question4" value="Beyonce">
			<hr>

		<h3>Question 5</h3>
			<p>Philip J. Fry works for whom, and at what company?</p>
			<label for="option1">Clark Kent: The Daily Planet</label>
			<input type="radio" name="question5" value="Clark Kent: The Daily Planet">
			<br>
			<label for="option2">Your mom: Applebees</label>
			<input type="radio" name="question5" value="Your mom: Applebees">
			<br>
			<label for="option3">Professor Farnsworth: Planet Express</label>
			<input type="radio" name="question5" value="Professor Farnsworth: Planet Express">
			<br>
			<label for="option4">Confessor Cromwell: The Church of Atom</label>
			<input type="radio" name="question5" value="Confessor Cromwell: The Church of Atom">
			<hr>

		<h3>Question 6</h3>
			<p>Who saved Project Purity from the Enclave?</p>
			<label for="option1">The Vault Dweller</label>
			<input type="radio" name="question6" value="The Vault Dweller">
			<br>
			<label for="option2">Deacon</label>
			<input type="radio" name="question6" value="Deacon">
			<br>
			<label for="option3">Liberty Prime</label>
			<input type="radio" name="question6" value="Liberty Prime">
			<br>
			<label for="option4">Crash Bandicoot</label>
			<input type="radio" name="question6" value="Crash Bandicoot">	
			<hr>
			
		<h3>Question 7</h3>
			<p>Bojack Horseman cannot control himself around which food:</p>
			<label for="option1">Hotdogs</label>
			<input type="radio" name="question7" value="Hotdogs">
			<br>
			<label for="option2">Spicy mayo, just by itself</label>
			<input type="radio" name="question7" value="Spicy mayo, just by itself">
			<br>
			<label for="option3">Lobster</label>
			<input type="radio" name="question7" value="Lobster">
			<br>
			<label for="option4">Cotton candy</label>
			<input type="radio" name="question7" value="Cotton candy">	
			<hr>	
			
		<h3>Question 8</h3>
			<p>Does pineapple go on pizza?</p>
			<label for="option1">No</label>
			<input type="radio" name="question8" value="No">
			<br>
			<label for="option2">Hell no</label>
			<input type="radio" name="question8" value="Hell no">
			<br>
			<label for="option3">Yes, it's a free country</label>
			<input type="radio" name="question8" value="Yes, it's a free country">
			<br>
			<label for="option4">Nah but it goes on your mom lol</label>
			<input type="radio" name="question8" value="Nah but it goes on your mom lol">
			<hr>
			
		<h3>Question 9</h3>
			<p>The main antagonist of Borderlands 2 is:</p>
			<label for="option1">Hillary Clinton</label>
			<input type="radio" name="question9" value="Hillary Clinton">
			<br>
			<label for="option2">Handsome Jack</label>
			<input type="radio" name="question9" value="Handsome Jack">
			<br>
			<label for="option3">Bo Biddly</label>
			<input type="radio" name="question9" value="Bo Biddly">
			<br>
			<label for="option4">Spyro the dragon</label>
			<input type="radio" name="question9" value="Spyro the dragon">
			<hr>
			
		<h3>Question 10</h3>
			<p>The yellow dude from the board game Clue is named:</p>
			<label for="option1">Captain Crumbo</label>
			<input type="radio" name="question10" value="Captain Crumbo">
			<br>
			<label for="option2">Colonel Mustard</label>
			<input type="radio" name="question10" value="Colonel Mustard">
			<br>
			<label for="option3">Dandy Joe Jackson</label>
			<input type="radio" name="question10" value="Joe Jackson">
			<br>
			<label for="option4">Yellow Man</label>
			<input type="radio" name="question10" value="Yellow Man">	
			<hr>
			

			<input type="submit" value="Check Yo Score">

			<input type="checkbox" value="yes" name="Clear">Clear Previous Scores
		</form>

	<?php $score ?>
		
		
	<?php if ( !empty($_POST['name']) ): ?>	
		<br>
		<br>

		<?php

			$name = $_POST['name'];

			$score = 0;

			$solutions = array("question1" => "Bojack Horseman", "question2" => "Rick Sanchez", "question3" => "Wayyy up inside his butt", "question4" => "Bush", "question5" => "Professor Farnsworth: Planet Express", "question6" => "The Vault Dweller", "question7" => "Cotton candy", "question8" => "Yes, it's a free country", "question9" => "Handsome Jack", "question10" => "Colonel Mustard");

			foreach ($solutions as $question => $answer){
				if( $_POST[$question] == $answer)
					$score++;
			}

		$db_hostname = 'localhost';
		$db_database = 'score_history';
		$db_username = 'root'; 
		$db_password = 'root'; 

		$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

		if (!$db_conn){

			echo "Database connection failed, creating new database.. ";

			$db_conn = new mysqli($db_hostname, $db_username, $db_password);

			$sql = "CREATE DATABASE $db_database";

			if ($db_conn->query($sql) === TRUE) 
				echo " Database created successfully. ";

			$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

		}

		$check = $db_conn->query("SELECT 1 FROM scores");

		if(!$check){

			echo "Table does not exist, creating table. ";

			$sql = "CREATE TABLE scores(
				id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
				name VARCHAR(30),
				quiz INT(2) )";

			$new_table = $db_conn->query($sql);

			if ($new_table === TRUE)
				echo "Table 'scores' created successfully. ";
			else
				echo "ERROR: Table was not created. ";
		}

		if($_POST['Clear']=="yes"){

			CLEAR($db_conn);
		}
	

		
		$check_name = "SELECT * FROM scores WHERE name =  '$name'";
		
		$name_query = mysqli_query($db_conn, $check_name);		

		$name_exists = mysqli_num_rows($name_query);
		
		if($name_exists > 0){
			
			$new_score = "UPDATE scores SET quiz = $score WHERE name = '$name'";
			
			if($db_conn->query($new_score)=== TRUE){
				
				echo "\rName exists in database, updating score.";
			}
			
			else{
				
				echo "Name exists in database, but score could not be updated. ";
			}
		}

		elseif($name_exists == 0){

		$insert_query = "INSERT INTO scores (name, quiz)
			VALUES (?, ?)";

		$prepared_insert = mysqli_prepare($db_conn, $insert_query);

		mysqli_stmt_bind_param($prepared_insert, "si", $name, $score);
		
		$success = mysqli_stmt_execute($prepared_insert);

		$count = mysqli_affected_rows($db_conn);

		mysqli_stmt_close($prepared_insert);

		if ($success && $count > 0)

			echo "Your score has been recorded. ";

		else
	
			echo "Score submission failed. ";

		}


		?>

	<h3>RESULTS</h3>
	<br>
	<p>Thanks for participating, <?php echo $name ?>!</p>
	<p>Your score is <?php echo $score ?> out of 10</p>
	<hr>

	<br>
	<h3>Score History</h3>
	<br>

	<?php

		$get_scores = "SELECT * FROM scores";

		$score_results =$db_conn->query($get_scores);

		$all_scores = array();

		for($i = 0; $row = mysqli_fetch_array($score_results, MYSQLI_ASSOC); $i++){

			$all_scores[$i]['name'] = $row['name'];

			$all_scores[$i]['quiz'] = $row['quiz'];

		}

	?>

	<?php if ( !empty($all_scores) ): ?>
	
		<table>
			<tr>
				<th>Name</th>
				<th>Score</th>
						
			</tr>

			<?php foreach ($all_scores as $guest): ?>
				<tr>
					<td><?php echo $guest['name'] ?></td>
					<td><?php echo $guest['quiz'] ?></td>
			
				</tr>
			<?php endforeach; ?>
		</table>
		<br>

	<?php endif ?>
			
		
	<?php endif ?>

	<?php close_db_connection($db_conn)?>


	
</body>
</html>