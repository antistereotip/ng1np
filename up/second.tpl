<?php
include 'set/fnc.php';
#--------pocetak kompresije---------#
ob_start("kompresija");
?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/meni.php'; ?>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1><?php echo $row['proces1']; ?></h1>
	<h2>Autor: <?php echo $row['proces2']; ?><h2>
	<h2>Tema: <?php echo $row['proces3']; ?></h2>
	<p><?php echo $row['proces4']; ?></p>
	</div>		
<?php } ?>
</section>

<aside>
<?php foreach ($this->strana as $row) { ?>
        <div>
        <h1><?php echo $row['server1']; ?></h1>
        <h2><?php echo $row['server2']; ?><h2>
        <p><a href="<?php echo $row['server3']; ?>"><?php echo $row['server3']; ?></a></p>
        </div>
<?php } ?>
</aside>

<?php include 'inc/footer.php'; ?>

