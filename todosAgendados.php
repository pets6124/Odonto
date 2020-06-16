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
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <style type="text/css">
        body{
            background-image: url('ig/bebe.jpg');
            text-align: center;
            margin-top: 0;
        }
        
        #text{
            text-align: center;
          
        }
        #pa{
            margin-top: -1%;
        }
    </style>
    </head>
 
    <body>        
        <ul id="pa">
        	<li><p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?></p> </li>
                   <li><a href="">Agendamentos</a></li>
            <li> <a href="logout.php">Sair</a></li>

        </ul>
        <div id="text">
        <h1>Todos Agendamentos</h1>
       <h3>Aqui fica todos os agendamentos do dia e do mês</h3><h3>Clique em <b id="b">Ver agendamestos</b> para ver todos os agendamento.</h3>
       </div>
       <div class="col-sm-offset-3 col-sm-6"><br>
                    
              <a class="btn btn-primary btn_carrega_conteudo" href='#' id="pagina">Ver agendamentos</a><br><br>
              <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
              ?>
                </div>
            
        </form>
    
      
          <div class="col-sm-6 col-sm-offset-3" id="div_conteudo">
              <img id="loader" src="loader.gif" style="display:none;margin: 0 auto;">
          </div>  
      
  

    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
    <script type="text/javascript">
        $('.data_formato').datetimepicker({
            weeKStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR",
            startDate: '-0d'
        });

       $(document).ready(function(){
            $('.btn_carrega_conteudo').click(function(){
                            
            var carrega_url = this.id; 
            carrega_url = carrega_url+'_listar.php'; 
                            
                $.ajax({ 
                    url: carrega_url,
                   
                    success: function(data){
                        $('#div_conteudo').html(data);
                    },
                               
                    beforeSend: function(){
                        $('#loader').css({display:"block"});
                    },
                               
                    complete: function(){
                        $('#loader').css({display:"none"});
                    }
                });  
            });
        });
    </script>
</body>
</html>
    </body>
</html>