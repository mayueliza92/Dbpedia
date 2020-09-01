<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Juega y Aprende</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <?php
        define("JSONlocal","../js/presidentes.json");
                $data = file_get_contents(JSONlocal);
                $items = json_decode($data, true);
                $listaItems = $items["presidentes"];  
        ?>
        <script type="text/javascript">

            function setSrc(id, src){             
                var element = document.getElementById(id);             
                element.src = src;         
            } 

            function validar(){
                
                var id="main-image"
                var cod = document.getElementById("presidente").value;
                var src= document.getElementById(id).src;
                miArray=[cod,src];
                
                
               
              
               //return miArray;
            }
        </script>
        <script>
      $(function(){
        $('#btnEnviar').click(function(){
          $('#button1').show();
          $('#button2').show();
        });
        $('#hide').click(function(){
	      $('#button').hide();
        });
      })
    </script>
    </head>
    <link rel="stylesheet" href="../css/styles/estilo.css" type="text/css" />
    <link rel="stylesheet" href="../css/styles/estilo2.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- <script type="text/javascript" src="../js/leerJSON.js"></script>
    Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    -->
    <!-- Optional theme 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    -->
    <!-- Latest compiled and minified JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->
    <body>

        <div id="pagina" class="wrapper col1">
            <!--############################   Header   ##############################-->
            <div id="header" class="clear">
                <div id="header1" ><h2>a</h2></div>
                <div id="header2" >
                    <h1>
                        <a href="../html/index.php"> Presidentes del Ecuador</a>
                    </h1>
                </div>
                <div id="header3"><h2>r</h2></div>
            </div>
            <!--############################   Contenido   ###########################-->
        
            <div id="contenido" class="thumbnail">
                <div id="parte1" class="container1">
                    <div id="seleccion" class="form-group">
                     <!-- <form id="form1" name="form1" method="POST" action="index.php" target="_blank" >-->
                      <!--     <form id="form1" name="form1" method="POST" action="index.php" target="_blank" >

                           --> 
                          
                             <br><label>Escoja al Presidente: </label> 
                          
                              <select name="presidente" class="form-control" id="presidente" required>
                          
                                <option value="" selected>Seleccione  </option>
                                <?php
                                    //bucle para recorrer los elementos del array
                                   
                                    //for ($i = 0; $i<count($listaItems); $i++){  
                                   
                                   for ($i = 0; $i<=10; $i++){
                                ?>
                           
                                <?php
                                    echo '<option value="' . $i . '">' . $listaItems[$i]["itemLabel"] . '</option>';
                                ?>
                                <?php 
                                    } //cerramos bucle
                                ?>
                          
                              </select>
                              <br>
                              <div id="galeria_principal">
                                  <img id="main-image" src="../css/imagen/presidente.png">
                              </div>
                              <br>

                          <input type="submit" id="btnEnviar" name="btnEnviar" value="Verificar">
                          
                             
                           
                         <!-- </form> -->
                   
                    </div>
                </div>

                
              
                <div id="parte2" class="container1">
                 <br>
                    
                    <div class="content-all">
                        <div class="content-carrousel">
                          <!--    <form>
                            <?php
                            //bucle para recorrer los elementos del array
                            for ($i = 0; $i<10; $i++){
                        ?>
                            
                        <?php
                            //echo '<figure><input type="submit" onclick="miFuncion()" value="seleccionar"><a href="'.$listaItems[$i]['pic'].'"><img src="'.$listaItems[$i]['pic'].'"></a></input></figure>'
                                $t= $listaItems[$i]['pic'];
                            echo '<figure><img src="'.$t.'" ></figure>'
                            ?>
                        <?php 
                            } //cerramos bucle
                        ?>  -->
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Rafael%20Correa%2C%20Ecuador%20expresident.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Rosalia%20arteaga.png" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Andr%C3%A9s%20F%20C%C3%B3rdova.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Palacio%20gonzalez.png" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Lucio%20Guti%C3%A9rrez.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Programa%20Radial%20Testimonio%20Pol%C3%ADtico%20en%20la%20Radio%20de%20la%20Asamblea%20Nacional%20invitado%20el%20Arq.%20Sixto%20Dur%C3%A1n%20Ballen%20ex%20Presidente%20de%20la%20Rep%C3%BAblica%20del%20Ecuador%20%285984332423%29.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Eloy%20Alfaro2.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Abdala%20Bucaram%20%28cropped%29.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Gabriel%20Garc%C3%ADa%20Moreno.jpg" onclick="setSrc('main-image', this.src)"></figure>
                        <figure><img src="http://commons.wikimedia.org/wiki/Special:FilePath/Rafael%20Correa%2C%20Ecuador%20expresident.jpg" onclick="setSrc('main-image', this.src)"></figure>

                    </form>
                        </div>
                    </div>

                   

                </div>
                <div>

                </div>

            </div>
            <div id="informacion">
                <div id="res">
                
                </div>
                <div id="res2">
                <input type="submit" id="button1" name="button1" value="Padres" style="display:none">
                <input type="submit" id="button2" name="button1" value="Espos@" style="display:none">
                            <div id="res3">
                            </div>


   
    
    
                </div>
               

            </div>
            <div id="fooder"><h2>f</h2></div>
        </div>
        
        <script type="text/javascript" src="../js/presidentes.json"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
        <script src="presidentes.js"></script>
        <script src="padres.js"></script>
        <script src="esposa.js"></script>
    </body>
</html>
