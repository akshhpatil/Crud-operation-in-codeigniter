
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/aksh.css">
</head>
<body>
<div class="container">  
	<div class="row"> 
		<h1>contacts us </h1>
		<div class="col-xs-4">

			<?php echo form_open();?>
			<div class="form-group">
            <label for="name">Name:</label>
				<input type="text" name="name" class="form-control" value="<?php echo $this->input->post('name'); ?>" />
				<?php echo form_error('name');  ?>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" class="form-control" value="<?php echo $this->input->post('email'); ?>" />
				<?php echo form_error('email');  ?>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" value="<?php echo $this->input->post('password'); ?>" />
				<?php echo form_error('password');  ?>
			</div>


			<div class="form-group">
				<label for="phone">phone:</label>
				<input type="number" name="phone" class="form-control" value="<?php echo $this->input->post('phone'); ?>" />
				<?php echo form_error('phone');  ?>
			</div>

			<div class="form-group">
				<label for="address">address:</label>
				<input type="textarea" name="address" class="form-control" value="<?php echo $this->input->post('address'); ?>" />
				<?php echo form_error('address');  ?>
			</div>

			<div class="form-group"><input type="submit" name="submit" /> </div>
			<?php echo  form_close();?>
		</div>
	</div>
</div>
</body>
</html>