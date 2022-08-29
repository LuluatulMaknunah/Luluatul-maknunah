<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thurs_dpw 1</title>
	<link rel="stylesheet" type="text/css" href="tugas.css">
</head>
<style type="text/css">
	body{
		background-image: url(./bgku.jpeg);
		background-size: cover;
	}
	h1{
		font-family: kristen itc;
		font-size: 50px;
		text-align: center;

	}
	img{
		margin-left: 43%;
		margin-right: 43%;
		width: 200px;
		height: 200px;
		border-radius: 20px;
	}
	p{
		text-align: center;
		font-family: chiller;
		font-size: 35px;
	}
	table{
		margin-left: 30%;
		margin-right: 30%;
		border: solid grey 3px;
		border-radius: 5px;
		text-align: center;
		height: 500px;
		width: 500px;
	}
	tr td{
		border-radius: 10px;
		border: solid grey 3px;
	}
	th{
		font-size: 30px;
		font-family: kristen itc;
	}
	hr{
		height: 3px;
		background-color: pink;
	}
	.tulisan{
		font-family: times new roman;
		font-size: 15px;
		text-indent: 10px;
	}
</style>
<body>
	<script type="text/javascript">
		window.alert("Hello, Selamat datang di Website LU'LUATUL MAKNUNAH.Berikut Ini adalah identitas saya dan output dari pertemuan 2 matakuliah PAW💻")
	</script>
	<?php
		echo("<h1>IDENTITAS DIRI</h1>")
	?>
	<img src="./luna.jpeg" alt="Lu'luatul_Maknunah">
	<?php
		$aku="Lu'luatul Maknunah";
		$kuliah="Trunojoyo University";
		$npm=210411100048;
		$ips=3.55;
		echo ("<p><b>Hello, My Name is : ".$aku);
		echo ("<p><b> I'm a student at : ".$kuliah);
		echo ("<p><b> Student identification number : ".$npm);
		echo ("<p><b> IP Semester : ".$ips);
	?>
	<hr>
		<p class="tulisan">
			<?php
				echo "Berikut merupakan output pertemuan minggu ke-2 matakuliah PENGEMBANGAN APLIKASI WEB materi tentang PHP, PHP memiliki beberapa type data seperti contoh di tabel berikut ini : ";
			?>
		</p>
	<table>
		<tr>
			<th rowspan="5"> 
				<?php 
					echo("TYPE DATA");
				?> 
			</th>
			<td>
				<?php 
					echo" bagian nama dan nama kampus merupakan tipe data : "; var_dump($aku); 
					echo " dan "; var_dump($kuliah);
				?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo" bagian identification number merupakan tipe data : "; var_dump($npm);
				?>
			
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo" bagian IP semester merupakan tipe data : "; var_dump($ips);
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo" Contoh tipe Bolean : ";
					$bol=true;
					$bol2=false;
					var_dump($bol==$bol2);
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo" contoh type data array : <br> ";
					$ray=array(48, 3.55, "Lu'luatul Maknunah");
					var_dump($ray)
				?>
			</td>
		</tr>
	</table>
	<p class="tulisan">
		<?php
			echo "<h2> TYPE DATA STRING </h2>Type data string merupakan type data yang dapat terdiri dari huruf,karakter khusus atau angka, string harus di deklarasikan dengan tanda kutip.<br> dalam php untuk mengetahui type data bisa menggunakan var_dump() seperti contoh pada tabel. contoh output var_dump: string(18) Lu'luatul Maknunah, maksudnya string merupakan type data sedangkan (18) merupakan banyak huruf dan Lu'luatul Maknunah adalah isi dari variabel yang di cek type datanya.";
			echo "<h2> TYPE DATA INTEGER/ INT </h2> Type data integer merupakan type data yang berupa bilangan bulat contohnya : 123, dalam penulisan type data integer tidak memerlukan tanda kutip. contoh output var_dump: int (210411100048), maksudnya int adalah type data dan 210411100048 adalah isi dari variabel yang di cek type datanya.";
			echo "<h2> TYPE DATA FLOAT </h2> Type data FLOAT merupakan type data yang berupa bilangan desimal contoh: 2.5, sama seperti integer dalam penulisan di php tidak memerlukan tanda kutip. contoh output dari var_dump float(3.55), maksudnya float adalah type data dan (3.55) adalah isi dari variabel yang di cek datanya.";
			echo "<h2> TYPE DATA BOOLEAN </h2>Type data Boolean merupakan type data yang hanya dapat memeiliki dua nilai yaitu true dan false.";
			echo "<h2> TYPE DATA ARRAY </h2><br> Type data array adalah variabel tunggal yang menyimpan baanyak nilai.";
			echo "<h2>Contoh Penambahan,Pengurangan dan Perulangan Dalam PHP </h2>";
			$a=5;
			$b=7;
			echo("Contoh Penambahan $a + $b = ".$a+$b."<br>");
			echo("Contoh Penambahan $a - $b = ".$a-$b."<br>");
			for ($i=1; $i <=10 ; $i++) { 
				echo("Ini adalah contoh perulangan di set dari 1 dan berhenti di 10 : ".$i."<br> ");
			}
		?>
	</p>
</body>
</html>