
<htmml lang="pt-br" ng-app>
    <head> 
        <title> Index </title>  
        <meta charset="utf-8">  
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> 
   
       <link rel="stylesheet" type="text/css" media="screen and (min-width: 1000px)" href="cs/telaG.css">    
       <style>
        
        .menu{
 list-style:none; 
 border:1px, 1px, 1px, 1px solid #ADD8E6; 
 margin-top: 0;
 width: 100%;
 min-width: 100%;
 min-height: 6%;
 height: 6%;
 background:#00BFFF;
 text-align: center;

}
.menu li{
position:relative; 
float:left; 
border-right:1px solid #c0c0c0; 
}
.menu li a{color:#333; text-decoration:none; padding:5px 10px; display:block;}
 
.menu li a:hover{
background:#1E90FF; 
color:#fff; 
-moz-box-shadow:0 3px 10px 0 #CCC; 
-webkit-box-shadow:0 3px 10px 0 #ccc; 
text-shadow:0px 0px 5px #fff; 
}
.menu li  ul{
position:absolute; 
top: 0px; 
left:0;
background-color:#fff; 
display:none;
}


* {margin: 0; padding: 0;}
    body {background: }
    a,img {border: none;}
    .trs {-webkit-transition:all ease-out 0.5s;
      -moz-transition:all ease-out 0.5s;
      -o-transition:all ease-out 0.5s;
      -ms-transition:all ease-out 0.5s;
      transition:all ease-out 0.5s;}
    
    #slider {position: relative; z-index: 1;}
    #slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
    .ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
    
    /*controladores*/
    span {background: #0190EE; cursor: pointer; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
    .next {right: 10px;}
    .next:before,.next:after {left: 21px;}
    .next:before {
      -webkit-transform: rotate(-42deg);
      top: 5px;
    }
    .next:after {
      -webkit-transform: rotate(-132deg);
      top: 19px;
    }
    .next:before,.next:after,.prev:before,.prev:after {content: "";
      height: 20px;
      background: #fff;
      width: 5px;
      position: absolute;
    }

    .prev {left: 10px;}
    .prev:before,.prev:after {left: 18px;}
    .prev:before {
      -webkit-transform: rotate(42deg);
      top: 5px;
    }
    .prev:after {
      -webkit-transform: rotate(132deg);
      top: 19px;
    }


    figure:hover span {opacity: 0.76;filter:alpha(opacity=76);}

    figure {
      max-width: 100%;
      min-width: 100%;
      height: 354px;
      position: relative;
      overflow: hidden;
      margin: 0% auto;
    }

    figcaption {padding-left: 20px;color: #fff; font-family: "Kaushan Script","Lato","arial"; font-size: 22px; background: rgba(1, 144, 238, 0.76); width: 100%; position: absolute; bottom: 0; left: 0; line-height: 55px; height: 55px; z-index: 5}
   
   div{
    position: relative;
   margin-top: 0;;
    padding: 0;
   }  

   #sli{
    margin-top: -2%;
    position: relative;
   }   
   #me{
    position: relative;
    padding: 0;
   }

    #SunM{
    background-color:#1E90FF;
    width: 100%;
    height: 5%;
    min-height: 5%;
    text-align: center;
    font-size: 5%;
    margin-top: 0%;
  }
  h4{
    color: red;
    margin-top: ;
    position: relative;
    font-size: 40%;
  }
  h1{
    margin-left: 10%;
    margin-top: 4%;
  }
  #h1{
    color: #1E90FF;
  }
  .im{
    width: 100%;
    height: 90%;
    border-radius: 5%;
  }
  .im2{
    width: 70%;
    height: 90%;
    margin-left: 10%;
    border-radius: 5%;
  }
  .im3{
    width: 55%;
    height: 65%
    border-radius: 5%;
    margin-left: 0%;
  }
  table{
  
    vertical-align: center;
    margin-left: 30%;
    margin-top: 6%;
    max-width: 100%;


  }
  tr, td{
    padding: 4%;
    text-align: center;
    max-width: 100%;
    min-width: 100%;
  }

  #rodape{
    background-color: #1E90FF;
    width: 100%;
    height: 40%;
    max-height: 40%;
    text-align: center; 
     margin-top: 40%;
    position: relative;
  }

  .img{
    border-radius: 100%;
    width:3%; 
    height:20%;
    margin-top: 2%;
    
  }
  h3{text-align: center; font-size: 20px; margin-top: 3%;}

  h2{
    padding-top: 4px;
    color: #ffff;
    text-align: center;
  }
  #h3{
    color: white;
    margin-top: 0%;
    text-align: center;
  }
  #corp{
   

    max-width: 100%;

  }
  #co{
    width: 100%;
    max-width: 100%;
    
  }
    
 </style>
  </style>
    </head>
    <body>
      <div id="me">

     <ul class="menu">
        <li><a href="inde01.php">Home</a></li>
            <li><a href="clinica.php">A Clinica</a></li>
        <li><a href="Tratamentos.php">Tratamentos</a></li>  
        <li><a href="Equipe.php">Equipe</a></li>
         <li><a href="agendar.php">Agendar</a></li>
           <li><a href="form-login.php">Adm</a></li>
                 
      </ul>
    </div>
    <div id="sli">
      <figure>
      

    <span class="trs next"></span>
    <span class="trs prev"></span>

    <div id="slider">
      <a href="#" class="trs"><img src="imagem1.jpg" alt="Legenda da imagem 1" /></a>
      <a href="#" class="trs"><img src="imagem2.jpg" alt="Legenda da imagem 2" /></a>   
    </div>

    <figcaption></figcaption>
  </figure>

  <script type="text/javascript">
    function setaImagem(){
      var settings = {
        primeiraImg: function(){
          elemento = document.querySelector("#slider a:first-child");
          elemento.classList.add("ativo");
          this.legenda(elemento);
        },

        slide: function(){
          elemento = document.querySelector(".ativo");

          if(elemento.nextElementSibling){
            elemento.nextElementSibling.classList.add("ativo");
            settings.legenda(elemento.nextElementSibling);
            elemento.classList.remove("ativo");
          }else{
            elemento.classList.remove("ativo");
            settings.primeiraImg();
          }

        },

        proximo: function(){
          clearInterval(intervalo);
          elemento = document.querySelector(".ativo");
          
          if(elemento.nextElementSibling){
            elemento.nextElementSibling.classList.add("ativo");
            settings.legenda(elemento.nextElementSibling);
            elemento.classList.remove("ativo");
          }else{
            elemento.classList.remove("ativo");
            settings.primeiraImg();
          }
          intervalo = setInterval(settings.slide,4000);
        },

        anterior: function(){
          clearInterval(intervalo);
          elemento = document.querySelector(".ativo");
          
          if(elemento.previousElementSibling){
            elemento.previousElementSibling.classList.add("ativo");
            settings.legenda(elemento.previousElementSibling);
            elemento.classList.remove("ativo");
          }else{
            elemento.classList.remove("ativo");           
            elemento = document.querySelector("a:last-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
          }
          intervalo = setInterval(settings.slide,4000);
        },

        legenda: function(obj){
          var legenda = obj.querySelector("img").getAttribute("alt");
          document.querySelector("figcaption").innerHTML = legenda;
        }

      }


      //chama o slide
      settings.primeiraImg();

      //chama a legenda
      settings.legenda(elemento);

      //chama o slide à um determinado tempo
      var intervalo = setInterval(settings.slide,4000);
      document.querySelector(".next").addEventListener("click",settings.proximo,false);
      document.querySelector(".prev").addEventListener("click",settings.anterior,false);

    }

    window.addEventListener("load",setaImagem,false);
  </script>
    </div>
    <DIV id="corp">
                        <div id="SunM">

                        <h3 id="h3">ATENDIMENTO ONLINE VIA WHATSAPP (00) X.XXX-XXXX</h3>  
                        <div id="co">
                                 <h1 id="h1">NOSSOS TRATAMENTOS!</h1>
                            <table align="center" id="corp">
                              <tr>
                                <td><img src="img/img1.jpg" class="im"></td>
                                <td><img src="img/img2.jpg" class="im2"></td>
                                <td><img src="img/img3.jpg" class="im3"></td>
                              </tr>
                              <tr>
                                <td>LIMPESA DENTARIA<br> 
                                E EXTRAÇÃO</td>
                                <td>ABTURAÇÃO E APLICAÇÃO<br>
                                 DE FLÚOR</td>
                                <td>IMPLANTAÇÃO APARELHO<br>
                                 E MANUNTENÇÃO</td>
                              </tr>
                            </table>

                            </div>
                             <img src=""> <img src=""> <img src="">
                  </div>
 </DIV>
<div id="rodape">
  <br>
  <br>
  <br>
  <h2>Nossas redes sociais!!!</h2>
      <div>
          <img src="img/fac.jpg" class="img">
          <img src="img/inst.jpg" class="img">
          <img src="img/imail.png" class="img">
      </div>      
</div>



    

      
    </body>
</htmml>