<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>The European Cybersecurity Competence Centre (ECCC)</title>
    <meta content="width=device-width,initial-scale=1" name="viewport"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <script>
        var cl = document.querySelector('html').classList;
        cl.remove('no-js');
        cl.add('has-js');
    </script>
    <link
        rel="stylesheet"
        href="{{asset('styles/ecl-ec-preset-website.css')}}"
        crossorigin="anonymous"
        media="screen"
    />
    <link
        rel="stylesheet"
        href="{{asset('styles/ecl-ec-preset-website.css')}}"
        crossorigin="anonymous"
        media="print"
    />
</head>
<body>

<x-header></x-header>
<x-page-header></x-page-header>
<x-menu></x-menu>



<div>
    <div class="ecl-container">

        {{ $slot }}

    </div>
</div>

<x-footer></x-footer>

<script src="{{asset('scripts/ecl-ec-preset-website.js')}}"></script>
<script>
    ECL.autoInit();
</script>
</body>
</html>
