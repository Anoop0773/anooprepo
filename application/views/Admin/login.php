<?php 
include('header.php');
?>

<div class="container" style="margin-top:20px">
<h1>Login</h1>
<?php echo form_open('admin/index'); ?> 
<div class="row">
	<div class="col-lg-6">
		
	
			<div class="form-group">
				<label for="username">User Name: </label>
				
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','id'=>'username','value'=>set_value('username')]); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('username'); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">

			<div class="form-group">
				<label for="pwd">Password: </label>
				
				<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','id'=>'pwd','value'=>set_value('password')]); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('password'); ?>
	</div>
</div>
	<div class="checkbox">
		<label><input type="checkbox" name="remember">Rememebr me</label>
	</div>
	
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'submit']); ?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset']); ?>
	<?php echo anchor('Admin/register/','Sign up?','class="link-class"') ?>

<?php echo form_close(); ?>

</div>


<?php
include('footer.php');
?>