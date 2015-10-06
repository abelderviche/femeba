<?php
$this->load->view('vwHeader');
?>
<style>
/* label color */
   .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #1565C0;
   }
   .input-field textarea:focus + label {
     color: #1565C0;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #1565C0;
     box-shadow: 0 1px 0 0 #1565C0;
   }
   .input-field input[type=email]:focus {
     border-bottom: 1px solid #1565C0;
     box-shadow: 0 1px 0 0 #1565C0;
   }

   .input-field textarea:focus {
     border-bottom: 1px solid #1565C0;
     box-shadow: 0 1px 0 0 #1565C0;
   }

   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #1565C0;
     box-shadow: 0 1px 0 0 #1565C0;
   }
    .input-field input[type=email].valid {
     border-bottom: 1px solid #1565C0;
     box-shadow: 0 1px 0 0 #1565C0;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color:  #1565C0;
   }
    .parallax-container {
           min-height: 150px;
           height: 50px;
    }
      .select-wrapper input.select-dropdown {
       	margin-left:40px; 
       	width: 420px;
       }
       .dropdown-content li > a, .dropdown-content li > span {
       	color:#1565C0;
       }
        </style>

   <div class="parallax-container">
   	  <div class="section no-pad-bot">
      <div class="container">
        <div class="row left">
          <h5 class="header col s12 black-text">Solicite asesor</h5>
        </div>
      </div>
    </div>
      <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>asesor.jpg"></div>

    </div>

<div class="container">
	<div class="row">

		<form class="col s12" method="post" name="form" action="solicite/enviar">
			<div class="row">
				<div class="input-field col s12 m6">
					<i class="material-icons prefix">account_circle</i>
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre y apellido</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12  m6">
					<i class="material-icons prefix">email</i>
					<input id="email" name="email" type="email" class="validate" required>
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12  m6">
					<i class="material-icons prefix">phone</i>
					<input id="telefono" name="telefono" type="text" class="validate" required>
					<label for="telefono">Telefono</label>
				</div>
			</div>
			<div class="row">
			 	<div class="input-field col  m6 s12">
			 	 	<i class="material-icons prefix ">perm_identity</i>
				    <select id="rango" name="rango" style="margin-left:40px;">
						<option value="" disabled selected>Rango etario</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
				    </select>
			  	</div>

			</div>

			<div class="row">
				<div class="input-field col s12 ">
					<i class="material-icons prefix ">comment</i>
					<textarea id="consulta" name="consulta" class="materialize-textarea " required></textarea>
					<label for="consulta"  >Ingrese su Consulta</label>
				</div>
			</div>
			<input class="btn blue darken-3" type="submit" value="Enviar">

		</form>
	</div>
</div>




<?php
$this->load->view('vwFooter');
?>
<script type="text/javascript">
  $(document).ready(function(){
      $('.parallax').parallax();

    $('select').material_select();
    });
            
</script>