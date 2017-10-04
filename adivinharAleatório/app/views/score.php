<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" href="/">SCORE</a>
            </div>

          <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tentativas</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $d) { ?>
            <tr>
                <td><?= $d['nome'] ?></td>
                <td><?= $d['tentativas'] ?></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</body>

</html>