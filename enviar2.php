<body>
<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino=$_POST[email]; 
$asunto="te invito a que visites";
$desde='From:' .$_POST['email2'];
$comentario= "
 $_POST[nombre] te invitó a visitar http//paginaqueestavisitando.com
";
mail($destino,$asunto,$comentario,$desde);
?>