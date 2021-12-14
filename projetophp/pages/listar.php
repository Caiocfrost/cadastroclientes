<h2>Listar e Deletar Usuários</h2>
<a href="criar.php">Criar usuários</a>;
<a href="editar.php">Alterar usuários</a>;
<hr>

<?php
require_once '../config.php';

  if(isset($_GET['delete'])){
      $id = (int)$_GET['delete'];
      $pdo->exec("DELETE FROM cliente WHERE id=$id");
      echo 'Deletado com sucesso o id: '.$id;
  }

  $sql = $pdo->prepare("SELECT * FROM cliente");
	$sql->execute();

	$fetchCliente = $sql->fetchAll();

	

	echo '<h2>Clientes</h2>
        <h3>Aperte o X para deletar o usuário</h2>
    		<table>
        		<thead>
            		<tr>
                		<th>Delete</th>
                		<th>Nome</th>
                		<th>Telefone</th>
                		<th>Email</th>
            		</tr>
       			</thead>';
    foreach ($fetchCliente as $key => $value ) {
    	echo  '<tbody>
                <tr>
                  <td><a href="?delete='.$value['id'].'">(X)</a></td>
                  <td>'.$value['nome'].'</td>
                  <td>'.$value['telefone'].'</td>
                  <td>'.$value['email'].'</td>
                </tr>
              </tbody>';
    }       				
?>

