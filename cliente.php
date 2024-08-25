<?php  
require_once("include/header.php");

function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
      echo '<div class="boxErro">CPF inválido</div>';
      exit();
        return false;
    }
  
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
      echo '<div class="boxErro">CPF inválido</div>';
      exit();
        return false;
    }
  
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
          echo '<div class="boxErro">CPF inválido</div>';
          exit();
            return false;
        }
    }
    return true;
  
  }

if (isset($_POST['Cadastrar'])) {

    //Recebo os valores do post
    $nome  = $_POST['nome'];
    $cpf  = $_POST['cpf']; 

    validaCPF($cpf);

    if (!empty($nome) && !empty($cpf)) {
       //inserir dados                
        $sql = "INSERT INTO cliente (nome, cpf) VALUES ('$nome', '$cpf')";
        if (mysqli_query($conexao, $sql)) {
            echo '<div class="boxSucesso">Cadastrado com sucesso</div>';
           
            }  else {
            echo '<div class="boxErro"> Erro ' . $sql . ' </div>';
            }
            
    }
}


?>

<header>
<h2>Adicionar cliente</h2>
</header>
    
<section>
    <form action="#" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome do cliente</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite nome">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CPF do cliente</label>
        <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF sem formatação('-, .')">
        </div>
        <button type="submit" class="btn" id="cadastrar" name="Cadastrar" value="Cadastrar">Cadastrar</button>
    </form>
</section>


<?php  
require_once("include/footer.php");
?>