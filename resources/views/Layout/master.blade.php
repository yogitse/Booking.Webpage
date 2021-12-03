<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://kit.fontawesome.com/dea7289029.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
    <script>
        $( function() {
            $( "#datepicker2" ).datepicker();
        } );
    </script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        div{
            font-family:Lato;
        }


        input.invalid {
            background-color: #ffdddd;
        }

        .tab {
            display: none;
        }

        button {
            background-color: darkcyan;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: "Lato Light";
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        .step.finish {
            background-color: #04AA6D;
        }

        .btn-group{
            display: flex;
        }
        .btn-group label{
            background-color: white;
            color: black;
            border-color: transparent;
            cursor: pointer; /* Pointer/hand icon */

        }

        .btn-group label:not(:last-child) {
            border-bottom: none; /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group label:hover {
            background-color: darkcyan;
        }

        .btn-group label input:checked{
            background-color: darkcyan;
            color: white;
        }


    </style>
</head>
<body>
<div class="p-2 text-white text-center" style="background-color: darkcyan">
    <div class="row">
        <div class="col-sm-3"><i class="fas fa-phone"></i> 0921-4831276 | 8519-6588 </div>
        <div class="col-sm-2"><i class="fas fa-envelope"></i> mmyssa@gmail.com </div>
        <div class="col-sm-2"><i class="fas fa-clock"></i> daily from 9am - 9pm</div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Highly Succeed</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"href="/booking">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
