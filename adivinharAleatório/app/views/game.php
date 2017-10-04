<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/css/bootstrap.css" rel="stylesheet">
</head>

<body>
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header text-capitalize text-center" style="padding-top: 30px;">Digite um número</h1>
            </div>
        </div>
                <form method="post" action="/game">
                        <input type="text" id="entrada" class="form-control" name="entrada" value="" required>
                        <button class="btn btn-default">Tentar</button>
                </form>
                    <?php
                    echo $message;
                    ?>

    
</body>

</html>