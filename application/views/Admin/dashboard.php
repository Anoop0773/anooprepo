<?php include('header.php'); ?>

<div class="container" style="margin-top:50px;"></div>

<?php foreach ($user as $key): ?>
	


<?php echo "name:  ".$key->name."<br>"; ?>
<?php echo "email:  ".$key->email."<br>"; ?>
<?php echo "gender:  ".$key->gender."<br>"; ?>
<?php echo "phone:  ".$key->phone."<br>"; ?>

<?php  endforeach; ?>

<?php include('footer.php'); ?>