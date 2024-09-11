<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="get">
        <label for="nome">Nome do aluno:      </label>
        <input name="nome" id="nome" type="text"><br>
        <label for="nasc">Data de nascimento: (DD/MM/AAAA)</label>
        <input name="nasc" id="nasc" type="text"><br>
        <label for="cpf">CPF:                 </label>
        <input name="cpf" id="cpf" type="number"><br>
        <label for="matr">Matrícula:          </label>
        <input name="matr" id="matr" type="number"><br>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>