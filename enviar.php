<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<?php 
    /*
      //Obtenemos valores input formulario
      $nombre = $_POST['name'];
      $email = $_POST['email'];
      $numero = $_POST['number'];   
      $mensaje = $_POST['message'];
      $para = 'info@transportes-mc.com';

    
      //Creamos cabecera.
      $headers =  'MIME-Version: 1.0' . "\r\n"; 
      $headers .= 'El usuario ' . " " . $email ."te mando un mensaje". "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $numero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

  
*/

    
 
 

     


 ?>
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
  <title>übermensch | agencia digital</title>
  <meta name="description" content="">  
  <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
  <script src="js/modernizr.js"></script>
  <script src="js/pace.min.js"></script>

   <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
  <link rel="icon" href="ico.ico" type="image/x-icon">

</head>

<body id="top">

 




   <!-- about
   ================================================== -->
   <section id="about" style="background-color:black">

    <div class="row about-wrap">
      <div class="col-full">

         

        <div class="intro">
            
          <p class="lead animate-this" id="description" style="margin-top:30%">
             <?php 
    /*

          if (mail($para, $numero, $msjCorreo, $headers)) {
         echo 
        "<p style='margin-top:25%;text-align:center;color:white;font-size:155%;font-family: 'Lato', Arial, sans-serif'>Su mensaje se envio correctamente ! <br> En breve le enviaremos una respuesta a su consulta.</p>".
         header('Refresh: 6; URL=http://www.transportes-mc.com/');;
         
    } else {
         echo 
       "<p style='margin-top:25%;text-align:center;color:white;font-size:155%;font-family: 'Lato', Arial, sans-serif'>Ocurrio un error con su mensaje <br> Intente nuevamente</p>".
        header('Refresh: 6; URL=http://www.transportes-mc.com/');;
          
    }

  
*/

     ?>

 
            

</p>  




      
        <p style="text-align:center;font-size:14px;color:grey">En 5 segundos , se le auto redireccionara a la pagina principal.</p>
  


        </div>   



      </div> <!-- end col-full  -->
    </div> <!-- end about-wrap  -->

   </section> <!-- end about -->






  

      <div id="go-top">
       <a class="smoothscroll" title="Back to Top" href="#top">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
       </a>
    </div>    
   </footer>

   <div id="preloader"> 
      <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="writingmachine.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
   
     writingMachine("#texto1",100,100,true)
    writingMachine("#texto2",200,100,false)
    writingMachine("#texto3",200,100,true)
    
  });
</script>
<script>function elementScrolled(elem)
{
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();
  var elemTop = $(elem).offset().top;
  return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
}
var textos={}
function escrever(tag,max,min,counter) {
  counter===undefined?counter=0:counter=counter
  var rand = Math.round(Math.random() * (max - min)) + min;
  setTimeout(function() {
      $(tag).text($(tag).text()+textos[tag+"text"][counter])
      if(counter<textos[tag+"text"].length -1&&textos[tag+"value"]===true){
        escrever(tag,max,min,counter+1);  
      }
  }, rand);
}
function writingMachine(tag,max,min,once){
  var escrevendo=null
  textos[tag+"text"]=$(tag).text().split("")
  $(tag).text("")
  textos[tag+"value"]=false
  if(elementScrolled(tag)) {
    if(!textos[tag+"value"]){
      escrevendo=escrever(tag,max,min)
      //intervalo aqui
    }
    textos[tag+"value"]=true
  }else{
    escrevendo=null;
    textos[tag+"value"]=false
  }
  $(window).scroll(function(){
    if(elementScrolled(tag)) {
      if(!textos[tag+"value"]){
        $(tag).text("")
        escrevendo=escrever(tag,max,min)
      }
      textos[tag+"value"]=true
    }else{
      if(once!==true){
        escrevendo=null;
        textos[tag+"value"]=false
      }
    }
  });
}</script>


</body>

</html>