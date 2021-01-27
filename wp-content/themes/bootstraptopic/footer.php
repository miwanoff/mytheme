<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- <?php get_sidebar('second') /* sidebar-second.php */?> -->
    <div class="col-md-12">
        <?php if (is_active_sidebar('bootkit_sidebar')) {
    dynamic_sidebar('bootkit_sidebar');
}?>
    </div>

    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  -->
<?php wp_footer();?>
</body>

</html>