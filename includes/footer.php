    <script src="<?= $path; ?>assets/js/jquery.js"></script>
    <script src="<?= $path; ?>assets/js/bootstrap.bundle.js"></script>
    <script>
        $("#btn_prt").click(function(){
            $(this).attr("class","card text-white mt-3 switch");
            $("#btn_pro").attr("class","card bg-light text-dark mt-3");
            $("#prt").fadeIn();
            $("#pro").hide()
        });
        $("#btn_pro").click(function(){
            $(this).attr("class","card text-white mt-3 switch");
            $("#btn_prt").attr("class","card bg-light text-dark mt-3");
            $("#pro").fadeIn();
            $("#prt").hide();
        });
    </script>
</body>
</html>