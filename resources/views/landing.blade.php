<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome To GROVR</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
        <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

        <!-- Temporary navbar container fix -->
        <style>
            .navbar-toggler {
                z-index: 1;
            }

            @media (max-width: 576px) {
                nav > .container {
                    width: 100%;
                }
            }
            /* Temporary fix for img-fluid sizing within the carousel */

            .carousel-item.active,
            .carousel-item-next,
            .carousel-item-prev {
                display: block;
            }
        </style>

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="padding-left: 8%">
                <img src="{{asset('img/GRO.png')}}" width="50px" height="50px" style="padding: 0;margin: 0" alt="">
            </a>
            <div class="container">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-grain" style="color: green;font-size:35px;" aria-hidden="true"></span>Be a Grovr</a>
                <div class="collapse navbar-collapse" id="navbarExample" style="padding-right: 6%">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#menu-toggle" class="nav-link" id="menu-toggle" href="#"> <span class="glyphicon glyphicon-list" style="color: green;font-size:35px;" aria-hidden="true"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-cog" style="color: green;font-size:35px;" aria-hidden="true"></span> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="portfolio-1-col.html">Team :{{$user_data['team']}}</a>
                                <a role="separator" class="dropdown-item divider" style="color: white;"></a>
                                <a class="dropdown-item" href="portfolio-2-col.html">Points :{{$user_data['points']}}</a>
                                <a class="dropdown-item" href="portfolio-3-col.html">Team points :{{$user_data['teamp']}}</a>
                                <a class="dropdown-item" href="portfolio-4-col.html">Rating :{{$user_data['ratings']}}</a>
                                <a class="dropdown-item" href="{{action('Registration@getLogout')}}"><span class="glyphicon glyphicon-stop" style="color: red;" aria-hidden="true"></span> Log out</a>
                            </div>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="#menu-toggle" class="nav-link" id="menu-toggle" href="#"> </a>
                    </li>
                </div>
            </div>
        </nav>


        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            username : {{ucfirst(session('name'))}}
                        </a>
                    </li>
                    <li role="separator" class="divider" style="color: white;"></li>
                    <li>
                        <a href="#">Current Temp : {{$temp}}</a>
                    </li>
                    <li>
                        <a href="#">Max Temp : {{$max_temp}}</a>
                    </li>
                    <li>
                        <a href="#">Min Temp :{{$temp_min}}</a>
                    </li>
                    <li>
                        <a href="#">Humidity  : {{$humidity}}</a>
                    </li>
                    <li>
                        <a href="#">Current Pres : {{$pressure}}</a>
                    </li>
                    <li>
                        <a href="#">Weather :{{$weather}}</a>
                    </li>
                    <li>
                        <a href="#">Wind Speed :{{$speed}}</a>
                    </li>
                    <li>
                        <a href="#">Date :{{$date}}</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->


            <header>
                <!-- image roler !-->
            </header>

            <!-- Page Content -->
            <div class="container" style="margin-top: 4%">

                <h1 class="my-4" >{{ucfirst(session('name'))}} ,These are the recomended plants</h1>

                <!-- Portfolio Section -->

                <div class="row">
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="{{asset('img/'.$plant_ar['plant1'])}}" alt="plant one"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">{{$plant_ar['name1']}}</a></h4>
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Speed</td>
                                            <td>{{$plant1->speed}}</td>
                                        </tr>
                                        <tr>
                                            <td>Resilience</td>
                                            <td>{{$plant1->resil}}</td>
                                        </tr>
                                        <tr>
                                            <td>Profitability</td>
                                            <td>{{$plant1->prof}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="{{asset('img/'.$plant_ar['plant2'])}}" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">{{$plant_ar['name2']}}</a></h4>
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Speed</td>
                                            <td>{{$plant2->speed}}</td>
                                        </tr>
                                        <tr>
                                            <td>Resilience</td>
                                            <td>{{$plant2->resil}}</td>
                                        </tr>
                                        <tr>
                                            <td>Profitability</td>
                                            <td>{{$plant2->prof}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top img-fluid" src="{{asset('img/'.$plant_ar['plant3'])}}" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">{{$plant_ar['name3']}}</a></h4>
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Speed</td>
                                            <td>{{$plant3->speed}}</td>
                                        </tr>
                                        <tr>
                                            <td>Resilience</td>
                                            <td>{{$plant3->resil}}</td>
                                        </tr>
                                        <tr>
                                            <td>Profitability</td>
                                            <td>{{$plant3->prof}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <!-- Features Section -->

                <!-- /.row -->

                <hr>

                <!-- Call to Action Section -->
            </div>
            <!-- /.container -->

            <!-- Footer -->
            <footer class="py-5 bg-inverse">
                <div class="container">
                    <p class="m-0                                                                                                        text-center text-white">Copyright &c                                                                                                    opy; GROVR 2017</p>
                </div>
                <!-- /.container -->
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="{{asset('js/jquery/jquery.min.js')}} "></script>
            <script src="{{asset('js/tether/tether.min.js')}} "></script>
            <script src="{{asset('js/btjs/bootstrap.min.js')}} "></script>
            <script>
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
            </script>
    </body>

</html>
