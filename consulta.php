<?php  
require_once("include/header.php");

if (isset($_POST['Cadastrar']))  {
  
   $codigo = $_POST['codigo'];
   
   $sql = "SELECT codigo, nome, qtd FROM produto where codigo = '$codigo'";
         
			$prepara = mysqli_query($conexao,$sql);
            $row = mysqli_fetch_assoc($prepara );
            // calcula quantos dados retornaram
            $total = mysqli_num_rows($prepara);	 

            if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
                    ?>
                <p class="lista">Nome do produto: <?=$row['nome']?></p> 
                <p class="lista"> Quantidade: <?=$row['qtd']?></p>    
        <?php
        	// finaliza o loop que vai mostrar os dados
		}while($row = mysqli_fetch_assoc($prepara));{ 

        }
        // fim do if
        } else { 
            echo '<div class="boxErro">Produto não existe</div>';
        }
  
}

?>

<section>
<header>
<h2>Consulte produto</h2>
</header>
    <form action="#" method="post">
<div class="row g-5 align-items-center">
  <div class="col-auto">
    <label for="codigo" class="codigo">Digite codigo do produto:</label>
  </div>

  <div class="col-auto">
    <input type="number" id="codigo" name="codigo" oninput="validity.valid||(value='');" class="codigo" aria-describedby="Codigo do produto">
  </div>
</div>

<button type="submit" class="btn" id="cadastrar" name="Cadastrar" value="Cadastrar">Consultar</button>
    </form>
</section>    
<?php  
require_once("include/footer.php");
?>
