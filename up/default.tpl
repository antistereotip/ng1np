<?php
include 'set/fnc.php';
#--------pocetak kompresije---------#
ob_start("kompresija");
?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/meni.php'; ?>

<?php
echo '<p>';
$folder = "up/";
echo 'up:' . folderSize($folder);
echo '</p>';
?>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1>Proces 1: <?php echo $row['proces1']; ?></h1>
	<h2>Proces 2: <?php echo $row['proces2']; ?><h2>
	<h2>Proces 3: <?php echo $row['proces3']; ?></h2>
	<p>Proces 4: <?php echo $row['proces4']; ?></p>
	</div>		
<?php } ?>
</section>

<aside>
<?php foreach ($this->strana as $row) { ?>
        <div>
        <h1>Server 1: <?php echo $row['server1']; ?></h1>
        <h2>Server 2: <?php echo $row['server2']; ?><h2>
        <p>Server 3: <a href="<?php echo $row['server3']; ?>"><?php echo $row['server3']; ?></a></p>
        </div>
<?php } ?>
</aside>

<?php include 'inc/footer.php'; ?>


