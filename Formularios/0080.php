<html>
<head>
<title>
    Orden de compra
</title>
<link href="1.css" rel="stylesheet" type="text/css">
</head>
<!--La etiqueta background nos permite establecer un fondo en nuestra pagina-->
<body background="2.jpg">

<!--El type es el tipo de datos,name es el nombre de  la variable -->
<!--El metodo post envia los datos de forma anonima (el usuario no ve la informacion) -->
<!--Center-centrar-->
<!--Form-Formulario-->
<!--name-nombre-->
<!--Type-Tipo-->
<!--Input-Aporte-->
<!--action-accion-->
<!--body-Cuerpo-->
<!--Title-Titulo-->
<!--head-cabeza-->
<!--background-antecedentes-Fondo-->

<center>
<!--Por medio de la etiqueta img src,se inserta una imagen que es representada mediante el logo de la empresa Falabella-->
<img src="1.png"  >
</center>
<center><h1>Registro de compra</h1></center>
<form action="Info.php"  method="post">
<p>Nombre:<input type="text" name="Nombre" /></p>
<p>Apellido:<input type="text" name="Apellido" /></p>

<!--Se hace el uso de la etiqueta label para formar una lista ,para facilitar al usuario en diligenciar las opciones-->
<a >CC_TI:</a>
<select name="CC_TI">
<option  value="Seleccione">Seleccione</option>
<option  value="ti">Tarjeta de identidad</option>
<option  value="Cedula">Cedula</option>
</select>

<p>N_Identificacion:<input type="text" name="N_Identificacion" /></p>
<p>Correo:<input type="text" name="Correo" /></p>


    <!--Se hace el uso de la etiqueta label para formar una lista ,para facilitar al usuario en diligenciar las opciones-->

<a >Pais:</a>
<select name="Pais">
<option  value="Seleccione">Seleccione</option>
<option  value="Colombia">Colombia</option>
<option  value="Argentina">Argentina</option>
<option  value="Chile">Chile</option>
<option  value="Peru">Peru</option>
</select>

<br>
<br>
<!--Se hace el uso de la etiqueta label para formar una lista ,para facilitar al usuario en diligenciar las opciones-->
<!--En las siguines lineas de codigo se presentan todas y cada una de las capitales del pais-->

<a >Ciudad:</a>
<select name="Ciudad">
<option  value="Seleccione">Seleccione</option>
<option  value="Bogota">Bogota</option>
<option  value="Cali">Cali</option>
<option  value="Cartagena">Cartagena</option>
<option  value="Barranquilla">Barranquilla</option>
<option  value="Medellin">Medellin</option>
<option  value="Leticia">Leticia</option>
<option  value="Arauca">Arauca</option>
<option  value="Barranquilla">Tunja</option>
<option  value="Bogota">Manizales</option>
<option  value="Cali">Florencia</option>
<option  value="Cartagena">Yopal</option>
<option  value="Barranquilla">Popayan</option>
<option  value="Valledupar">Valledupar</option>
<option  value="Quibdo">Quibdo</option>
<option  value="Monteria">Monteria</option>
<option  value="Inirida">Inirida</option>
<option  value="San Jose del Guaviare">San Jose del Guaviare</option>
<option  value="Neiva">Neiva</option>
<option  value="Rioacha">Rioacha</option>
<option  value="Santa Marta">Santa Marta</option>
<option  value="Villavicencio">Villavicencio</option>
<option  value="San Juan de Pasto">San Juan de Pasto</option>
<option  value="Pasto">Pasto</option>
<option  value="Cucuta">Cucuta</option>
<option  value="Mocoa">Mocoa</option>
<option  value="Pereira">Pereira</option>
<option  value="San Andres">San Andres</option>
<option  value="Bucaramanga">Bucaramanga</option>
<option  value="Sincelejo">Sincelejo</option>
<option  value="Ibague">Ibague</option>
<option  value="Mitu">Mitu</option>
<option  value="Puerto Carreño">Puerto Carreño</option>
</select>
<br/><br/>

<!--Ahora se haran todo lo relacionado con la compra-->

<a >Seleccione su tipo de tarjeta: </a> 


<select name="dinero">
    <option value = "ninguno"> Ninguno  </option>
    <option value = Mastercard > Mastercard</option>
    <option value = "Falabella"> Falabella</option>
    <option value = "VISA"> VISA</option>
    <option value = "NEQUI"> NEQUI</option>
    <option value = "DAVIPLATA"> DAVIPLATA</option>
</select><br/><br/>

        <a >Seleccione un par de tennis: </a> 

        <select name="tennis">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 155000 > Addidas = $155.000 </option>
            <option value = "167000"> Nike = $167.000 </option>
            <option value = "148000"> Puma = $148.000 </option>
        </select><br/><br/>

        <a > Seleccione una consola: </a> 

        <select name="consola">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 3049000> Xbox series x = $3.049.000 </option>
            <option value = "3584900"> Play station 5 = $3.584.900 </option>
            <option value = "1749000"> Nintendo Switch = $1.749.000 </option>
        </select><br/><br/>

        <a  > Seleccione un televisor: </a>   

        <select name="tele">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 899900> Challenger = $899.900 </option>
            <option value = "1899900"> LG = $1.899.900 </option>
            <option value = "1799900"> Samsung = $1.799.900 </option>
        </select><br/><br/>

        <a  >Seleccione un portatil: </a>   

        <select name="porta">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 1159000> HP = $1.159.000 </option>
            <option value = "3523530"> Apple = $3.523.530 </option>
            <option value = "2199900"> Lenovo = $2.199.900 </option>
        </select><br/><br/>

        <a  > Seleccione un celular: </a>   

        <select name="cel">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 2159000> Samsung = $2.159.000 </option>
            <option value = "5663990"> Iphone = $5.663.990 </option>
            <option value = "1729900"> Huawei = $1.729.900 </option>
        </select><br/><br/>

        <a  > Seleccione un conjunto de ropa: </a>   

        <select name="ropa">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 150000> Facha.Club = $150.000 </option>
            <option value = "200990"> ELA = $200.990 </option>
            <option value = "190900"> Federation = $190.900 </option>
        </select><br/><br/>


<p>Direccion:<input type="text" name="Direccion" /></p>
<center><input type="submit"  value="Enviar"></center>

</form>

<!--En las lineas anteriores se declararo ,la informacion que queremos que el cliente nos proporcione -->

        <!--boton -->



</body>
</html>



