<!DOCTYPE html>
<html>
<head>
	<title>Agendados</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
</head>
<body>
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
    
      
          <div class="col-sm-6 col-sm-offset-3" id="div_conteudo"><!-- div onde será exibido o conteúdo-->
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

       $(document).ready(function(){// Ao carregar a página faça o conteudo abaixo
            $('.btn_carrega_conteudo').click(function(){// Ao clicar no elemento que contenha a classe .btn_carrega_conteudo faça...
                            
            var carrega_url = this.id; //Carregar url pegando os dados pelo ID
            carrega_url = carrega_url+'_listar.php'; //Carregar a url e o conteudo da página
                            
                $.ajax({ //Carregar a função ajax embutida no jQuery
                    url: carrega_url,
                               
                    //Variável DATA armazena o conteúdo da requisição
                    success: function(data){//Caso a requisição seja completada com sucesso faça...
                        $('#div_conteudo').html(data);// Incluir o conteúdo dentro da DIV
                    },
                               
                    beforeSend: function(){//Antes do envio do cabeçalho faça...
                        $('#loader').css({display:"block"});//carregar a imagem de load
                    },
                               
                    complete: function(){//Após o envio do cabeçalho faça...
                        $('#loader').css({display:"none"});//esconder a imagem de load
                    }
                });  
            });
        });
   	</script>

</body>
</html>