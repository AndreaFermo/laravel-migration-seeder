<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni di Oggi</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">TRENI IN PARTENZA OGGI</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Ora di partenza</th>
                    <th scope="col">Ora di arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->azienda}}</td>
                        <td>{{$train->codice_treno}}</td>
                        <td>{{$train->data_di_partenza}}</td>
                        <td>{{$train->orario_di_partenza}}</td>
                        <td>{{$train->orario_di_partenza}}</td>
                    </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
   
       
   
</body>
</html>