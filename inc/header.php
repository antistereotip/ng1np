<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo $this->charset; ?>">
<meta name="keywords" content="<?php echo $this->keywords; ?>">
<meta name="description" content="<?php echo $this->description; ?>">
<meta name="author" content="<?php echo $this->author; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $this->title; ?></title>
<link rel="stylesheet" href="inc/stil.css">
</head>
<body>
<h1>All About Universe. Regards. Admin.</h1>
<?php
$dir = "./pic/";
#---ucitavanje vrednosti iz foldera u niz---#
$pictures = glob($dir."*.png");
//var_dump($pictures);
shuffle($pictures);

#---prikazivanje 4 random slike iz niza $pictures---#
for ($i = 0; $i < 4; $i++) {
    echo "<img src='". $pictures[$i] ."' height='150'/>";
}
?>
<p></p>

