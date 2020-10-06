<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Bienvenido al "INstituto de Excelencia"</title>
  </head>

  <style type="text/css">
    
    body {
  background-color: #E6E6FA;
}


footer {
  background-color:#1A1A1A;
  height: 50%;
  color: white;
  padding: 15px;
}

.main1 { 
  display:flex;
  margin:0 auto;
}

a img:hover {
    color: #fff;
}

  </style>
  <body>

<div class="container">
  <a href="primero.php" class="btn btn-info" role="button">Inicio Web</a>
  <a href="#" class="btn btn-info" role="button">Admisión 2021</a>
  <a href="#" class="btn btn-info" role="button">Programas de Estudios</a>
  <a href="#" class="btn btn-info" role="button">Filiales</a>
  <a href="#" class="btn btn-info" role="button">Directorio</a>
  <a href="#" class="btn btn-info" role="button">Secretaria</a>
  <a href="notas.php" class="btn btn-info" role="button">Ingreso de Notas</a>
  <a href="#" class="btn btn-info" role="button">Consultas Base Datos</a>
 

  
<form action="primero.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombres</label>
      <input type="text" class="form-control" name="nom" placeholder="Nombres"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Apellidos</label>
      <input type="text" class="form-control" name="apel" placeholder="Apellidos" required>
    </div>
    <div class="col-md-4 mb-3">
    

 Seleccione el curso:
    <select class="custom-select my-1 mr-sm-2" name="codigocurso">
       <option selected>Programas</option>
      <option value="Administración de Redes y Comunicaciones">Administración de Redes y Comunicaciones</option>
<option value="Administración de Empresas">Administración de Empresas</option>
    <option value="Mecatrónica Automotriz">Mecatrónica Automotriz</option>
    <option value="Electricidad Indústrial">Electricidad Indústrial</option>


    </select>
    <br>



<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Capacidad I</label>
      <input type="text" class="form-control" name="nota1" placeholder="Ingrese Nota" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Capacidad II</label>
      <input type="text" class="form-control" name="nota2" placeholder="Ingrese Nota" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Capacidad III</label>
      <input type="text" class="form-control" name="nota3" placeholder="Ingrese Nota" required>
    </div>
  </div>




<div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Unidades Didácticas</label>
  <select class="custom-select my-1 mr-sm-2" name="uni">
    <option selected>Unidades</option>
    <option value="Trasmisión de Datos">Trasmisión de Datos</option>
    <option value="Fundamentos de Administración de Redes">Fundamentos de Administración de Redes</option>
    <option value="Taller de Base de Datos">Taller de Base de Datos</option>
    <option value="Arquitectura de Hardware">Arquitectura de Hardware</option>
  </select>









<div class="col-md-3 mb-3">
   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Semestres Académicos</label>
  <select class="custom-select my-1 mr-sm-2" name="sem">
    <option selected>Semestre</option>
    <option value="I">Semestre I</option>
    <option value="II">Semestre II</option>
    <option value="III">Semestre III</option>
    <option value="IV">Semestre IV</option>
    <option value="V">Semestre V</option>
    <option value="VI">Semestre VI</option>
  </select>
    </div>
 
  </div>







  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
       Aceptar que los Datos son Correctos
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Almacenar</button>
</form>




</div>




<footer>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h6 class="text-muted lead">INFORMACIÓN:</h6>
            <h6 class="text-muted">
            Av. Independencia S/N - Ayacucho<br>
            Frente al Colegio "Mariscal Cáceres"<br>
            Celular: 966685408 – 966653589<br>
            </h6>
        </div>
        <div class="col-xs-12 col-md-6">
        <div class="pull-right">
        <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
              <div class="redes-footer">
                  <a href="https://www.facebook.com/"><img src="f.png"></a>
                  <a href="https://twitter.com/"><img src="t.png"></a>
                  <a href="https://www.youtube.com/"><img src="y.png"></a>
              </div>
        </div>
        <div class="row"> <p class="text-muted small text-right">Peter GÓMEZ CARRASCO, Server Web @2020.<br> Todos los derechos reservados.</p></div>
    </div>
  </div>  
</div>
</footer>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>