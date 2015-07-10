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

    @if (env('ANALYTICS'))
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '{{ env('ANALYTICS') }}', 'auto');
        ga('send', 'pageview');
    </script>
    @endif
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