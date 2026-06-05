<?php
	include("config.php");

    //Keeps the data
    if(isset($_POST['archer'])) {
        $archer_id = $_POST['archer'];
    }
    else{
        $archer_id = null;
    }

    if(isset($_POST['round'])) {
        $round_id = $_POST['round'];
    }
    else{
        $round_id = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="individual task on Archery database" />
    <meta name="keywords" content="database, archery" />
    <link rel="stylesheet" href="style.css">
	<style>
		table {
			margin: auto;
		}

		form {
			display: flex;
			align-items: center;
			flex-direction: column;
		}
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
		p a {
			text-decoration: none;
			color: black;
			border: 1px solid black ;
			border-radius: 3px;
			padding: 10px 20px;
			background-color: white;
		}
		p a:hover {
			color: black;
			border: 1px solid black;
			background-color: lightgrey;
		}
	</style>
    <title>Archery Score Recording</title>
</head>
<body>
    <h1>Selected Archer</h1>

    <?php
    if($archer_id && $round_id) {

        $query = "SELECT a.firstName, a.lastName, a.archeryAustraliaID, r.roundName
        FROM archers a, rounds r WHERE a.archeryAustraliaID = '$archer_id' AND r.roundID = '$round_id'";


        $result = $connection->query($query);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            echo "<p><strong>Selected Round: </strong>" . $row['roundName'] . "</p>";
			

            echo "<p><strong>Selected Archer: </strong>" . $archer_id . " - " . $row['firstName'] . " " . $row['lastName'] . "</p>";
            
        } else {
            echo "<p>Archer not found.</p>";
        }

    }
    ?>

<h2>Score Counter</h2>
<form method="post">

    <input type="hidden" name="archer" value="<?php echo $archer_id; ?>">
    <input type="hidden" name="round" value="<?php echo $round_id; ?>">

	<table border="1" cellpadding="10">
		<thread>
			<tr>
				<th>Arrow 1</th>
				<th>Arrow 2</th>
				<th>Arrow 3</th>
				<th>Arrow 4</th>
				<th>Arrow 5</th>
				<th>Arrow 6</th>
			</tr>
		</thread>
		<tbody>
			<tr>
				<?php
				for($i = 1; $i <= 6; $i++) {
					echo "<td>";
					echo "<select name='score$i' required>";

					echo "<option value=''>Select Score</option>";
					echo "<option value='10'>X</option>";
					echo "<option value='10'>10</option>";
					echo "<option value='9'>9</option>";
					echo "<option value='8'>8</option>";
					echo "<option value='7'>7</option>";
					echo "<option value='6'>6</option>";
					echo "<option value='5'>5</option>";
					echo "<option value='4'>4</option>";
					echo "<option value='3'>3</option>";
					echo "<option value='2'>2</option>";
					echo "<option value='1'>1</option>";
					echo "<option value='0'>M</option>";

					echo "</select>";
					echo "</td>";
				}
				?>

			</tr>
		</tbody>
	</table>

	
	<bl>
	<br>
	<button type="submit" name="calculate">Total</button>
</form>

<?php


if(isset($_POST['calculate']) && isset($_POST['calculate']) != "") {
    $temp = 1;
	$total = 0;
    

	for($i = 1; $i <= 6; $i++) {
		$total = $_POST["score$i"] + $total;
	}

	echo "<h3>Total Score: $total</h3>";
	echo "<p>";

	for($i = 1; $i <= 6; $i++) {
		$currScore = $_POST["score$i"];
        
        if($currScore == 10) {
            echo "Arrow " . $temp . ": X <br>";
        }
        else {
		    echo "Arrow " . $temp . ": " . $currScore . "<br>";
        }
        $temp++;
	}

	echo "</p>";
}
else {
    echo "<p>Please select scores for all arrows and click 'Total' to calculate the score.</p>";
}

echo "<p><a href='index.php'>Go Back</a></p>";
?>



    <?php
		$connection->close();
	?>
</body>
