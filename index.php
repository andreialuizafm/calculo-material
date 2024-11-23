<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cálculo de materiais</title>
</head>
<body>
    <main>
        <h1 class= "text-center">Calculadora de Materiais</h1>
        <div class = "container">
            <form class = "row g-2">
                <fildset class= "row g-2">
                    <legend>Cômodo</legend>
            <div class="col-md-6">
                <label for="comodo-largura" class="form-label">Comprimento</label>
                <input type="number" class="form-control" id="comodo-largura">
            </div>
        </fildset>
        <fildset class= "row g-2">
                    <legend>Piso</legend>
            <div class="col-md-6">
                <label for="comodo-largura" class="form-label">Largura</label>
                <input type="number" class="form-control" id="comodo-largura">
            </div>
            <div class="col-md-6">
                <label for="comodo-largura" class="form-label">Comprimento</label>
                <input type="number" class="form-control" id="comodo-largura">
            </div>
</fieldset>
                <div class="col-md-6"></div>
                <label for="piso
                <div class="col-md-12"> 
                <label for="margem" class="form-label">Margem(%)</label>
                <input type="number" class="form-control" id="margem">
            </div>
                <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Calcular</button>               <div class="col-md-12"></div>
            </div>
            <div class="col-md-12">
                <div id= "resultado">

                </div>


            </form>

    </div>

    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function processar(e){

        e.preventDefault();
    }
    
</body>
</html>