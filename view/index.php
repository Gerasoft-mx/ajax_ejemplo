<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/js/ajax.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ajax</title>
</head>
<body>
    <form id="frm-comprobar" method="post" action="?c=Comprobar&a=validar">
        <div class="container">
            <div class="row">
                <div class="form-group">
                    <label>Escriba un numero</label>
                    <input autocomplete="off" id="numero" class="form-control" type="text" placeholder="Ingrese un numero" />
                </div>
                <button class="btn btn-primary form-control" id="btn-validar" type="submit">
                    <i class="glyphicon glyphicon-ok"></i>
                </button>
            </div>
        </div>
    </form>
</body>
</html>