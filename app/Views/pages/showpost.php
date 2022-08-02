<?= view("templates/header") ?>

<div class="container mt-5">
        <a href="#" class="text-dark" style="text-decoration: none;"><h2><?= $post[0]['title'] ?></h2></a>
        <a href="#" class="text-dark" style="text-decoration: none;"><h5 class="text-muted"><?= $post[0]['subtitle'] ?></h5></a>
        <p class="text-muted"><?php $date = $post[0]['created_at'];
                $date = date('d M Y');
                echo $date;
        ?></p>
        <p><?= $post = preg_replace("/\r\n|\r|\n/", '<br/>', $post[0]['body']); ?></p>
</div>

<?= view("templates/footer") ?>