<?= view('templates/header_auth') ?>

<div class="container mt-5">
	<div class="row">
		<form class="col-fluid col-sm-9 col-md-7 col-lg-6 col-xl-5 m-auto border rounded-4 p-5 d-felx">
		<div class="text-center">
			<h1 class="p-2">Ci4 Blog</h1>
		</div>
		<h3 class="text-center mb-4">Login</h3>
			<div class="form-floating mb-4">
				<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating mb-4">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			<a style="float: right;" href="/register">Don't have an account yet?</a>
		</form>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>