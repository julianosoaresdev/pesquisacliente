<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pequisa</title>

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
                <div class="card" style="width:30rem;margin:0 auto;margin-top:20px;">
                    <div class="card-body">
                        <p class="text-center">
                            <img src="{{ Request::root() }}/img/logo.png" class="logo" alt="">
                        </p>
                        
 
                        
                    <p class="tit-login">Pesquia {{$question}}</p>
                        @foreach ($arrPesquisa as $row)
                        <form method="POST" name="frmCAdPesquisa" action="{{ Request::root() }}/gravapesquisa">
                            {{ csrf_field() }}
                            <input type="hidden" name="cod_pesquisa" id="cod_pesquisa" value="{{ $row->id }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" class="@error('nome') is-invalid @enderror">
                            </div>
                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="funcao" id="funcao" placeholder="Sua função no projeto"  class="@error('funcao') is-invalid @enderror">
                            </div>
                            @error('funcao')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                {{ $row->q1 }}
                            </div>

                            <div class="form-group">
                                @for ($i = 1;  $i <= 10 ; $i++)
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="q1" id="q1{{$i}}" value="{{$i}}" >
                                        <label class="form-check-label" for="q1{{$i}}">{{$i}}</label>
                                    </div>
                                @endfor
                            </div>


                            <div class="form-group">
                                {{ $row->q2 }}
                            </div>

                            <div class="form-group">
                                @for ($i = 1;  $i <= 10 ; $i++)
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="q2" id="q2{{$i}}" value="{{$i}}" >
                                        <label class="form-check-label" for="q2{{$i}}">{{$i}}</label>
                                    </div>
                                @endfor
                            </div>


                            <div class="form-group">
                                {{ $row->q3 }}
                            </div>

                            <div class="form-group">
                                @for ($i = 1;  $i <= 10 ; $i++)
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="q3" id="q3{{$i}}" value="{{$i}}">
                                        <label class="form-check-label" for="q3{{$i}}">{{$i}}</label>
                                    </div>
                                @endfor
                            </div>

                            <div class="form-group">
                                <label>{{ $row->q4 }}</label>
                                <textarea class="form-control" name="q4" id="q4" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>{{ $row->q5 }}</label>
                                <textarea class="form-control" name="q5" id="q5" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-info btn-login" >Enviar</button>
                            </div>
                            <div class="form-group">
                                <div id="boxMsg"></div>
                            </div>
                        </form>
                        @endforeach

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
