<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('"assets/css/custom.css') }}">


    {{-- <link
    href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
  rel="stylesheet">
   <link
href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-01.css">

    <style>
        @import url('https://fonts.maateen.me/adorsho-lipi/font.css');
        @import url('https://fonts.maateen.me/bangla/font.css');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;700;800&display=swap');



        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p, span {
            /* font-family: 'AdorshoLipi', sans-serif; */
            font-family: 'Baloo Da 2', cursive;
            
        }

        /* color */
        .color-selector {
            max-width: 400px;
            margin-bottom: 10px;
            padding: 2px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
            outline: none;
            font-size: 16px;
            color: #333;
        }

        select[multiple] {
            height: auto;
        }


        /* Custom styling for the size selector container */
        .size-selector {
            display: flex;
            gap: 10px;
        }

        /* Hide the default radio buttons */
        .hidden {
            display: none;
        }

        /* Style the size labels */
        .size-label {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 2px solid #333;
            border-radius: 5%;
            cursor: pointer;
            font-size: 16px;
        }

        /* Style the size labels when selected */
        .hidden:checked+.size-label {
            background-color: #e35252;
            color: #fff;
        }


        /* cart */
        /* Custom styling for the cart quantity container */
        .cart-quantity {
            display: flex;
            align-items: center;
        }

        /* Style the increment and decrement buttons */
        .cart-btn {
            padding: 8px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
        }

        /* Style the input element */
        .cart-input {
            padding: 8px 12px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 4px;
            width: 50px;
            text-align: center;
            appearance: textfield;
            /* To disable the default spinner arrows in some browsers */
        }







    </style>


</head>


<body>




    @yield('content')

    @include('sections.footer')

    <!-- Vendor JS-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
    <script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>

    <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/functions.js"></script>

    <script>
        function increment() {
            const input = document.querySelector('.cart-input');
            input.stepUp();
        }

        function decrement() {
            const input = document.querySelector('.cart-input');
            input.stepDown();
        }
    </script>

    <script>
        document.getElementById("submitButton").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior (e.g., navigating to "#")

            // Get the form element
            var form = document.getElementById("myForm");

            // Perform any validation or other tasks here if needed
            // ...

            // Submit the form programmatically
            form.submit();
        });


        // গািকত
    </script>

    <script>
        function submitForm() {
            document.getElementById("myForm").submit();
        }
        const searchButton = document.getElementById('searchButton');
        const searchBar = document.getElementById('searchBar');

        searchButton.addEventListener('click', () => {
            searchBar.classList.toggle('hidden');
            searchBar.classList.toggle('active');
        });
    </script>


</body>

</html>
