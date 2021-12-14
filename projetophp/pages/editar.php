<h2>Alterar Usuários</h2>
<a href="criar.php">Criar usuários</a>;
<a href="listar.php">Listar e deletar usuários</a>;

<form method="post">
    <div>
        <label for="id">Digite o ID a alterar:</label>
        <input type="text" name="id" />
    </div>
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
        <button type="submit">Alterar usuário</button>
    </div>
</form>

<?php

require_once '../config.php';

	if(isset($_POST['nome'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$pdo->exec("UPDATE cliente SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id");

	}




	$sql = $pdo->prepare("SELECT * FROM cliente");
	$sql->execute();

	$fetchCliente = $sql->fetchAll();

	

	echo '<h2>Clientes</h2>
    		<table>
        		<thead>
            		<tr>
                		<th>ID</th>
                		<th>Nome</th>
                		<th>Telefone</th>
                		<th>Email</th>
            		</tr>
       			</thead>';
    foreach ($fetchCliente as $key => $value ) {
    	echo  '<tbody>
                <tr>
                  <td>'.$value['id'].'</td>
                  <td>'.$value['nome'].'</td>
                  <td>'.$value['telefone'].'</td>
                  <td>'.$value['email'].'</td>
                </tr>
              </tbody>';
    }
?>


