<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

      /*$cor = "amarelo";
      $cor = "vermelho";
      echo $cor;*/

     /* var_dump(array("maçã","laranja"))*/
      
    /*$nome = "Ana";
      echo "Olá " . $nome . "!";*/
      
     /* $a = 1;
      $b = 3;

if ($a>$b) {
  echo"a é maior que b";
  }
else if ($a<$b) {
  echo "b é maior que a" . "<br>";
  }
    if ($a==$b) {
echo "a é igual a b";
  }
      else if ($a != $b) {
echo "a é diferente de b";
      }*/
      
      /*$i = 1;
      while ($i < 10) {
        $i = $i +1;
        echo $i;
        
        if ($i % 2 == 0) {
          echo " $i é par <br>";
        } else {
          echo " $i é impar <br>";
        } 
      }*/
      
      /*for($i = 1; $i<10; $i++) {
        echo "o valor de i é $i <br>";
      }*/
      
     /* $nome = "Pedro";
      switch ($nome) {
        case "Ana":
          echo "olá, Ana";
          break;
          
        case "Pedro":
          echo "olá, Pedro";
          break;
          
        default:
          echo "Não sei quem você é";
          
      }*/
      
     /* function soma($a,$b) {
        $resultado = $a + $b;
        return $resultado;
      }
      
      $numero1 = 10.5;
      $numero2 = 5;
      
      $resultfuncao = soma($numero1,$numero2);
        
      echo $resultfuncao;*/
      
      /*$cores = array("vermelho","azul","verde");
      echo $cores[4];*/
      
      /*$pessoas = ["nome" => "Ana","Idade" => 23,];
      echo $pessoas["nome"] . "<br>";
      echo $pessoas["Idade"];*/
      
     /* $numero = [1,2,3];
      array_push($numero,4);
      echo $numero[3];*/
      
      $comidas = array("strogonofe", "hamburguer", "chocolate");
      array_push($comidas,"sopa de cebola");
      foreach($comidas as $comida) {
        echo "Eu gosto de " . $comida . "<br>";
      }
     
      echo "<br> Eu nao gosto de sopa de cebola  <br> <br>";
        
      array_pop($comidas);
      foreach($comidas as $comida) {
        echo "Eu gosto mesmo é de " . $comida . "<br>";
      }
      
      
      
      
      
 
        ?>

    </body>
</html>