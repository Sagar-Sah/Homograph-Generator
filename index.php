<!DOCTYPE html>
<html>
<head>
	<title>Homograph Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2>Homograph Generator</h2>
	<form method="post" action="index.php">
	<b>Enter Your Query</b> <br>
<input type="text" name="query" label="Enter query here">
<button>Generate</button>
</form>
<br>

<?php
error_reporting(0);
$query = $_POST['query'];
$query = filter_var($query);
$query = str_replace("a", "а", $query);
$query = str_replace("b", "Ь", $query);
$query = str_replace("c", "ϲ", $query);
$query = str_replace("d", "ԁ", $query);
$query = str_replace("e", "е", $query);
$query = str_replace("f", "ғ", $query);
$query = str_replace("g", "ɡ", $query);
$query = str_replace("h", "һ", $query);
$query = str_replace("i", "і", $query);
$query = str_replace("j", "ј", $query);
$query = str_replace("k", "κ", $query);
$query = str_replace("l", "ⅼ", $query);
$query = str_replace("m", "ⅿ", $query);
$query = str_replace("n", "ɴ", $query);
$query = str_replace("o", "о", $query);
$query = str_replace("p", "р", $query);
$query = str_replace("q", "ԛ", $query);
$query = str_replace("r", "г", $query);
$query = str_replace("s", "ѕ", $query);
$query = str_replace("t", "τ", $query);
$query = str_replace("u", "υ", $query);
$query = str_replace("v", "ⅴ", $query);
$query = str_replace("w", "ѡ", $query);
$query = str_replace("x", "х", $query);
$query = str_replace("y", "у", $query);
$query = str_replace("z", "z", $query);
//UpperCase
$query = str_replace("A", "Α", $query);
$query = str_replace("B", "Β", $query);
$query = str_replace("C", "Ϲ", $query);
$query = str_replace("D", "Ⅾ", $query);
$query = str_replace("E", "Ε", $query);
$query = str_replace("F", "Ғ", $query);
$query = str_replace("G", "Ԍ", $query);
$query = str_replace("H", "Η", $query);
$query = str_replace("I", "Ι", $query);
$query = str_replace("J", "Ј", $query);
$query = str_replace("K", "Κ", $query);
$query = str_replace("L", "Ⅼ", $query);
$query = str_replace("M", "Μ", $query);
$query = str_replace("N", "Ν", $query);
$query = str_replace("O", "Ο", $query);
$query = str_replace("P", "Ρ", $query);
$query = str_replace("Q", "Ԛ", $query);
$query = str_replace("R", "R", $query);
$query = str_replace("S", "Ѕ", $query);
$query = str_replace("T", "Τ", $query);
$query = str_replace("U", "⋃", $query);
$query = str_replace("V", "Ⅴ", $query);
$query = str_replace("W", "W", $query);
$query = str_replace("X", "Χ", $query);
$query = str_replace("Y", "Ү", $query);
$query = str_replace("Z", "Ζ", $query);


echo "<b>Result: </b><br>".$query;

?>
</body>
</html>