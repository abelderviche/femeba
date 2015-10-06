<?php
$this->load->view('vwHeader');

?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h3 class="center white-text text-darken-3 col m3">FEMEBA Salud Quilmes</h3>
        <div class="row center">
          <h5 class="header col s12 light">Toda la experiencia de nuestra instituci&oacute;n para que usted y los suyos se sientan seguros</h5>
        </div>
        <div class="row center">
          <a href="<?php echo base_url();?>cartilla" id="download-button" class="btn-large waves-effect waves-light blue darken-3"><i class="material-icons white-text left">assignment</i>Ver Cartilla</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row" id="hola">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Titulo 1</h5>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">group</i></h2>
            <h5 class="center">Titulo 2</h5>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">settings</i></h2>
            <h5 class="center">Titulo 3</h5>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Texto descriptivo</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container" id="test" style="opacity:0;">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send blue-text text-darken-3"></i></h3>
          <h4 >Encabezado  4</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Texto descriptivo</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
<?php
$this->load->view('vwFooter');
?>
<script>
  var options = [ 
                  {selector: '#test', offset: 100, callback: 'Materialize.fadeInImage("#test")' } 
                ]; 
  Materialize.scrollFire(options); 

</script>
