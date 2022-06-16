<h1>Editar contato:</h1>

<form action = "" method="post">
<div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" value="<?php echo $dados[0]; ?>" class="form-control" name="nome" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" value="<?php echo $dados[1]; ?>" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Telefone</label>
    <input type="text" value="<?php echo $dados[2]; ?>" class="form-control" name="telefone">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>