<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Квадратичные вычеты группы Галуа порядка 11</title>
	<style type="text/css">
	.even_res.odd_quad {
		background-color: #f00; color: #00f;	
	}
	.odd_res.even_quad {
		background-color: #0f0; color: #f0f;	
	}
	
	.even_res.even_quad{
		color: #ccc;	
	}
	
	.odd_res.odd_quad{
		color: #ccc;	
	}
	</style>
</head>

<body>
	<?php
		$group_order = 11;
		$q_res = [];
		
		for ($i = 0; $i < $group_order; $i++){
           $q_res[$i] = ($i * $i) % $group_order;
        }
	?>
	<h3>Квадратичные вычеты группы Галуа порядка 11</h3>
	<div>
	<b>Квадратичные вычеты от "четных" элементов группы</b><br>
		<?php
			foreach ($q_res as $res => $quad)				
				if (($res % 2) == 0)
				{
					if ($res > 0) echo ', ';
					
					if (($quad % 2) == 0)
						echo $quad . '<b class="even_res even_quad ">(' . $res . ')</b>';
					else
						echo $quad . '<b class="even_res odd_quad ">(' . $res . ')</b>';
				}
		?>
	</div>
	<div>
	<b>Квадратичные вычеты от "нечетных" элементов группы</b><br>
		<?php
			foreach ($q_res as $res => $quad) 
				if (($res % 2) == 1)
				{
					if ($res > 1) echo ', ';
					
					if (($quad % 2) == 0)
						echo $quad . '<b class="odd_res even_quad ">(' . $res . ')</b>';
					else
						echo $quad . '<b class="odd_res odd_quad ">(' . $res . ')</b>';	
				}

		?>
	</div>
	<br>
	Итак, в кольцах вычетов квадрат "четного" элемента не всегда является четным, и наоборот: квадрат "нечетного" элемента не всегда нечетен ;)
</body>
</html>