<?php /*
$nombre=" ";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nombre ?></title>
</head>
<body>
    
</body>
</html>
<?*/
?>
<!DOCTYPE html>
<html>

<head>
<title>titulo </title>





<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- INICIO Estilos necesarios (que se vea bonito :v ) -->

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">

<link rel="stylesheet" href="jquery-mobile.css">
<script src="jquery-mobile.js"></script>

<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

<!-- FIN Estilos necesarios (que se vea bonito :v ) -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>

<!-- archivos necesarios para la validacion  -->
<link rel="stylesheet" href="css/screen.css" /> 
<script src="http://code.jquery.com/jquery-2.0.3.js"></script>
<script src="jquery.validate.js"></script>
<!-- pagina para entender la validacion:
http://jquery-manual.blogspot.com/2014/05/validar-formularios-con-jquery-validate.html
 -->
<!-- fin de archivos necesarios para validacion -->




</head>
<body>

<!-------------- inicio de pagina "page" ----------->

<div data-role="page"  data-theme="a">
<!-------------- Pagina header ----------->

<div data-role="header">
<h1> Bienvenido </h1>
<!-- OPCIONES horizontales || vertical -->
<!-- Estilos de botones || iconos :
http://www.w3bai.com/es/jquerymobile/jquerymobile_buttons.html
-->
<div data-role="controlgroup" data-type="horizontal">
      <p> </p>
      <a href="#" class="ui-btn ui-icon-search ui-btn-icon-top ">Button 1</a>
      <a href="#" class="ui-btn ui-icon-search ui-btn-icon-top">Button 2</a>
      <a href="#" class="ui-btn ui-icon-search ui-btn-icon-top">Button 3</a>
    </div>

<!--FIN OPCIONES verticales -->
<!--INICIO OPCIONES principales -->
<a  class="ui-btn ui-icon-home ui-btn-icon-top ui-corner-all"  htrf=""> Inicio</a>
<a  class="ui-btn ui-icon-lock ui-btn-icon-top ui-corner-all" href = "" >Cerra cesion</a>
<!--FIN OPCIONES principales-->
</div>


<!--------------  Pagina main content ----------->
<div data-role="main" class="ui-content"   >
<div> <h1 >Iniciar sesion </h1> </div>
<form method="post" action="#pageone" data-ajax="True">
<!-- INICIO  DE CAMPOS label & input   -->
<label for="Nombre">Nombre : <span>*</span></label>
<input type="text" name="Nombre" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<label for="correo">correo: <span>*</span></label>
<input type="Email" id="correo" name="correo"  maxlength="25" placeholder="rode@gmail.com"  class="required" />

<label for="celular">Celular: <span>*</span></label>
<input type="number" id="celular" name="celular"  maxlength="25" placeholder="3007112334"  class="required" />

<label for="contraseña" > Contraseña: <span>*</span> </label>
<input type="password" id="d" name="contraseña"   placeholder="*******" minlength="7" maxlength="25" required/>


<!-- FIN  DE CAMPOS label & input   -->

<!--    INICIO grupo de control          -->
<fieldset data-role="controlgroup">
<legend>Gender:</legend>
<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male">
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female">
</fieldset>
<!--    FIN grupo de control          -->


<!-- INICIO  controlgroup grupo de control todos selecionables   -->
<fieldset data-role="controlgroup">
<legend>Qualification:</legend>
<label for="graduation">Graduation</label>
<input type="checkbox" id="graduation" value="graduation">
<label for="postgraduation">Post Graduation</label>
<input type="checkbox" id="postgraduation" value="postgraduation">
<label for="other">Other</label>
<input type="checkbox" id="other" value="other">
</fieldset>
<!-- FIN  controlgroup  -->

<!-- INICIO  DE SELECCION  fieldcontain - contenedor de campo -->
      <fieldset data-role="fieldcontain" 
        <label for="day"> opciones </label>
        <select name="day"  id="day">
    <optgroup label="opciones 2">
         <option value="mon">1</option>
         <option value="tue">2</option>
         <option value="wed">3</option>
         <option value="thu">4</option>
         <option value="fri">5</option>
    </optgroup>
    <optgroup label="opciones 2">
         <option value="sat" >1</option>
         <option value="sun">2</option>
    </optgroup>
        </select>
      </fieldset>
<!-- FIN SCROLL DE SELECION -->

<label for="switch">Rol:</label>
      <select name="switch" id="switch" data-role="slider">
        <option value="on">invitado</option>
        <option value="off"perelected>Compañero</option>
      </select>


<label for="info">Mensaje:</label>
<textarea name="addinfo" id="info" placeholder="Message"></textarea>
<input type="submit" data-inline="true" value="Submit" data-theme="b" maxlength="100" >
</form>
</div>



<!-- ______________________________________________________________________________________________---->
<!-------------- Segunda pagina page ----------->
<div data-role="page" id="pageone">
<!-------------- Segunda pagina header ----------->
<div data-role="header">
<h1>JQuery Mobile Form</h1>
</div>

<!-------------- Segunda pagina main content ----------->
<div data-role="main" class="ui-content">
<h2>Form Submitted Successfully...!!</h2>
</div>
</div>
<!-------------------------------------------------------------
End of Second page
-------------------------------------------------------------->

</body>
</html>
