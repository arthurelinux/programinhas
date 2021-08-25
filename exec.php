
<form method="POST" action="">
<select name="comando" required>
<option value=""></option>
<option value="Atualizar">Atualizar</option>
<option value="gnome-shell">Terminal</option>
</select>
<input type="submit" value="executar">

</form>

<?php
if(isset($_POST['comando'])){
    $comnado = $_POST['comando'];
}
switch ($comnado){
    case "Atualizar":
       
        $output = system(' ./executar.sh');
        $output2 = shell_exec("php composer-setup.php" );
        echo "<pre>".$output2."</pre>";
        break;
    case "gnome-shell":
        echo system('./composer.sh');
        break;
}

?>