<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modelo</title>
</head>
<style>
    .user{
        list-style: none;
    }
    .img{
        width: 100px
    }
</style>
<body>
    <div class="user">
        <img class="img" src="/log.png" alt="">
        @foreach ($users as $user)
            <ul class="user">
                <li>
                    ORDEM: {{ $user->id }}º
                </li>
                <li>
                   NOME: {{ $user->name}} 
                </li>
                <li>
                    EMAIL: {{ $user->email }}
                </li>
            </ul>
        @endforeach
    </div>
</body>
</html>