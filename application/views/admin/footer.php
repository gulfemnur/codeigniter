
    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  GNY &nbsp;2017 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?=base_url() ?>assets/admin/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?=base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url() ?>assets/admin/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url() ?>assets/admin/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url() ?>assets/admin/plugins/flot/jquery.flot.time.js"></script>
     <script  src="<?=base_url() ?>assets/admin/plugins/flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url() ?>assets/admin/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#editor',
     external_plugins: {
     },
     height: 200,
     themes: "modern",
     plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code textcolor colorpicker '
      ],
      toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | code',
   });</script>
   
   
   <!--buraya kadar olanı body yı kapattıgın yere yada jerjangi bi js dosyasına en ustteki script tagı haric 
   
   daha sonra site ıcerısınde id sini #editor yaptıgın her textarea ya uygular -->
    

</body>

    <!-- END BODY -->
</html>
