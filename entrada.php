<?php  
require_once("include/header.php");

if (isset($_POST['Cadastrar'])) {

    //Recebo os valores do post
    
    $codigo  = $_POST['codigo'];
    $qtd  = $_POST['qtd']; 

    if (!empty($codigo) && !empty($qtd)) {

      // não permitir numero negativo
      if ($qtd==0) {
        echo '<div class="boxErro">Não e permitido entrada de numero negativo</div>';
        exit();
      }

        // tabela produto selecionada
        $sql = "SELECT
        codigo,
        qtd
        FROM
        produto
        WHERE
        codigo = '$codigo'";

      // faz o fetch array para pegar os registros da tabela 
      $prepara = mysqli_query($conexao,$sql);
      $registro = mysqli_fetch_array($prepara);
      $resultado = mysqli_num_rows($prepara);

    // Subtrair do campo qtd na tabela produto 
    $result = $registro['qtd'] + $qtd;
    $sql = mysqli_query($conexao,"UPDATE produto set qtd = '$result' where codigo = '$codigo'");
    
    echo '<div class="boxSucesso">Quantidade adicionada com sucesso</div>';
  
    } 
  
  else {
   echo '<div class="boxErro"> Erro ' .$sql. ' </div>';
  } 

 }


?>

<header>
<h2>Adicionar quantidade do produto</h2>
</header>
    
<section>
    <form action="#" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Selecione codigo de um produto:</label>
        <select type="number" class="form-control" id="codigo" name="codigo">
        <option></option>
				<?php
				$query = "SELECT * FROM produto";
				$sql = mysqli_query($conexao, $query);
				$row = mysqli_fetch_assoc($sql);
				if (mysqli_affected_rows($conexao) > 0) {
					echo "<option value="  . $row['codigo'] . ">" . $row['codigo'] .' ', $row['nome'] .  "</option>";
					while ($row = mysqli_fetch_array($sql)) {
						echo "<option value="  . $row['codigo'] . ">" . $row['codigo'] .' ', $row['nome'] . "</option>";
					}
				}
				?>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantidade do produto</label>
        <input type="number" class="form-control" id="qtd" name="qtd" oninput="validity.valid||(value='');"  placeholder="Quantidade do produto">
        </div>
        <button type="submit" class="btn" id="cadastrar" name="Cadastrar" value="Cadastrar">Cadastrar</button>
    </form>
</section>


<?php  
require_once("include/footer.php");
?>