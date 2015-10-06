    </div> 
    <footer class="page-footer blue darken-3">
	<div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">FEMEBA</h5>
          <p class="grey-text text-lighten-4">Casa Central: Av. Mitre 864, Quilmes <br>Tel/fax: 4224-3332</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
          <?php $pg = isset($page) && $page != '' ?  $page :'home'  ;    ?>
        <li <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>" class="white-text">Home</a></li>
        <li <?php echo  $pg =='cartilla' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>" class="white-text">Cartilla</a></li>
        <li <?php echo  $pg =='novedades' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>novedades" class="white-text">Novedades</a></li>
        <li <?php echo  $pg =='planes' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>planes" class="white-text">Planes</a></li>
        <li <?php echo  $pg =='info' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>info" class="white-text">Informacion para el socio</a></li>
        <li <?php echo  $pg =='solicite' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>solicite" class="white-text">Solicite Asesor</a></li>

          </ul>
        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">DiV Desarrollo Web</a>
      </div>
    </div>
  </footer>
<!-- /container -->
  
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.min.js"></script>
	<script src="<?php echo HTTP_JS_DIST; ?>materialize.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>init.js"></script>
  </body>
</html>
