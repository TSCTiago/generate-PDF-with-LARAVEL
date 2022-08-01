<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PDF</title>
</head>
<style>
    .cabeçalho{
        background:#80cbc4;
        margin-bottom: 0;
        padding: 10px;
        border-bottom: 1px solid #00796b;
    }
    section{
        margin-top: 20px;
        font-size: 25px;
    }
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
        flex-direction: row;
        background: #80cbc4;
        padding: 10px;
        -webkit-align-content: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        box-shadow: 0px 5px 0px 0px black;
    }

    .img>div {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        margin-top: 44px;
    }

    .img>div:last-child {
        margin-right: 0;
    }

    p {
        font-size: 30px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        width: 100%;
        background: white;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
    }

    th {
        background: #6be2d6;
        padding: 15px;
        border: 1px solid rgb(205, 225, 252);
    }

    td {
        border: 1px solid rgb(205, 225, 252);
        padding: 1rem 1rem 1rem 1rem;
        text-align: center;

    }
</style>

<body>
    <div class="cabeçalho">
        <h1>MEU GESTOR</h1>
        <h2>RELATÓRIO DO CLIENTE</h2>
    </div>
    <div class="img">
        <div>
            <p>DADOS DO CLIENTE</p>
        </div>
        <img class="imagem" src="{{ $pic }}" alt="">
    </div>
    <section>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>DATA</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ 'admin12345' }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
    
    
        </table>
    </section>


</body>

</html>
