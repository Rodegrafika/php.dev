<div class="container">
	<div class="card mt-3">
	  <div class="card-header">
	    User Login
	  </div>
	  <div class="card-body">
	  	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    
	    <div class="form-group">
	    	<label>Email</label>
	    	<input type="text" name="email" class="form-control" />
	   </div>
	        <div class="form-group">
	    	<label>Password</label>
	    	<input type="password" name="password" class="form-control" />
	    </div>
	    <input class="btn btn-primary" name="submit" type="submit" value="submit"/>
	    
	    </div>
	</div>
</div>