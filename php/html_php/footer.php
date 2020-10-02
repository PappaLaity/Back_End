<footer>
    <div class="row">
        <div class="col-md-4">
            <?php 
            require_once ('functions/compteur.php');
            $compteur = afficher_vue();
            ?>
            Il y'a <?= $compteur?> visiteur<?php if ($compteur>1):?>s<?php endif;?>  
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <h5>Navigation</h5>
            <ul class="list-unstyled text-small">
                <?= nav_footer();?>
            </ul>
        </div>
    </div>
</footer>
</main><!-- /.container -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>