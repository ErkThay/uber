   <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <!-- notify -->
    <script src="js/Notify.js"></script>
    <!-- fetch api -->
    <script src="js/fetch-api.js"></script>

    <?php if( isset( $scripts ) ) : ?>
        <?php foreach( $scripts as $script ) : ?>
            <script src="<?=  $script; ?>"></script>
        <?php endforeach;?>
    <?php endif;?>
</body>

</html>