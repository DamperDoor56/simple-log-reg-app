<?php require "includes/header.php"; ?>
<?php if(!isset($_SESSION['username'])) : ?>
<?php echo "hello, please log in" ?>

<?php else : ?>
<?php echo "hello " . $_SESSION['username']; ?>
<?php endif; ?>

<?php require "includes/footer.php"; ?>
