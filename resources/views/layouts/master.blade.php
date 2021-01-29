<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome/css/all.css') }}" rel="stylesheet"> <!--load all styles -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/calendar/calendar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">


    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <title>Talk to your therapist online privately anytime anywhere | تكلم مع طبيب نفسي أون لاين بكل سرية وخصوصية
    </title>
    <meta name="title" content="Talk to your therapist online privately anytime anywhere | تكلم مع طبيب نفسي أون لاين بكل
            سرية وخصوصية">
    <meta name="description" content="Shezlong is the first online platform in MENA that can help book online mental sessions
            from anywhere at anytime">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts.nav')

@yield('content')
@include('layouts.footer')
<!-- Optional JavaScript; choose one of the two! -->

<script defer src="{{ asset('assets/css/fontawesome/js/all.js') }}"></script> <!--load all styles -->
<script defer src="{{ asset('assets/plugins/calendar/calendar.js') }}"></script> <!--load all styles -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


@yield('script')

</body>
</html>
