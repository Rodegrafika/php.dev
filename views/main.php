 <!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.css">
</head>
<body>


	   <nav class="navbar navbar-expand-lg navbar-light bg-light flex-row">
      <div class="container">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
      </li>
      
    </ul>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name'] ?></a></li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">logout</a></li>
      <?php else : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
      <?php endif; ?>
    </ul>
  </div>
  </div>
</nav>

<div class="container">

	<div class="row">
    
    <?php Messages::display(); ?>

    <?php require($view); ?> 
	</div>

</div>

</body>
</html>