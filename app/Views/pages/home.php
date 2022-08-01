<?= view("templates/header") ?>

<?php if(isset($success)) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</svg>
		Post was Successful !
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>

<div class="h-100 p-5 border" style="background-color: #e9ecef;"> <!-- Jumbotron was discontinued from bootstrap5 that's why I created this -->
	<div class="container">
				<h1 style="font-family: 'Work Sans';">Ci4 Blog!</h1>
				<p class="opacity-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				<hr>
				<p>This is my first blog with CodeIgniter 4</p>
				<button class="btn btn-outline-secondary" type="button">Learn more</button>
	</div>
</div>

<?= view("templates/footer") ?>