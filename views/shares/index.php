<div class="container">
	    <?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-success btn-share mt-3" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php endif;  ?>
	
	<?php foreach($viewmodel as $item) : ?>
		<div class="card bg-light mb-3 mt-3">
			<div class="card-body">
				<h5><?php echo $item['title']; ?></h5>
				<small><?php echo $item['create_date']; ?></small>
				<hr />
				<p><?php echo $item['body']; ?></p>
				<a class="btn btn-outline-primary" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
			</div>
		</div>
	<?php endforeach; ?>


</div>