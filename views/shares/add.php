<div class="container">
	<div class="card mt-3">
	  <div class="card-header">
	    Share Something
	  </div>
	  <div class="card-body">
	  	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    <div class="form-group">
	    	<label>Share Title</label>
	    	<input type="text" name="title" class="form-control" />
	    </div>
	    <div class="form-group">
	    	<label>Body</label>
	    	<textarea type="text" name="body" class="form-control" /></textarea>
	   </div>
	        <div class="form-group">
	    	<label>Link</label>
	    	<input type="text" name="link" class="form-control" />
	    </div>
	    <input class="btn btn-primary" name="submit" type="submit" value="submit"/>
	    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">cancel</a>
	    </div>
	</div>
</div>