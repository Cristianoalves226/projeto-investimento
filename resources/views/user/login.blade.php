<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>Login | Investindo</title>
</head>

<body>
    <section id="conteudo-view" class="login">
        <h1>Investindo</h1>
        <h3>O nosso gerenciador de Investimento</h3>
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
        <p>Acesse o sistema</p>
        <label>
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}
        </label>

        <label>
            {!! Form::password('password', ['placeholder' => 'Senha']) !!}
        </label>

        {!! Form::submit('Entrar') !!}

        {!! Form::close() !!}
    </section>
</body>

</html>
