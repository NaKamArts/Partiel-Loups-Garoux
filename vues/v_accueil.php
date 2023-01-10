<div class="container mt-5">
    <h1 class="title">Loup-garou</h1>

    <div class="row">
    <?php
        // Test
        foreach (Carte::getAllCartes() as $carte) {
            echo '<div class="col-2">';
            echo '<img src="'.$carte->getImage().'" alt="'.$carte->getDescription().'" width=128px>';
            echo '</div>';
        }
    ?>
    </div>

</div>