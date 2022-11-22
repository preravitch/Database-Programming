<!DOCTYPE html>
<html>
<body>
<?php if (isset($_GET['a']) && isset($_GET['b'])): ?>
<?= $_GET['a'] ?> + <?= $_GET['b'] ?>
= <?= $_GET['a']+$_GET['b'] ?>
<?php else: ?>
Please specify the values of a and b.
<?php endif; ?>
</body>
</html>