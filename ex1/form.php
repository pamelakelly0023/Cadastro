<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa - Exercício 01</title>
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
        <form action="controller.php" method="post" style="text-align:center; margin: 0 auto;">
        <fieldset class="scheduler-border" >
             <legend class="scheduler-border" style="color:red;">Dados do Carro</legend>
             
            
            <div class="form-group row">
                <label for="motor" class="col-sm-2 col-form-label">Motor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="motor" name="motor" required>
                    </div>
            </div>
            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cor" class="col-sm-2 col-form-label">Cor</label>
                <div class="col-sm-10">
                     <input type="text" class="form-control" id="cor" name="cor" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ano" class="col-sm-2 col-form-label">Ano</label>
                <div class="col-sm-10">
                     <input type="number" class="form-control" id="ano" name="ano" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cambio" class="col-sm-2 col-form-label">Cambio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cambio" name="cambio" required>
                <div>
            </div>
            </fieldset>
            </br>
            <fieldset class="scheduler-border">
             <legend class="scheduler-border"style="color:red;" >Dados do Motor</legend>
            
           
            <div class="form-group row">
                <label for="cilindro" class="col-sm-2 col-form-label">Cilindro</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cilindro" name="cilindro" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="potencia" class="col-sm-2 col-form-label">Potência</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="potencia" name="potencia" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="giroAtual" class="col-sm-2 col-form-label">Giro Atual</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="giroAtual" name="giroAtual" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="combustivel" class="col-sm-2 col-form-label">Combustível</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="combustivel" name="combustivel" required>
                </div>
            </div>
            </br>
            <div>
             <input type="submit" class="btn btn-info btn pull-right" name="mostrar"></input required>
            </div>
           
         </fieldset>   
        
        </form>
    </div>

</body>
</html>