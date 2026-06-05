<?php
	include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <meta name="description" content="individual task on Archery database" />
  <meta name="keywords" content="database, archery" />
  <title>Archery Score Recording</title>
	<style>
		select {
			padding: 10px;
			font-size: 15px;
			border: 1px solid black ;
			border-radius: 3px;
			background-color: white;		
		}
		select:hover {
			border: 1px solid black;
			background-color: lightgrey;
			border-radius: 3px;
			color: black;
		}
		button {
			padding: 10px 20px;
			font-size: 15px;
			border: 1px solid black ;
			border-radius: 3px;
			background-color: white;
			cursor: pointer;
		}
		button:hover {
			border: 1px solid black;
			background-color: lightgrey;
			color: black;
		}

	</style>


</head>


<body>
    <h1>Archery Score Recording</h1>


  <form method="post" action="submit.php">
		<h2>Choose Round</h2>
		
		<p><label for="round"><strong>Round</strong></label> 
			<select name="round" id="round" required>
				<option value="">Select Round</option>

					<?php
						$round_query = "SELECT roundID, roundName FROM rounds";
						$round_result = $connection->query($round_query);

						if ($round_result->num_rows > 0) {
							while($row = $round_result->fetch_assoc()) {
								echo "<option value='" . $row["roundID"] . "'>" . $row["roundName"] . "</option>";
							}
						} else {
							echo "<option value=''>No rounds available</option>";
						}
						
					?>
			</select>
			
		</p>
	
    <h2>Choose Archer</h2>
	<label for="archer"><strong>Archer</strong></label>
		<select name="archer" id="archer" required>
			<option value="">Select Archer</option>

				<?php
					$archer_query = "SELECT archeryAustraliaID, firstName, lastName FROM archers ORDER BY archeryAustraliaID ASC";
					$archer_result = $connection->query($archer_query);

					if ($archer_result->num_rows > 0) {
						while($row = $archer_result->fetch_assoc()) {	
							echo "<option value='" . $row["archeryAustraliaID"] ."'>" . $row["archeryAustraliaID"] . 
							" - " . $row["firstName"] . " " . $row["lastName"] . "</option>";
						}
					} else {
						echo "<option value=''>No archers available</option>";
					}
				?>
			
		</select>

		<button type="submit">Submit</button>
	</form>


		<?php
			$connection->close();
		?>


    
</body>


</html>
