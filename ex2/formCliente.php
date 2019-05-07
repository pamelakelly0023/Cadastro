<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa - Exercício 02</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
                    box-shadow:  0px 0px 0px 0px #000;
            width: 550;
           
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: center !important;
        }
       
    </style>
    
</head>
<body>
    <div class="container">
        <form action="controllerCliente.php" method="post" style="text-align:center; margin: 0 auto;">
        <fieldset class="scheduler-border" >
             <legend class="scheduler-border" style="color:red;">Formulário do Cliente</legend>
             
            
            <div class="form-group row">
                <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="codigo" name="codigo"required >
                    </div>
            </div>
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="dataNascimento" class="col-sm-2 col-form-label">Data de Nascimento</label>
                <div class="col-sm-10">
                     <input type="date" class="form-control" id="dataNascimento" name="dataNascimento"required>
                </div>
            </div>
            <div class="form-group row">
                <label for="preferencia" class="col-sm-2 col-form-label">Preferência</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="preferencia" name="preferencia" required>
                </div>
            </div>
            <div>
             <input type="submit" class="btn btn-info btn pull-right" name="Gravar"></input>
            </div>
            
            </fieldset>
            </form>
    </div>

</body>
</html>