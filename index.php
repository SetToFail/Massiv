<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Massiv</title>
</head>
<body>
	<body>
		<form name="text" action="" method="GET">
			<input type="text" name="xn" placeholder="Размер массива"><br>
			<input type="submit" value="Start" id=""><br>
			<?php 
			if (isset($_GET['xn'])){
				$size = $_GET['xn'];
				$arr = [];
				for($i = 0; $i <= $size-1;$i++){
					for($j = 0; $j <= $size-1;$j++){
						$arr[$i][$j]=rand(0,9);
					}
				}
				echo"Начальный массив<br> ";
				foreach ($arr as $ar){
					foreach($ar as $a){
						echo $a.' ';
					}
					echo"<br>";
				}
				for($i = 0; $i <= $size-1; $i++){
					for($j = ($i + 1); $j <= $size - 1;$j++){
						if($arr[$i][$i]<$arr[$j][$j]){
							$temp = $arr[$i][$i];
							$arr[$i][$i] = $arr[$j][$j];
							$arr[$j][$j]=$temp;
						}
					}
				}
				echo "Сортированный массив:<br> ";
				foreach ($arr as $ar){
					foreach($ar as $a){
						echo $a.' ';
					}
					echo"<br>";
				}
				for($i = 0; $i <= $size-1; $i++){
					$b+=$arr[$i][$i];
				}
				echo"Сумма главной диагонали:<br> ";
				echo $b;
			}
			?>
		</form>
	</body>
	</html>