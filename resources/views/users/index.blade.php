<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Usuarios</h1>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">User_id</th>
                    <th scope="col">Netcommerce_id</th>
                    <th scope="col">Identification_number</th>
                    <th scope="col">Mobile_number</th>
                    <th scope="col">Birth_date</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Transaction History</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($data as $user)
                <tr class="">
                    <td>{{$user['user_id']}}</td>
                    <td>{{$user['netcommerce_id']}}</td>
                    <td>{{$user['identification_number']}}</td>
                    <td>{{$user['mobile_number']}}</td>
                    <td>{{$user['birth_date']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>
                        <form action='{{ url('/users/'.$token.'/transaction/'.$user['id']) }}' method="GET">
                            <button type="submit" class="btn btn-success">Ver Transacciones</button>
                        </form>
                        <form action='{{ url('/user/'.$user['id']) }}' method="GET">
                            <button type="submit" class="btn btn-primary">Ver full info</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>



