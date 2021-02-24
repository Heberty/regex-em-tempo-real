<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <h1 class="mb-5">Regex em tempo real</h1>
                <form action="" class="row">
                    <div class="form-group col-12 col-lg-6">
                        <label for="regex">Regex</label>
                        <input type="text" class="form-control" placeholder="" id="regex">
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <label for="subs">Substituir por</label>
                        <input type="text" class="form-control" placeholder="" id="subs">
                    </div>
                    <div class="form-group col-12">
                        <label for="entrada">Entrada</label>
                        <input type="text" class="form-control" placeholder="Entrada" id="entrada">
                    </div>
                    <div class="form-group col-12">
                        <label for="saida">Saída</label>
                        <input type="text" class="form-control" placeholder="Saída" id="saida" disabled>
                    </div>  
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){            
            var regex;
            var subs;
            var entrada;
            var saida;
            var that;

            $('#regex').on('keyup', function(){
                entrada = $('#entrada').val();
                subs = $('#subs').val();
                that = '/' + $(this).val() + '/';
                regex = entrada.replace(that, subs);
                saida = $('#saida').val(regex);
            });
        });
    </script>
</body>
</html>