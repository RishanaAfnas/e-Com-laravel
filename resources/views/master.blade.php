<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <style>
        .custom-login{
            height: 500px;
            padding:100px;
        }
        img.slider-img{
            height: 400px !important;
        }
        .custom-product{
            height: 600px; 
            padding-top: 50px;
            margin-bottom:50px;
        }
        .slider-text{
            background-color: rgba(103, 96, 96, 0.5);
            color: #fff;
        }
       
        .links{
            color: #fff !important;
            font-size: 20px;
        }
        .links:hover{
            color: dodgerblue!important;
        }
        .brand{
            /* color: red ; */
            font-size:30px; 
            margin-left: 5px;
            margin-right: 20px;
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
           float: left;
           width: 20%;
           margin-top: 3%;
            
        }
        .trending-wrapper{
            margin: 30px;
        }
        .detail-img{
            height: 200px;
            
        }
        .detail{
            margin-top: 30px;
            margin-bottom:10%;
        }
        a{
            text-decoration: none;
            color:#000;
        }
        .search-box{
            width: 500px !important;
           
        }
        .find{
            margin-right: 20px !important;
        }
        .filter{

        }
        .drop{
            margin-right: 20px !important
        }
       
      
       
    </style>
    
</body>

</html>