

<?php  
require_once("include/header.php");

if (isset($_POST['Cadastrar'])) {
//recebo valor Post do form
$codigo  = $_POST['codigo'];
$nome  = $_POST['nome']; 
$qtd = $_POST['qtd']; 

    // sql (insert) iserindo no banco
    $sql = "INSERT INTO produto (
        codigo,
        nome,
        qtd 
        ) 
        VALUES 
        (
        '$codigo',
        '$nome',
        '$qtd'
      )";


    if (mysqli_query($conexao, $sql)) {
    echo '<div class="boxSucesso">Cadastrado com sucesso</div>';
    } else {
    echo '<div class="boxErro"> Erro ' . $sql . ' </div>';
    }
  

 }

 
  

?>

<header>
<h2>Cadastrar produto</h2>
</header>
    
<section>
    <form action="#" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo do produto</label>
        <input type="number" class="form-control" id="codigo" name="codigo" oninput="validity.valid||(value='');"  placeholder="Apenas numeros">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantidade do produto</label>
        <input type="number" class="form-control" id="qtd" min="0" name="qtd" oninput="validity.valid||(value='');" placeholder="Quantidade do produto">
        </div>
        <button type="submit" class="btn" id="cadastrar" name="Cadastrar" value="Cadastrar">Cadastrar</button>
    </form>
</section>



<?php  
require_once("include/footer.php");
?>