@extends('welcome.layout')
@section('menu')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li @yield('activeResume')><a href="/resume">Noticias</a></li>
            <li @yield('activeHome')><a href="/home">Novedades</a></li>
            {{--        <li class="active"><a href="/about">About</a></li>--}}
            <li @yield('activeTop')><a href="/bookTier">Top</a></li>
            <li @yield('activeBookList')><a href="/bookList">Libros</a></li>
            <li @yield('activeServices')><a href="/services">Comunidad</a></li>
            <li @yield('activePersonal')><a href="/personal">Personal</a></li>
            <li><p>          </p></li>
            <li>
                <form onsubmit="search()" role="form" class="php-email-form">
{{--                <form action="/books" method="post" role="form" class="php-email-form" --}}{{--enctype="multipart/form-data"--}}{{-->--}}
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="title" class="form-control" id="searcher" size="100" placeholder="Buscar libro..." {{--data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres"--}}
                                @if(isset($keyword))
                                    value="{{ $keyword }}" autofocus onfocus="this.selectionStart = this.selectionEnd = this.value.length;"
                                @endif
                            />
{{--                            <div class="validate"></div>--}}
                        </div>
                    </div>
                </form>
{{--                <script>--}}
{{--                    function search(type, order) {--}}
{{--                        type = '/' + (typeof type !== 'undefined' ? type : 'title');--}}
{{--                        order = '/' + (typeof order !== 'undefined' ? order : 'desc');--}}
{{--                        $.ajax({--}}
{{--                            url: "resultsBookView/" + $('#searcher').val() + type + order,--}}
{{--                            // url: "resultsBookView/" + $('#searcher').val() + "/title/desc",--}}
{{--                        })--}}
{{--                            .done(function( data ) {--}}
{{--                                $('#main').html(data)--}}
{{--                            });--}}
{{--                    }--}}
{{--                </script>--}}
            </li>
        </ul>
    </nav><!-- .nav-menu -->

{{--    <div class="header-social-links">--}}
{{--        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>--}}
{{--        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>--}}
{{--        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>--}}
{{--        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>--}}
{{--        <button class="btn"><i class="fa fa-home"></i></button>--}}

{{--        <a href="/login/index" --}}{{----}}{{--class="linkedin"--}}{{----}}{{--><i class="fa fa-sign-in"></i></a>--}}
{{--        <a href="/login/index" --}}{{----}}{{--class="linkedin"--}}{{----}}{{--><i id="loginb"></i></a>--}}
{{--    </div>--}}

@stop
@section('content')
    <main id="main">
{{--        @yield('content')--}}
    </main>
@stop

