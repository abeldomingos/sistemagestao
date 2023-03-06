<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>

<form action="/cadastrar-produto" method="POST">
    @csrf
    
<label><b>Nome do Produto<b></label>
<input type="text" name="nome">
<br><br><br>
<label><b>Preço do Produto<b></label>
<input type="text" name="preco">
<br><br><br>
<label><b>Quantidade Em Estoque<b></label>
<input type="text" name="estoque">
<br><br><br>
<button>Cadastrar Produto</button>

</form>
    
</body>
</html>