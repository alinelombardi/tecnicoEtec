<!DOCTYPE html>  
<html lang="pt-BR">  
  <head>      
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">      
    <meta http-equiv="X-UA-Compatible" content="ie=edge">      
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">      
    <title>Atividade online</title>  
  </head>  
  <body>  
    <div class="w3-container w3-teal">    
      <h1>      
        <?php
        
        
        $valorCompra = $_POST['txtValorCompra'];
        $formaPagamento = $_POST['cmbPag'];
        $pagamento;

        if($formaPagamento == "Depósito")
        {
          $desconto = 10;
        }
        elseif($formaPagamento == "Boleto")
        {
          $desconto = 8;
        }
        else{
          $desconto = 0;
        }

        $economizou = $valorCompra*$desconto/100;
        $pagamento = $valorCompra - $economizou;

        
        
        echo "PROMOÇÃO MÊS DE ANIVERSÁRIO!<br>";                
        echo "".$_POST['txtNome']."! <br> ";          
        echo "Valor da compra sem desconto: R$".$valorCompra."<br>";         
        echo "Forma de pagamento escolhida: ".$formaPagamento."<br>";
        echo "Desconto de: ".$desconto."%<br>";
        echo "Você economizou: R$".$economizou."<br>";
        echo "Valor à pagar: R$".$pagamento."<br>";


        ?>    
      </h1> 
    </div>  
  </body>  
</html>