<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
	<title>WORKOUTS</title>
	<link rel="stylesheet" href="<?php echo base_url();?>stylesheets/screen.css" type="text/css" media="screen"/>
	<script src="<?php echo base_url(); ?>js/jquery1.9.js" /></script>
	<script>
		$(document).ready(function() {
			$('.workouts_wrapper div h3:even').css('background-color', '#444');
		});
	</script>
</head>
<body>
	<div id="wrapper">

<h3>people</h3>

<h1>monkeu</h1>
<h1>Workouts & Employees Database</h1>
<hr />
<div class="form">
<h3>Add Employee Credentials:</h3>
	<?php echo form_open('workouts/create'); ?>
	 	<p><label for="name">Name: </label>
			<input type="text" name="name" id="name" value="<?php echo set_value('name');?>">
		<p>
			<label for="email">Email Address: </label>
			<input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
		</p>
	<p>
		<label for="job_description">job_description: </label>
		<input type="textarea" name="job_description" id="job_description" value="<?php echo set_value('job_description');?>">
	</p>
	<p>
		<label for="phone">phone: </label>
		<input type="phone" name="phone" id="phone" value="<?php echo set_value('phone');?>">
	</p>
	<p><?php echo form_submit('create', 'Submit'); ?></p>
	<?php echo form_close(); ?>
	<?php echo validation_errors('<p class="error">'); ?>
</div>

<div class="form">
<h3>Add Workout Credentials:</h3>
	<?php echo form_open('workouts/createAgain'); ?>
	<p><label for="chest">Chest: </label>
		<input type="text" name="chest" id="chest" value="<?php echo set_value('chest');?>">
	<p>
		<label for="arms">Arms: </label>
		<input type="text" name="arms" id="arms" value="<?php echo set_value('arms');?>">
	</p>
	<p>
		<label for="back">Back: </label>
		<input type="textarea" name="back" id="back" value="<?php echo set_value('back');?>">
	</p>
	<p>
		<label for="abbs">Abbs: </label>
		<input type="text" name="abbs" id="abbs" value="<?php echo set_value('abbs');?>">
	</p>
		<p>
		<label for="legs">legs: </label>
		<input type="text" name="legs" id="legs" value="<?php echo set_value('legs');?>">
	</p>
	<p><?php echo form_submit('submit', 'Submit'); ?></p>
	<?php echo form_close(); ?>
	<?php echo validation_errors('<p class="error">'); ?>
</div>

<div class="clear"></div>
<hr />

			<div class="workouts_wrapper">
				<h1>Workouts</h1>
				<div class="left">
					<h2>CHEST:</h2>
					<?php if(isset($workouts)) : foreach($workouts as $row) : ?>
						<h3><?php echo $row->chest; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Arms:</h2>
					<?php if(isset($workouts)) : foreach($workouts as $row) : ?>
						<h3><?php echo $row->arms; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Legs:</h2>
					<?php if(isset($workouts)) : foreach($workouts as $row) : ?>
						<h3><?php echo $row->legs; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Abbs:</h2>
					<?php if(isset($workouts)) : foreach($workouts as $row) : ?>
						<h3><?php echo $row->abbs; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Back:</h2>
					<?php if(isset($workouts)) : foreach($workouts as $row) : ?>
						<h3><?php echo $row->back; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="clear"></div>
				<h1>Employees</h1>
				<div class="left">
					<h2>Name:</h2>
					<?php if(isset($stuff)) : foreach($stuff as $row) : ?>
						<h3><?php echo $row->name; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Email:</h2>
					<?php if(isset($stuff)) : foreach($stuff as $row) : ?>
						<h3><?php echo $row->email; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>

				<div class="left">
					<h2>Job Description:</h2>
					<?php if(isset($stuff)) : foreach($stuff as $row) : ?>
						<h3><?php echo $row->job_description; ?></h3> 
					<?php endforeach; ?>
  				<?php else : ?>
  					<h3<HAS NO CONTENT</h3>
  				<?php endif; ?>
				</div>
			</div>
	</div>
</body>
</html>