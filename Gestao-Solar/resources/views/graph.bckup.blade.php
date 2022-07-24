<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PDF</title>
</head>
<style>
    h1,
    h2 {
        font-size: 50px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;

    }

    h2 {
        font-size: 30px;
    }

    img {
        width: 250px;
        height: 100px;
    }

    ul {
        list-style: none;
    }

    li {
        font-size: 1.5rem;
        font-family: Arial, Helvetica, sans-serif;
    }

    .img {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        background: rgb(255, 170, 0);
        padding: 10px;
        -webkit-align-content: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }

    .img>div {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        flex: 1;
    }

    .img>div:last-child {
        margin-right: 0;
    }

    p {
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
    <h1>Meu gestor</h1>
    <h2>Relatório de clientes</h2>
    <div class="img">
        <div>
            <p>Dados dos Clientes</p>
        </div>
        <img class="img" src="{{ $pic }}" alt="">
    </div>
    <section>
        @foreach ($users as $user)
            <ul>
                <li>Nome :{{ $user->name }}</li>
                <li>Email: {{ $user->email }}</li>
            </ul>
        @endforeach
    </section>

</body>

</html>
