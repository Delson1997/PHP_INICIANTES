
 <?php
 include_once 'php_action/db_connect.php';
 include_once 'Includes/header.php';
 include_once 'Includes/mensagen.php';
?>


<div class="row">

<div class="col s12 m6 push-m3">
<h3 class="light"> Clientes </h3>
<table class="striped" >
<thead >
</thead>
<tr>
<th>Nome: </th>
<th>Sobrenome: </th>
<th>Email: </th>
<th>Idade: </th>
<th></th>
<th></th>
</tr> 
<tbody>
<?php
$sql = "SELECT * FROM clientes";
$resuldado = mysqli_query($connect,$sql);

if(mysqli_num_rows ($resuldado)>0):

while($dados=mysqli_fetch_array($resuldado)):


?>
<tr>

<td><?php echo $dados['nome'];?></td>
<td><?php echo $dados['sobrenome'];?></td>
<td><?php echo $dados['email'];?></td>
<td><?php echo $dados['idade'];?></td>
<td><a href="editar.php?id_cliente=<?php echo $dados['id_cliente'];?>" class="btn-floating orage" > <i class="material-icons"> edit</i> </a></td>

<!-- usando modal no deletar registro Materialize-->
<td><a href="#modal?<?php echo $dados['id_cliente'];?>" class="btn-floating red modal-trigger" > <i class="material-icons"> delete</i> </a> </td>
<!-- Modal Structure -->
<div id="modal?<?php echo $dados['id_cliente'];?>" class="modal">
  <div class="modal-content">
    <h4>Opha</h4>
    <p>Deseja exclui?</p>
  </div>
  <div class="modal-footer">
    
<form action="php_action/delete.php" method="POST">
<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
<!-- Criando o botao que permitira deletar o cliente-->
<input type="hidden" name="id_cliente"  value="<?php echo $dados['id_cliente'];?>">
<button type="submit" name="btn-deletar" class="btn red">Sim</button>
</form>
  </div>
</div>  

<?php 
endwhile; 
else :?>
<tr>
<td>-------</td>
<td>-------</td>
<td>-------</td>
<td>-------</td>
</tr>
<?php
endif;
?>
</tbody>
</table>
<br>
<a href="adcionar.php" class="btn" >Adiconar Cliente</a>
 </div>
 </div>
 





<?php include_once 'Includes/footer.php'; ?>