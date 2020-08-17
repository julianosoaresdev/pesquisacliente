<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ Request::root() }}/sis/fontawesome-free-5.12.1/css/all.css" >
        <link rel="stylesheet" href="{{ Request::root() }}/sis/fontawesome-free-5.12.1/css/v4-shims.css" >
        <script defer src="{{ Request::root() }}/sis/fontawesome-free-5.12.1/js/fontawesome.js"></script>
        <script defer src="{{ Request::root() }}/sis/fontawesome-free-5.12.1/js/v4-shims.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ Request::root() }}/css/estilo.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width:18rem;margin:0 auto;margin-top:200px;">
                    <div class="card-body">
                        <p class="text-center">
                            <img src="{{ Request::root() }}/img/logo.png" class="logo" alt="">
                        </p>

                        <p class="tit-login">Login</p>
                        <form method="POST" name="frmLogin" onsubmit="return false;">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-login" >Entrar</button>
                            </div>
                            <div class="form-group">
                                <div id="boxMsg"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ Request::root() }}/js/login.js"></script>

    </body>
</html>
