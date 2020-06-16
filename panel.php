<?php
session_start();
 
require_once 'init.php';
require 'check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 		<link rel="stylesheet" href="css/painel.css" />
        <title>Painel Odontologia</title>
        <style type="text/css">
            #imgg{
                margin-left: ;
                height: 2%;
                min-width: 2%;
                min-height: 2%;
                width: 2%;
            }
        </style>
    </head>
 
    <body>        
        <ul id="pa">
        	<li><p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?></p> </li>
            
            <li><a href="todosAgendados.php">Agendamentos</a></li>
            <li><a href="logout.php">Sair</a></li>
            <a href="logout.php"><img src="img/logging.png"  id="imgg"></a>

        </ul>
        <h1>Painel do Adm</h1>
        
    </body>
</html>