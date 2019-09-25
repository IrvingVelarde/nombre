<!DOCTYPE html>
<html>
<head>
<title>Segunda Forma de pasar el valor de un input a otro input</title>
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="./">BaulPHP</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">INICIO </a></li>
        <li ><a href="FormaDos.php">Segunda Forma <span class="sr-only">(current)</span></a></li>
        <li ><a href="ConJavaScript.php">Tercera Forma </a></li>      
        </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Segunda Forma de pasar el valor de un input a otro input</h3>
    </div>
  </div>
  <!-- Inicio de contenidos -->
<form class="form-inline" method="" action=""> 

<div class="row">
 

<div class="col-md-4">
<div class="panel-body">

  <div class="form-group mb-2">
<label>Nombres: </label>  </div>
  <div class="form-group mx-sm-3 mb-2">
 
<input class="form-control" type="text" id="trord" onblur="document.getElementById('uno').value=this.value" />
</div>     
</div>


</div>


<div class="col-md-4">
<div class="panel-body">
  <div class="form-group mb-2">
<label>Nombres: </label>  </div>
  <div class="form-group mx-sm-3 mb-2">
<input type="text" id="uno" placeholder="Recibe contenido"  class="form-control">  
</div>
</div>
</div>
  </div>
  
  

</form>   
<!--inicio footer-->
<br><br>
</div>

<div class="panel-footer">
  <div class="container">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
  </div>
</div>
</body>
</html>
