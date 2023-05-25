<!doctype>
<html>
	<head>
		<title>Belajar Bootstrap</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/gaya.css" rel="stylesheet">
	</head>
	<body class="latar_masuk">
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4"></div>
				<div class="col-lg-4 well masuk_tengah">
					<form action="login.php" class="container-form" method="POST">
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username" placeholder="Masukan Username Anda"></input>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="password" placeholder="Masukan Password Anda"></input>
						</div>
						<div class="form-group">
				            <label for="exampleInputPassword1">Level</label>
				            <select class="form-control" name="role">
				              <option value="admin">Admin</option>
				              <option value="kasir">Kasir</option>
				              <option value="owner">Owner</option>
				            </select>
				        </div>
						<div class="form-group">
							<button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>