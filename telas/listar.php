<h1>
    Lista de contatos:
</h1>

<table class="table">
  <thead>
    <tr>
        <th>#</th>
        <th></th>
        <th>Nome</th>
        <th></th>
        <th>email</th>
        <th></th>
        <th>Número</th>
        <th></th>
        <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $cont = 1;
        foreach($contatos as $posicao => $cadaContato){
            $partes = explode(';', $cadaContato);
            echo "<tr>";
            echo "<td>". $cont. "<td>";
            echo "<td>". $partes[0]. "<td>";
            echo "<td>". $partes[1]. "<td>";
            echo "<td>". $partes[2]. "<td>";
            echo "<td>
                    <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir ${posicao}</a>
                    <a href='/editar?id={$posicao}' class='btn btn-primary btn-sm'>Editar ${posicao}</a>
                </td>";
            echo "</tr>";
            $cont++;
        }
    ?>
  </tbody>
</table>
