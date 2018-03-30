<?php 
include('header.php');
?>

<div class="container" style="margin-top:20px">
<h1>Register</h1>
<?php echo form_open('admin/register'); ?> 
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
				
				<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','id'=>'pwd']); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('password'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">

			<div class="form-group">
				<label for="cnf_pwd">Confirm Password: </label>
				
				<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'confirm_password','id'=>'cnf_pwd']); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('confirm_password'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">

			<div class="form-group">
				<label for="email">Email: </label>
				
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','id'=>'email','value'=>set_value('email')]); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('email'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">

			<div class="form-group">
				<label for="phone">Phone: </label>
				
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Phone','name'=>'phone','id'=>'phone','value'=>set_value('phone')]); ?>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php echo form_error('phone'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">

			<div class="form-group">
				<label for="gender">Gender: </label>
				
				<select class="form-control" id="gender" name="gender">
			    		<option value="male">Male</option>
			    		<option value="female">female</option>
			    		
			    </select>
			</div>
	</div>
	<div class="col-lg-6" style="margin-top:40px;">
		<?php //echo form_error('phone'); ?>
	</div>
</div>

	
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'submit']); ?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset']); ?>
	

<?php echo form_close(); ?>

</div>


<?php
include('footer.php');
?>