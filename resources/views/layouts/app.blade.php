<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- My styles -->
    <!--<link rel="stylesheet" type="text/css" href='@php (Route::is('home')) ? "./assets/cruddy.css" : "../assets/cruddy.css";  @endphp'/>-->
    <link rel="stylesheet" type="text/css" href="/css/cruddy.css"/>
    <title>On the Bench</title>
    <style type="text/css">
        li.active a {
            color: orange !important;
        }
        body {
            background-image: url(/images/bg.jpg);
        }
        hr {
            width: 100%;
            height: 10px;
        }
        .navbar {
            margin-bottom: 30px;
        }
        /* Removes number spinner from numeric type input fields in firefox*/
        input[type=number] {
            -moz-appearance: textfield;
        } 
        .gap {
            margin-bottom: 38px;
        }       
    </style>
    
</head>

<body>
    @include('partials.nav') 
    <div class="container">
        @yield('content')
    </div>
    <!-- JavaScript - this doesn't work to stop mousewheel 
        increment/decrement action on numeric type input fields -->
    <script>
        document.addEventListener("mousewheel", function(event){
            if(document.activeElement.type === "number"){
                document.activeElement.blur();
            }
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>