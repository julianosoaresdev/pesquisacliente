<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

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
                <div class="card" style="margin-top:20px;">
                    <div class="card-body">
                        <p class="text-center">
                            <img src="{{ Request::root() }}/img/logo.png" class="logo" alt="">
                        </p>
                        
                        <p class="tit-login">Estatística</p>
                        
                        <div class="card" style="margin-bottom:20px;">
                            <div class="card-body text-center">
                                <h5>MÉDIA GERAL</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Questão 1<br><span class="badge badge-secondary">{{$m1}}</span></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Questão 2<br><span class="badge badge-secondary">{{$m2}}</span></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Questão 3<br><span class="badge badge-secondary">{{$m3}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom:20px;">
                            <div class="card-body text-center">
                                <h5>MÉDIA POR CLIENTE</h5>
                                <hr>
                                <div class="row">
                                    {!! $mc !!}
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom:20px;">
                            <div class="card-body text-center">
                                <h5>TOTAL DE PROJETOS</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="badge badge-secondary">{{$totalpro}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom:20px;">
                            <div class="card-body text-center">
                                <h5>TOTAL DE PROJETOS POR CLIENTE</h5>
                                <hr>
                                <div class="row">
                                    @foreach($totalproporcli as $tpc)
                                    <div class="col-md-4">
                                        {{$tpc->cliente}} <span class="badge badge-secondary">{{$tpc->total_project}}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        
                        <div class="card" style="margin-bottom:20px;">
                            <div class="card-body text-center">
                                <h5>COMPILADO DAS RESPOSTAS DE CAMPOS ABERTO</h5>
                                <hr>
                                <div class="row">

                                    <div class="col-md-6">
                                        {!! $aberta1 !!}
                                    </div>

                                    <div class="col-md-6">
                                        {!! $aberta2 !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ Request::root() }}/js/actions.js"></script>


    </body>
</html>
