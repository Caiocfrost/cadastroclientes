<h2>Criar Usuário</h2>
<a href="listar.php">Listar e deletar usuários</a>;
<a href="editar.php">Alterar usuários</a>;
<hr>

<?php


require_once '../config.php';



if(isset($_POST['nome'])){
	$sql = $pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?)");
	$sql->execute(array($_POST['nome'],$_POST['telefone'],$_POST['email']));
	echo 'Inserido com sucesso!';
}


?>

<form method="post">
	<div>
        <label for="name">Nome:</label>
        <input type="text" name="nome" />
    </div>
    <div>
        <label for="tel">Telefone:</label>
        <input type="text" name="telefone" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" name="email" />
    </div>
    
    <div class="button">
        <button type="submit">Criar usuário</button>
    </div>
</form>
	





