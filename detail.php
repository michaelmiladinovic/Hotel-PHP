<?php
if(!isset($_GET['id']))
{
	die('No id: go back to the <a href="index.php">Hotels page</a>');
}
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

if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($hotels)){
	die('Invalid: go back to the <a href="index.php">Hotels page</a>');
	
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $hotels[0]['name']; ?></title>
  </head>
  <body>
    <div class="container">
		<h1><?= $hotels[$_GET['id']]['name'] ?></h1>
		<img src="<?= $hotels[$_GET['id']]['picture'] ?>" style="max-width:500px" />
		<p>Address: <?= $hotels[$_GET['id']]['address'] ?></p>
		<p>Price per night: <?= $hotels[$_GET['id']]['price'] ?></p>
		<p>Rating: <span class="badge badge-secondary"><?= $hotels[$_GET['id']]['rating'] ?></span></p>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>