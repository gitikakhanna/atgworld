<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/skeleton.css')}}?v={{filemtime('css/skeleton.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        <div id="hub-page-wrapper"> 
            @if(session()->has('flashSuccess'))
                <div class="execution-message success">
                    <p class="lead">Perfect!</p>
                    <hr>
                    <div class="message">
                        {{session('flashSuccess')}}
                    </div>
                </div>
            @elseif($errors->any())
                <div class="execution-message danger">
                    <p class="lead">Something went wrong :(</p>
                    <hr>
                    <div class="message">
                        {{session('flashFailure')}}
                    </div>
                </div>
            @endif
        </div>
            <div class="container">
                <div class="row">
                <div class="col-12">
                <h3 class="text-uppercase">Form</h3>
                <form method="post" action="/atg/add" enctype="multipart/form-data">
                    <label class="mt-4">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Add Name" aria-label="Team Member name">

                    <label class="mt-4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="you@example.com" aria-label="Designation">
                    
                    <label class="mt-4">Pincode</label>
                    <input type="text" class="form-control" name="pincode" placeholder="110091" aria-label="Designation">
                    
                    {{csrf_field()}}
                    <button class="btn btn-primary mt-5 w-100" type="submit">Submit</button>
                </form>
            </div>
                </div>
            </div>
        </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.execution-message').delay(5000).fadeOut(750);
        });
    </script>
    </body>
</html>
