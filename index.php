<?php
include __DIR__ . '/db.php';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main>
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
            <?php
            foreach ($albums as $album) : ?>
                <div class="col">
                    <div class="card h-100 p-3 text-center">
                        <div class="card_poster">
                            <img class="card-img-top img-fluid h-100" src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>" />
                        </div>
                        <div class="card-body p-0 pt-4">
                            <h4 class="card-title text-uppercase fw-bold"><?= $album['title'] ?></h4>
                            <div class="card-text">
                                <div class="author"><?= $album['author'] ?></div>
                                <div class="year"><?= $album['year'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>