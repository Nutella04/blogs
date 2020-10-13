<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php  
		$connect = mysqli_connect("127.0.0.1", "root", "", "my_database");
		$zapros_text = "SELECT * FROM more";
		$zapros = mysqli_query($connect, $zapros_text); //мы взяли всю таблицу

		$result1 = $zapros->fetch_assoc();
		$result2 = $zapros->fetch_assoc();
		$result3 = $zapros->fetch_assoc();
	?>
	<div class="col-8 mx-auto" style=""> <!-- 2. выводите все элементы в этом диве -->
			<?php
			 	echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result3["title"] ."</h1>".
					"<p>". $result3["text"] ."</p>".
					"<img class='w-100' src='". $result3["img"] ."'>".
					"<p>". $result3["user"] ."</p>";

			?>
		</div>
</body>
</html>