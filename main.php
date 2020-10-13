<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			
		$database = [
			[
				"title" => "Джису в дораме", 
				"short_text" => "Джису сыграет роль студентки женского университета факультета английской литературы. юн ён чо (персонаж джису) весёлая, свежая и красивая. она находит раненного лим сухо и решает спасти его. он аспирант престижного университета и считается идеальным мужчиной, которого все обожают за харизму. они влюбляются друг в друга с первого взгляда.", 
				"img" => "imgg/1.jpg", 
				"users" => "marrymejisoo45"
			], 
			[
				"title" => "Трансляция", 
				"short_text" => "14 октября blackpink проведут трансляцию в твиттерами с ответами на вопросы блинков. Чтобы задать вопрос поставьте тег #Ask_BLACKPINK
", 
				"img" => "imgg/2.jpg", 
				"users" => "userblink"
			], 
			[
				"title" => "Холзи и Блэкпинк", 
				"short_text" => "Однажды Холзи выложила видео, где она танцует под dddd, после чего антифанаты девочек напали на неё, а Холзи в свою очередь ответила, что она фанатка Блэкпинк, и также она написала что-то по типу: «простите, я забыла, что обязана спрашивать у вас, кто мне должен нравиться»", 
				"users" => "4blackpink1"
			],
			[
				"title" => "500к проданных копий альбома за день!!!", 
				"short_text" => "Блэкпинк становятся первой женской группой в истории, которая продала свыше 500 000 копий альбома за первые сутки. день отсчёта ещё не закончен, продажи ещё идут", 
				"img" => "imgg/4.jpg", 
				"users" => " kchartsofficial"
			],
			[
				"title" => "SELPINK IN YOUR AREA", 
				"short_text" => "«Они заслуживают всего. когда я узнала, что девочки хотят, чтобы я участвовала в коллабе, я сразу подумала, что да. я получала предложения от других артистов и моя компания изначально хотела, чтобы я поработала с другими, но я подчеркнула, что хочу блэкпинк. я действительно хочу, чтобы эти девушки побеждали, они так талантливы с безумной трудовой этикой. я хочу убедиться, что они преуспеют в америке.» - Селена o работе с блэкпинк", 
				"img" => "imgg/5.jpg", 
				"users" => "roséarabicsource"
			],
		];
		 ?>
	</div>
	<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "my_database");

		if($connect==false){
			echo "Подключение отсутствует";
		}
		else{
			echo "Вы подключились к database";
		}

		$zapros_text = "SELECT * FROM blogs";
		$zapros = mysqli_query($connect, $zapros_text); //мы взяли всю таблицу

		if($zapros==false){
			echo " Запрос не выполнен";
		}
		else{
			echo " Запрос работает";
		}

		$result1 = $zapros->fetch_assoc();
		$result2 = $zapros->fetch_assoc();
		$result3 = $zapros->fetch_assoc();
		$result4 = $zapros->fetch_assoc();
		$result5 = $zapros->fetch_assoc();

	 ?>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ </h1>
		<hr>
		<h2> 
			<?php 
				$login = $_GET["login"];
				$password = $_GET["password"];
				if ($login == "Елена" & $password == 12345) {
					echo "Добро пожаловать, госпожа " . $_GET["login"];
				}
				else{
					echo "Привет, тупой чужак";
				}
			 ?>
		</h2>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php
			 	echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result1["title"] ."</h1>".
				"<h5>". $result1["text"] ."</h5>".
				"<a href='1.php'>Далее</a>".
				"<img class='w-100' src='". $result1["img"] ."'>".				
				"<h5>". $result1["user"] ."</h5>";

				echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result2["title"] ."</h1>".
				"<h5>". $result2["text"] ."</h5>".
				"<a href='2.php'>Далее</a>".
				"<img class='w-100' src='". $result2["img"] ."'>".				
				"<h5>". $result2["user"] ."</h5>";

				echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result3["title"] ."</h1>".
				"<h5>". $result3["text"] ."</h5>".
				"<a href='3.php'>Далее</a>".
				"<img class='w-100' src='". $result3["img"] ."'>".				
				"<h5>". $result3["user"] ."</h5>";

				echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result4["title"] ."</h1>".
				"<h5>". $result4["text"] ."</h5>".
				"<a href='4.php'>Далее</a>".
				"<img class='w-100' src='". $result4["img"] ."'>".				
				"<h5>". $result4["user"] ."</h5>";

				echo "<h1 style='background-color: #a5f2e0; margin-top: 70px'>". $result5["title"] ."</h1>".
				"<h5>". $result5["text"] ."</h5>".
				"<a href='5.php'>Далее</a>".
				"<img class='w-100' src='". $result5["img"] ."'>".				
				"<h5>". $result5["user"] ."</h5>";					
			 ?>
		</div>
	</div>
</body>
</html>