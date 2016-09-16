
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<footer class="container-fluid footer">
		<p class="pull-right">
			Executed in {elapsed_time} seconds, using {memory_usage}.<br />
			Powered by <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a> <?php echo BONFIRE_VERSION; ?>
		</p>
	</footer>



  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


    <div id="debug"><!-- Stores the Profiler Results --></div>   
   
    
    
    
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo Template::theme_url('adminlte/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/fastclick/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo Template::theme_url('adminlte/dist/js/app.min.js'); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
    <script src="<?php echo Template::theme_url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo Template::theme_url('adminlte/plugins/chartjs/Chart.min.js'); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo Template::theme_url('adminlte/dist/js/pages/dashboard2.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo Template::theme_url('adminlte/dist/js/demo.js'); ?>"></script>

        
    <?php /*    
    <script>
        window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>');
    </script>
    <?php */ ?>    
    <?php echo Assets::js(); ?>
</body>
</html>