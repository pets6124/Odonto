<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <title>Agendamento Odontologico</title>
  <body>
  	<div class="container-fluid">
      <div class="jumbotron"> 
    	   <h1 class="text-center">Agendamento</h1><br> 
    </div><br>
    	<form class="form-horizontal" action="processa.php" method="POST"> 
  			<div class="col-sm-3 col-sm-offset-3">         
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required> 
        </div>
        <div class="col-sm-3"> 
          <label>Telefone</label>         
          <input class="form-control" type="text" name="telefone" placeholder="Digite seu telefone" required>
        </div>
        <div class="col-sm-6 col-sm-offset-3">	
    			<label>Serviços</label>
      			<select name="servicos" class="form-control">
                <option value="" selected=>Selecione um serviço</option>
                <option>Abturação -- R$60,00</option>
                <option>Extração -- R$50,00</option> 
                <option>Linpesa -- R$50,00</option> 
                <option>Reparo -- R$25,00</option> 
                <option>Canal -- R$90,00</option> 
                <option>Aparelho -- R$ 140,00</option> 
                <option>Outro tratamento -- R$--,--</option>
                    
            </select>  			
  			</div>
  			<div class="col-sm-6 col-sm-offset-3">
    			<label>Data e hora</label>
    				<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
    					<input class="form-control" type="text" name="data" placeholder="Data do serviço">
    					<span class="input-group-addon">
    						<span class="glyphicon glyphicon-th"></span>
    					</span>
					  </div> 
  			</div>
  			
    			<div class="col-sm-offset-3 col-sm-6"><br>
      				<button type="submit" class="btn btn-success">Agendar</button>
              
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
