<?php  
require_once("include/header.php");



if (isset($_POST['Cadastrar'])) {

    //Recebo os valores do post
    
    $codigo  = $_POST['codigo'];
    $qtd  = $_POST['qtd']; 
    $cpf = $_POST['cpf'];
    
// não permitir numero negativo
if ($qtd==0) {
  echo '<div class="boxErro">Informe um valor positivo</div>';
  exit();
}

    // Se campos não estão vazios 
    if (!empty($codigo) && !empty($qtd) && !empty($cpf)) {


    $sql = "SELECT * FROM produto where codigo = '$codigo'";

          $prepara = mysqli_query($conexao,$sql);
          $row = mysqli_fetch_assoc($prepara );
          //Subtrair do campo qtd na tabela produto onde codigo e igual a codigo 
          $resultado = $row['qtd'] - $qtd;
          $sql = mysqli_query($conexao,"UPDATE produto set qtd = '$resultado' where codigo = '$codigo'");

    } 
  
  else {
   echo '<div class="boxErro"> Erro ' .$sql. ' </div>';
  } 

    $sqli = "INSERT INTO venda (codigo, qtd, cpf) VALUES ('$codigo', '$qtd', '$cpf')";
    if (mysqli_query($conexao, $sqli)) {
      echo '<div class="boxSucesso">Quantidade vendida com sucesso</div>';
     
      }  else {
      echo '<div class="boxErro"> Erro ' . $sqli . ' </div>';
      }
   

 }


?>

<header>
<h2>Registrar saída do estoque</h2>
</header>
    
<section>
    <form action="#" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Selecione codigo do produto:</label>
        <select type="number" class="form-control" id="codigo" name="codigo">
        <option></option>
				<?php
				$query = "SELECT * FROM produto";
				$sql = mysqli_query($conexao, $query);
				$row = mysqli_fetch_assoc($sql);
				if (mysqli_affected_rows($conexao) > 0) {
					echo "<option value="  . $row['codigo'] . ">" . $row['codigo'] .' - ', $row['nome'] .  "</option>";
					while ($row = mysqli_fetch_array($sql)) {
						echo "<option value="  . $row['codigo'] . ">" . $row['codigo'] .' - ', $row['nome'] . "</option>";
					}
				}
				?>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantidade do produto</label>
        <input type="number" class="form-control" id="qtd" name="qtd" oninput="validity.valid||(value='');"  placeholder="Quantidade do produto">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Selecione o CPF:</label>
        <select type="number" class="form-control" id="cpf" name="cpf">
        <option></option>
				<?php
				$query = "SELECT * FROM cliente";
				$sql = mysqli_query($conexao, $query);
				$row = mysqli_fetch_assoc($sql);
				if (mysqli_affected_rows($conexao) > 0) {
					echo "<option value="  . $row['cpf'] . ">" . $row['cpf'] .' - ', $row['nome'] .  "</option>";
					while ($row = mysqli_fetch_array($sql)) {
						echo "<option value="  . $row['cpf'] . ">" . $row['cpf'] .' - ', $row['nome'] . "</option>";
					}
				}
				?>
        </select>
        </div>
        <button type="submit" class="btn"  id="cadastrar" name="Cadastrar" value="Cadastrar">Cadastrar</button>
    </form>
</section>


<?php  
require_once("include/footer.php");
?>