	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" href="./css/estilos.css">
</head>
&nbsp;
<body>
<div  id="dv2"> 
    <fieldset id="fingre1" style='background-color:#28D2DA;'>
     <legend>&nbsp;Login&nbsp;</legend>
     <section id="contenedor">
		 <form id = "ingre" action="/ing_web/include/logear.php" method="post" accept-charset="utf-8">

			<table width="450" rules ="none">
              <tr style="border: hidden;background-color:#28D2DA;"><td>Usuario</td><td><input name="usuario" type="text"  required></td></tr>
              <tr style="border: hidden;background-color:#28D2DA;"><td>Password</td><td><input name="password" type="text" maxlength="12" required></td></tr>      
            </table>
      
        <br/>    
        <div align="center"> 
                 <tr><td><input type="submit" class="boton" id="boton" value="Ingresar" > </td></tr>            
        </div> 
         </form>
        <br/> 
         <div align="center"> 
         <tr><td><a href="/ing_web/include/registrar.php" title="Registro">Registrarse</a>  </td></tr> 
         </div>
	</section>
   </fieldset>
</div> 
	</body>
</html>