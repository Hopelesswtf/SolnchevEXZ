<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW LIFE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }


		.foto {
            width: 200px;
            height: 300px;
            border-radius: 6px;
        }
        .foto1 {
            width: 200px;
            height: 170px;
            border-radius: 6px;
        }
        .recent-ads {
            text-align: center;
            padding: 0px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 8px;
        }

        .recent-ads h2 {
            color: Black;
        }

        .recent-ads .slider-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .company-facts {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 8px;
        }

        .animal-cards {
            text-align: center;
            margin: 20px auto;
            max-width: 1000px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .animal-card {
            width: 30%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 8px;
        }



    </style>
</head>
<body>


    <html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" >
	<link rel="stylesheet" type="text/css" href="2.css">
	<title>buro_nahodok</title>
	</head>
	<body>
<?php

include "connect.php";
 

	$link = mysqli_connect($hostname, $username, $password, $dbname)
		or die("Подключение не создано!" . mysqli_error($link));
 mysqli_set_charset ( $link , "UTF8" );

$query = "SELECT * FROM `jivotnii`";
 

$b = mysqli_query($link, $query);
 
//Печатаем шапку таблицы
print ("<h1 align=center>Животные</h1>
<table border=1  align=center width=90% cellpadding=5 valign=top>
<tr  bgColor=#98FB98  align=center>
<td><b>Id</b></td>
<td width=8%><b>id вида</b></td>
<td><b>id пола</b></td>
<td><b>Кличка</b></td>
<td><b>Возраст</b></td>
</tr>");

//Печатаем содержимое таблицы
while ($a = mysqli_fetch_array  ($b))
{
$id=$a['id_jivotnogo'];
$idvida=$a['id_vida'];
$idpola=$a['id_pola'];
$Klichka=$a['Klichka'];
$Vozrast=$a['Vozrast'];
print ("<tr valign=top>
<td width=8% align=center bgColor=#98FB98>$id</td>
<td align=center bgColor=#48D1CC>$idvida</td>
<td align=center bgColor=#48D1CC>$idpola</td>
<td align=center bgColor=#48D1CC>$Klichka</td>
<td align=center bgColor=#48D1CC>$Vozrast</td>
</tr>");
}
print ("</table>");

mysqli_close($link);
?>

<section class="recent-ads">
	<h2>Фотографии наших животных</h2>

<section class="animal-cards">
    <div class="animal-card">
        <img src="kosh.jpg" class="foto1">
        <p>Вид животного: Кот</p>
        <p>Кличка: Персик</p>
        <p>Номер: 543-234-789</p>
    </div>
    <div class="animal-card">
        <img src="sobak.jpg" class="foto1">
        <p>Вид животного: Собака</p>
        <p>Кличка Шарик</p>
        <p>Номер: 111-111-111</p>
    </div>
    <div class="animal-card">
        <img src="krol.jpg" class="foto1">
        <p>Вид животного: Кролик</p>
        <p>Кличка: Снежок</p>
        <p>Номер: 643-923-128</p>
    </div>
    

</section>
</body>
</html>
