<div class="container jumbotron">
<h2 style="text-align: center">Authentification page</h2>
<form class="form-horizontal ajax-form" role="form" method="post" action="index.php?p=admin&action=processlogin" id="login-form">
  <div class="form-group">
  	<div class="col-sm-3"></div>
    <label for="username" class="col-sm-1 control-label">Username</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="username" name="user" placeholder="Enter username">
    </div>
    <div class="col-sm-3"></div>
  </div>
  <div class="form-group">
  <div class="col-sm-3"></div>
    <label for="password" class="col-sm-1 control-label">Password</label>
    <div class="col-sm-4">
    	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
  	</div>
  	<div class="col-sm-3"></div>
  </div>
  <div class="row">
	  <div class="col-sm-5"></div>
	  <button type="submit" class="btn btn-bat">Log in</button>
  </div>
</form>
</div>