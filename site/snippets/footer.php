<footer class="row">
  <div class="medium-12 columns footer">
    <?php echo kirbytext($site->copyright()) ?>
  </div>
</footer>

<?php echo js('bower_components/jquery/dist/jquery.min.js') ?>
<?php echo js('bower_components/foundation/js/foundation.min.js') ?>
<?php echo js('bower_components/imagesloaded/imagesloaded.pkgd.min.js') ?>
<?php echo js('bower_components/imagefill/js/jquery-imagefill.js') ?>
<?php echo js('assets/scripts/app.js') ?>

<?php snippet('analytics') ?>

</body>

</html>
