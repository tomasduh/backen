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
                    
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>{{$userInfo['user_id']}}</td>
                    <td>{{$userInfo['netcommerce_id']}}</td>
                    <td>{{$userInfo['identification_number']}}</td>
                    <td>{{$userInfo['mobile_number']}}</td>
                    <td>{{$userInfo['birth_date']}}</td>
                    <td>{{$userInfo['created_at']}}</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col">client_id</th>
                    <th scope="col">year</th>
                    <th scope="col">transaction_detail</th>
                </tr>
            </thead>

            <tbody>
                @foreach($transactions as $transaction)
                <tr class="">
                    <td>{{$transaction['client_id']}}</td>
                    <td>{{$transaction['year']}}</td>
                    <td>{{$transaction['transaction_detail']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>



