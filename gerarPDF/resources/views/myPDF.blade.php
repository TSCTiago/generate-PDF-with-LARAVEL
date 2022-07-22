<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .img {
        width: 200px;
        height: auto;
        
    }
    .grupo{
        text-align: center;
    }
    .oi{
        display: flex;
    }
</style>

<body>
    <div class="oi">
        <div class="grupo">
            <h1>{{ $title }}</h1>
            <p>{{ $date }}</p>
            <p>LISTAGEM DOS USUÁRIOS NO BANCO</p>
        </div>
        
        <img class="img" src="{{$pic}}" alt="">
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
