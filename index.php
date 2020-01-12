<!DOCTYPE HTML>
<html>
   <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8" />
        <title>Mi primera pagina con php</title>
      
   </head>
   <body>
       <h1>Hola Mundo</h1>


       <form name = "form1" method="POST" action="index.php">
            
          numero 1: <input type="text" name="txtnumero1">
          <br>
          numero 2: <input type="text" name="txtnumero2">
          <br>
          <input type="submit" name="Calcular" value="Calcular">

       </form>

       <?php 

       if(isset($_POST["Calcular"])){

         $valor3 = $_POST["txtnumero1"];
         $valor4 = $_POST["txtnumero2"];

         if($valor3 == "" || $valor4 ==""){
            echo "Debes deligenciar todos los campos";
            exit;
         }

         echo "<br>";
         echo $valor3 . "<br>";
         echo $valor4 . "<br>";
         echo "<br>";
         
         
         echo "hola esto es php";
       $numero1 = $valor3;
       $numero2 = $valor4;

       $suma = $numero1 + $numero2;
       $resta = $numero1 - $numero2;
       $multiplicacion = $numero1 * $numero2;
       $division = $numero1 / $numero2;
       $residuo = $numero1 % $numero2;

       echo "<br> la suma de " . $numero1 . " y " . $numero2 . " = " . $suma;
       echo "<br> la resta de " . $numero1 . " y " . $numero2 . " = " . $resta;
       echo "<br> la multiplicacion de " . $numero1 . " y " . $numero2 . " = " . $multiplicacion;
       echo "<br> la division de " . $numero1 . " y " . $numero2 . " = " . $division;
       echo "<br> el residuo de " . $numero1 . " y " . $numero2 . " = " . $residuo;


       /**
        * comentarios
        *con
        *varias
        *lineas
        */

        /**
         * operadores logicos
         * y=&& o=||
         * cuando se usa y(&&) se debe tener en cuenta que
         * es verdadero cuando todos los criterios evaluados son verdaderos
         *
         * cuando se usa o(||) se debe tener en cuenta que es falsa cuando
         * todos los criterios evaluados son falsos 
         */

         if($numero1 > $numero2 && $numero1 > 0){
                
            echo "<br>la condicion es verdadera";
         }else{
            echo "<br>la condicionn es falsa";
         }


         if($suma > $resta || $suma > $multiplicacion){
            echo "<br>todavia sigo siendo verdadera";
         }else{
            echo "<br> yta soy falsa";
         }

         /**
          * operadores relacionales
          *> mayor que
          * < menor que
          * >= mayor o igual que
          *<= menor o igual que
          * = asignacion
          * == comparacion
          *! negacion
          * != diferente
          */

          $numero3 = 7;

          echo "<br>";

          if($numero1 > $numero2 && $numero1 > $numero3){
             echo " El mayor es " . $numero1;

          }elseif($numero2 > $numero1 && $numero2 > $numero3){
               echo " El mayor es " . $numero2;
          }else{
            echo " El mayor es " . $numero3;
          }

          echo "<br>";

          if(!(($numero3 % 2)== 0)){
             echo " El numero " . $numero3 . " es par";

          }else{
             echo " El numero " . $numero3 . " es impar ";
          }

          echo "<br>";

          /**
           * uso del switch
           * teniemdo en cuenta los colores del semaforo
           * realiza el algoritmo donde se indique
           * verde: debe decir avanzar
           * amarillo: avisar que debe detenerse
           * rojo: debe decir no avanzar
           **/
                     
           $colorSemaforo = "AmaRILLo";

           switch(strtolower(trim($colorSemaforo))){

               case "verde":
                  echo "semaforo es " . $colorSemaforo . ": Avanzar";
               break;
               
               
               case "amarillo":
                  echo "semaforo es " . $colorSemaforo . ": por favor Detnerse";
               break;

               case "rojo":
                  echo "semaforo es " . $colorSemaforo . ": Detenerse";
               break;

               default:
                 echo "Valor incorrecto";
            break;

           }
             
            echo "<br>";

            /**
             * ciclos
             * 
             * for - while - do while
             */

             //while
             /**
              * realizar un ejercicio que muestr los primeros
              * cinco numeros consecutivos
              */

             $i = 1;

             while($i <= 5){
                  echo $i . "<br>";
                  $i++;
             }

            echo "<br>";

            /**
             * do while
             * 
             * realizar un ejercicio que muestr los primeros
              * cinco numeros consecutivos
             */

             do{
               echo $i . "<br>";
               $i++;
             }while($i <= 5);

          

           /**
            * while
            *
            *tabla de multiplicar del 5
            **/

          

            $i = 1;
            $t = 5;

            while($i <=10){
               
               echo  $t. "x" . $i . "=" . $t * $i . "<br>";
               $i++;
            }

            echo "<br>";

            /**
             * do while
             * tabla de multiplicar del 5
             */

            $i = 1;
            $t = 5;


            do{
               echo  $t. "x" . $i . "=" . $t * $i . "<br>";
               $i++;
            }while($i <=10);

            echo "<br>";

            /**
             * creacion de vectores
             */

             $array = array(1,2,3,4,5,6,7);

             $longitud = count($array);

             for($i = 0; $i < $longitud; $i++){
                echo $array[$i] . "<br>";
               }

             echo "<br>";

             foreach($array as $valor){
                    echo $valor . "<br>";
             }

             /**
              * for
              *tabla del 5
              */

               $array2 = array(1,2,3,4,5,6,7,8,9,10);
               $longi2 = count($array2);
               $r = 5;

              for($i = 0; $i < $longi2; $i++){
                  echo $r . " x " . $array2[$i] . " = " . $r * $array2[$i] . "<br>"; 
              }

              echo "<br>";
              /**
               * foreach
               * tabgla del 5
               **/

               foreach($array2 as $valor2){
                  echo $r . " x " . $valor2 . " = " . $r * $valor2 . "<br>";
               }


       }
       
       

       ?>
       
   </body> 

</html>