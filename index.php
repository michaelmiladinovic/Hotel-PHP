<?php

$hotels=[
	[
	'name'=>'Park Inn', 
	'address'=>'Address 1', 
	'picture'=>'hotel1.jpg', 
	'price'=>99.0, 
	'rooms'=>20, 
	'rating'=>4.5
	],
	[
	'name'=>'Bangy Inn', 
	'address'=>'Address 2', 
	'picture'=>'hotel2.jpg', 
	'price'=>49.99, 
	'rooms'=>3, 
	'rating'=>3.0
	],
	[
	'name'=>'Studio Inn', 
	'address'=>'Address 3', 
	'picture'=>'hotel3.jpeg', 
	'price'=>159.99, 
	'rooms'=>10, 
	'rating'=>4.7
	]
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All the hotels</title>
  </head>
  <body>
    <div class="container">
	<h1>All the hotels</h1>
		<?php
		for($i=0;$i<count($hotels);$i++){
			echo '<div class="media">
			  <img src="'.$hotels[$i]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
			  <div class="media-body">
				<h5 class="mt-0">'.$hotels[$i]['name'].'</h5>
				<p>Price: '.$hotels[$i]['price'].'</p>
				<p><a href="detail.php?id='.$i.'">Click to see details</a></p>
			  </div>
			</div>';
			echo '<hr>';
		}

		?>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>