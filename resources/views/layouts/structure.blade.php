<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/main.js')
    <title>@yield('page-title', 'Home')</title>
</head>
<body>

@include('layouts.header')
@yield('banner')
@yield('live_auctions')
@yield('form')
@yield('popular')
@yield('footer')



<script>
    function getValue() {
        let x = document.getElementById('title')
        let text = document.getElementById("name-change")
        text.innerHTML = x.value.toUpperCase();

        if (x.value.length >= 35) {
            alert('Maximo de caracteres')
        }
    }

    function getPrice() {
        let x = document.getElementById('price');
        let text = document.getElementById('price-change');
        let value = x.value.trim();

        value = value.replace(/[^0-9, .]/g, '');
        value = value.replace(/(\..*)\./g, '$1');

        text.innerHTML = value !== '' ? value : '0.00';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        perPage: 4,
        focus  : true,
        breakpoints:{
            1200: {
                perPage: 3,
            },

            800:{
                perPage:1,
            }
        }
    } );

    splide.mount();
</script>

</body>
</html>
