<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="../../assets/css/modal1.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
<style>
      .w3-theme {color:#fff !important; background-color:#1b4f3e !important}
      .w3-text-theme {color:#1b4f3e !important}
      .w3-border-theme {border-color:#1b4f3e !important}

      .w3-hover-theme:hover {color:#fff !important; background-color:red !important}
      .w3-hover-text-theme:hover {color:red !important}
      .w3-hover-border-theme:hover {border-color:red !important}

      .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('../../images/pageLoader.gif') 50% 50%  no-repeat rgb(255,255,255);
            background-size: 25%;
            opacity: .8;
        }
        body {
            line-height: 2.15em;
          }
          
    </style>
    <script>
        function myFunction() {
          var x = document.getElementById("demo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else { 
            x.className = x.className.replace(" w3-show", "");
          }
        }
    </script>
        <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>
<!-- Header -->
<div class="w3-bar w3-card w3-top w3-theme " >
    
    <a href="#"  class="w3-bar-item  " style="color: #fff; text-decoration: none;" ><b>Boudin</b></a>
    <a href="estudiante_home.php"  class="w3-bar-item w3-hide-small" style="color: #fff; text-decoration: none;">Inicio</a>
    <a href="Estu-actividades.php"  class="w3-bar-item w3-hide-small" style="color: #fff; text-decoration: none;">Actividades</a>
    <a href="foro.php"  class="w3-bar-item w3-hide-small " style="color: #fff; text-decoration: none;">Foro</a>
    <a onclick="document.getElementById('id01').style.display='block'"  class="w3-bar-item w3-hide-small w3-right w3-hover-theme"  style="text-decoration: none; color: inherit; cursor: pointer;">Cerrar sesión <i class="fa fa-sign-in"></i></a>
    <a href="javascript:void(0)" class="w3-bar-item w3-right w3-hide-large w3-hide-large w3-card" style=" text-decoration: none; color: #fff; " onclick="myFunction()">&#9776;</a>

</div>
<div id="demo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium">
  <br><br>
    <a href="estudiante_home.php"  class="w3-bar-item w3-button" style="color: #000000;">Inicio</a>
    <a href="Estu-actividades.php"  class="w3-bar-item w3-button" style="color: #000000;">Actividades</a>
    <a href="foro.php"  class="w3-bar-item w3-button" style="color: #000000;">Foro</a>
    <a onclick="document.getElementById('id01').style.display='block'"  class="w3-bar-item w3-button"  style="text-decoration: none; color: inherit;">Cerrar sesión <i class="fa fa-sign-in"></i></a>
</div>
<br>
<div class="loader"></div>

<div id="id01" class="modal" >
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content " action="/action_page.php" style="border-radius: 10px;">
    <div class="container2" >
      <h1>Cerrar sesión</h1>
      <p>¿Está seguro de que desea cerrar su sesión?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
        <a href="../../controladores/login/logout.php"   style="text-decoration: none; color: white;" class="deletebtn">Aceptar</a>
      </div>
    </div>
  </form>
</div>

<script src="../../assets/js/modal1.js"></script>