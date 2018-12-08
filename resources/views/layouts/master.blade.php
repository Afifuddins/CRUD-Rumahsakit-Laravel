<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pasien</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
    
<style type="text/css">
        #NavBar{
            background-color: #FFFF00 ;
        }
        #NavBar .navbar-header{
            padding-left: 30px;
        }
        #NavBar .nav{
            padding-right: 30px;
        }
         footer{
        background-color: transparent;
        padding:15px 0;
        text-align:center;
        padding-top: 10px
        

    }
    </style>

<body>
<!-- Nav Bar -->
<nav class="navbar navbar-default" id="NavBar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Beranda</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('tasks.index') }}">Pasien</a></li>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<footer>
    <hr>
        <p>Hello World !</p>
        
    </footer>
</body>
</html>
