<?php

    
                $valor1 = $_POST["v1"];
                $valor2 = $_POST["v2"];
                $resultado = 0;


                $resultado = $valor1 / ($valor2 * $valor2);
                $resultado = round($resultado,1);
                echo "Tu IMC es :".$resultado ;
                echo "<br>";

                if($resultado < 18){
                    echo "Peso bajo, valorar signos de desnutricion";
                }
                if($resultado > 18 && $resultado <= 24.9){
                    echo "Tu peso esta normal";
                }
                if($resultado >= 25 && $resultado <= 26.9){
                    echo "Tienes sobrepeso ten cuidado";
                }
                if ($resultado >= 27 && $resultado <= 29.9){
                    echo "Obesidad grado l Riesgo alto";
                }
                if($resultado >=30 && $resultado <= 39.9){
                    echo "Obesidad grado 2 Riesgo muy alto";
                }
                if ($resultado >= 40){
                    echo "Obesidad grado 3 Extrema o Morbida";
                }

                echo "<br>";
                ?>

