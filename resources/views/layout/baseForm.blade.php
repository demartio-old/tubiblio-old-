@extends('welcome.menu')
@section('activePersonal')
    class="active"
@stop
@section('content')
    <div class="container" data-aos="fade-up">
        <div class="row mt-5">
            <div class="col-lg-8 mt-5 mt-lg-0">
                <br>
                <br>
                <br>
                <form action="/books" method="post">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="title:">Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="col-md-6 form-group">
                            {{csrf_field()}}
{{--                            {{csrf_field}}--}}
                            <input type="submit"    name="enviar" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
