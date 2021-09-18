
  <html>
    <head>
    <link href="2.css" rel="stylesheet" type="text/css">

    </head>
    <body background="2.jpg">   
<br/>
<div> 
<?php
//Texto de inicio de la pagina

echo "<h2>Seguimiento de pedido</h2>";
?>

<?php
// se delcaran las variables
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$CC_TI = $_POST['CC_TI'];
$N_Identificacion = $_POST['N_Identificacion'];
$Correo = $_POST['Correo'];
$Pais = $_POST['Pais'];
$Ciudad = $_POST['Ciudad'];
$Direccion = $_POST['Direccion'];
$tennis = $_POST ["tennis"];
$consola = $_POST ["consola"];
$tele = $_POST ["tele"];
$porta = $_POST ["porta"];
$cel = $_POST ["cel"];
$ropa = $_POST ["ropa"];
$dinero = $_POST ["dinero"];

//post-metodo
//echo genera texto en la pagina
//br salto de pagina
//$ indica la variable
//mediante el codigo echo ,llamamos en la pagina "Info" la informacion que proporciono el cliente

// aqui decimos que coloque la fecha por defecto de America pero espesificamente Bogotá
// atambien se encuentra el if para marcar en que tiempo llega el pedido
date_default_timezone_set("America/Bogota");
  $fecha=date('d-m-Y');

  if ($Ciudad == 'Bogota'){
    $fecha2=date('d-m-Y',strtotime($fecha."+ 1 week"));
     } elseif ($Ciudad == 'Cali'){
      $fecha2=date('d-m-Y',strtotime($fecha."+ 2 week"));
    } elseif ($Ciudad == 'Barranquilla'){
      $fecha2=date('d-m-Y',strtotime($fecha."+ 2 week"));
     }elseif ($Ciudad == 'Medellin'){
      $fecha2=date('d-m-Y',strtotime($fecha."+ 2 week"));
    }elseif ($Ciudad == 'Seleccione'){
      $fecha2=date('d-m-Y',strtotime($fecha."+ 2 week"));
    }else {
      $fecha2=date('d-m-Y',strtotime($fecha."+ 4 week"));
    }

    $fecha3=date('d-m-Y',strtotime($fecha2."+ 1 day"));

    if ($fecha==$fecha3  ){
      echo "<script> alert('Gracias por responder nuestra encuesta, disfrute su descuento!!!');
        
      </script>";
      }else{
        echo '';
      }
    
//muestra los resultados del formulario

echo "El nombre del cliente es: $Nombre <br>";
echo "El apellido del cliente es: $Apellido <br>";
echo "El tipo de documento es: $CC_TI <br>";
echo "El numero de identificacion es: $N_Identificacion <br>";
echo "El Correo electronico del cliente es: $Correo <br>";
echo "La fecha del pedido es: ". $fecha ."<br>";
echo "La fecha maxima de entrega del pedido es: ". $fecha2 ."<br>";
echo "El pais del pedido es: $Pais <br>";
echo "La ciudad es: $Ciudad <br>";
echo "Su direccion es: $Direccion <br>";
echo "Para pagar uso: $dinero <br>";

$rel=array($tennis, $consola, $tele, $porta, $cel, $ropa);
                echo 'El valor total es el siguiente <br/><br/>';
                echo "Total = $" . array_sum($rel) . "\n <br/><br/>";
?>
<br>
<strong>Local fisico</strong>
<br>


<?php

//Aqui hacemos el uso de los condicionales ,con los cuales depende de la respuesta del usuario,le arrojara un resultado
if ($Ciudad == 'Bogota'){
echo " cuenta con un punto fisco ,para atender sus peticiones ";
 } elseif ($Ciudad == 'Cali'){
  echo "cuenta con un punto fisco ,para atender sus peticiones";
} elseif ($Ciudad == 'Barranquilla'){
echo "cuenta con un punto fisco ,para atender sus peticiones";
 }elseif ($Ciudad == 'Medellin'){
echo "cuenta con un punto fisco ,para atender sus peticiones";
}elseif ($Ciudad == 'Seleccione'){
echo "Por favor seleccione un punto fisico";
}else {
  echo "Su ciudad no cuenta con un punto de Atencion al cliente por lo cual el pedido se demorara un poco";
}
?>
<br>
<br>
<!--Texto en negrilla-->
<strong>Eres apto para hacer la solicitud?</strong><br>
<?php
//Uso de condicionales para determinar si el usuario es apto o no para realizar una queja ,segun su tipo de documento
if ($CC_TI == 'Cedula'){
    echo "Puedes continuar con el proceso";
}elseif ($CC_TI == 'ti'){
    echo "No eres apto para realizar una solicitud sin supervision de un adulto";
}else {
    echo "No puedes continuar con el proceso, porque no seleccionaste ningun campo";
  }
?>
<br>
<br>
<!--Texto en negrilla-->
<strong>Tiendas disponibles a nivel nacional</strong>
<br>
<?php
//Uso de condicionales para determinar el numero de tiendas disponibles en el pais seleccionado
if ($Pais == 'Colombia'){
    echo "Colombia cuenta con 52 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Argentina'){
    echo "Argentina cuenta con 78 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Chile'){
    echo "Chile cuenta con 62 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Peru'){
    echo "Peru cuenta con 31 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}else {
    echo "No se encontraron  tiendas disponibles";
  }

  
?>
<p> "Si su pedido no llega en el tiempo establecido por favor dele clic en reportar, de lo contrario seleccione recibido y recuerde subir una foto del pedido con su firma."</p>
<p> Si algun dato quedo mal, seleccione cancelar y vuelva allenar los datos, en adicion a esto tiene otros botones para que pueda desplazarse <p>

<br><center>
        <button type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=573012587069&text=Hola, Nececito reportar mi pedido'"> reportar</button> 
        <button type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=573012587069&text=Hola, ya recibi mi pedido y adjuntare foto '"> Recibido </button>
        <button type="submit" onclick="location.href='http://localhost:81/Formularios/0080.php'"> Cancelar </button>
        <button type="submit" onclick="location.href='http://localhost:81/0080_PHP/Proyecto/Banco.php'"> Ir al banco </button>
        <button type="submit" onclick="location.href='http://localhost:81/Formularios/HOME/Home.html'"> Ir a la tienda </button>
        <button type="submit" onclick="location.href='http://localhost:81/0080_PHP/Registro.php'"> Reistrese o inice sesion </button>
      </center>
</div>
</body> 
  </html>