<?php
	if(count($errors)>0):?>
		<div style="color:red">
		<?php foreach ($errors as $error):?>
		<p><?php echo "<div class='alert alert-danger'> $error</div>" ?></p>
	<?php endforeach ?>
</div>

<?php endif?>