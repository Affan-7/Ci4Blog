<?= view("templates/header") ?>

<?php if(isset($validation)) : ?>
	<div class="container alert alert-danger text-danger alert-dismissible fade show">
	<?= $validation->listErrors() ?>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>

<div class="container mt-5">
	<form action="/post" method="post">
		<div class="mb-3">
			<label for="blog-title" class="form-label">Post title</label>
			<input type="text" class="form-control" name="title" id="blog-title" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="blog-subtitle" class="form-label">Post subtitle</label>
			<input type="text" class="form-control" name="subtitle" id="blog-subtitle" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="blog-body" class="form-label">Post body</label>
			<textarea class="form-control" name="body" id="blog-body" rows="14"></textarea>
		</div>
		<button type="submit" class="btn btn-outline-success">Post</button>
	</form>
</div>

<?= view("templates/footer") ?>