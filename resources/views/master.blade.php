<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! app('seotools.metatags')->generate() !!}

    <!-- CSS -->
    <link href="/assets/css/frontend.css" rel="stylesheet">

    <script src="/assets/js/modernizr.js"></script>
    <!--[if IE]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>

<main>

    <a href="{{ route('contato') }}">
        Contato
    </a>

    <div class="conteudo">

        @yield('content')

    </div>
</main>

<!-- Javascript -->
<script src="/assets/js/frontend.js"></script>
</body>
</html>