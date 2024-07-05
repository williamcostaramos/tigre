<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slots</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row m-4">
            <div class="col-12">

            </div>
        </div>


        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Game</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Minima</th>
                    <th scope="col">Média</th>
                    <th scope="col">maxima</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($games->porcentagens as $key => $game)
                <tr class="pd-5">
                    <td><img class="img-fluid rounded" src="{{$game->imagem}}" width="100" height="100" /></td>
                    <td>{{$game->nome}}</td>
                    <td>
                        <?php $class = ($game->Aposta_Minima <= 30) ? 'bg-danger' : (($game->Aposta_Minima >= 75) ? 'bg-success' : 'bg-info');
                        ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated {{$class}}" role="progressbar" aria-label="{{$game->Aposta_Minima}}" style="width: {{$game->Aposta_Minima +10}}%" aria-valuenow="{{$game->Aposta_Minima}}" aria-valuemin="0" aria-valuemax="100">{{$game->Aposta_Minima}}%</div>

                        </div>


                    </td>
                    <td>
                        <?php $class = ($game->Aposta_Padrao <= 45) ? 'bg-danger' : (($game->Aposta_Padrao >= 75) ? 'bg-success' : 'bg-info');
                        ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated {{$class}}" role="progressbar" aria-label="{{$game->Aposta_Padrao}}" style="width: {{$game->Aposta_Padrao +10}}%" aria-valuenow="{{$game->Aposta_Padrao}}" aria-valuemin="0" aria-valuemax="100">{{$game->Aposta_Padrao}}%</div>

                        </div>

                    </td>
                    <td>

                    <?php $class = ($game->Aposta_Maxima <= 30) ? 'bg-danger' : (($game->Aposta_Maxima >= 75) ? 'bg-success' : 'bg-info');
                        ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated {{$class}}" role="progressbar" aria-label="{{$game->Aposta_Maxima}}" style="width: {{$game->Aposta_Maxima +10}}%" aria-valuenow="{{$game->Aposta_Maxima}}" aria-valuemin="0" aria-valuemax="100">{{$game->Aposta_Maxima}}%</div>

                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <script>

    </script>
</body>


</html>
