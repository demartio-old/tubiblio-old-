@extends('welcome.layout')
@section('content')
{{--    <section id="prueba" class="d-flex align-items-center">--}}
{{--        <h1 onclick="loadFields()">Bienvenido</h1>--}}
{{--    </section>--}}
        <section id="hero" class="d-flex align-items-center">
        {{--        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">--}}
        {{--            <h1>Bienvenido</h1>--}}
        {{--            <h2>¿Que te gustaría leer hoy?</h2>--}}
        {{--            <div class="container d-flex flex-column align-items-center">--}}
        {{--                <br>--}}
        {{--                <input type="text" id='emailOrNameLoginField' name="emailOrName" class="form-control col-md-3 col-lg-3" --}}{{--id="searcher"--}}{{-- size="30" placeholder="Username or E-mail"/>--}}
        {{--                <br>--}}
        {{--                <input type="password" id='passwordLoginField' name="password" class="form-control col-md-3 col-lg-3" --}}{{--id="searcher"--}}{{-- size="30" placeholder="Password"/>--}}
        {{--            </div>--}}
        {{--            <a href="/home" class="btn-about">GO</a>--}}
        {{--            <br>--}}
        {{--            <div><h5><a href="" class="my-a" onclick="showSwitchValue()">Do you need an account?</a></h5></div>--}}
        {{--            <br>--}}
        {{--            <table>--}}
        {{--                <tr>--}}
        {{--                    <th><h2>Guest mode:</h2></th>--}}
        {{--                    <td>--}}
        {{--                        <label class="switch" >--}}
        {{--                            <input type="checkbox" onclick="loadUnloadGuestCredentials()">--}}
        {{--                            <span class="slider round"></span>--}}
        {{--                        </label>--}}
        {{--                    </td>--}}
        {{--                </tr>--}}
        {{--            </table>--}}
        {{--        </div>--}}
    </section>

<script>

    document.addEventListener('readystatechange', event => {
        // alert('alreadyLoaded var : ' + alreadyLoaded);
        // document.addEventListener('readystatechange', event => {
            if (event.target.readyState === "complete") {
                // if (alreadyLoaded === false) {
                //     alreadyLoaded = true;
                //     alreadyLoaded = true;
                    toLogin();
                    // alert('debug login');
                    // alert('debug signup');
                    // toSignup()
                // }
            }
        });
</script>
@stop
