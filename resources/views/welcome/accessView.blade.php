{{--<section id="hero" class="d-flex align-items-center">--}}
    @if($formType === 'login')
        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">{{--start content--}}
        <h1>Bienvenido</h1>
        <h2>¿Que te gustaría leer hoy?</h2>
        <div class="container d-flex flex-column align-items-center">
            <br>
            <input type="text" id='emailOrNameLoginField' name="emailOrName" class="form-control col-md-3 col-lg-3" {{--id="searcher"--}} size="30" placeholder="Username or E-mail"/>
            <br>
            <input type="password" id='passwordLoginField' name="password" class="form-control col-md-3 col-lg-3" {{--id="searcher"--}} size="30" placeholder="Password"/>
        </div>
        <a href="/home" class="btn-about">LOG IN</a>
        <br>
        <div><h5><a href="#" class="my-a" onclick="toSignup()" {{--style ="visibility: visible"--}}>Do you need an account?</a></h5></div>
        {{--        <div><h5><a href="" class="my-a" onclick="loadFields({{ $formType }})">Do you need an account?</a></h5></div>--}}
        <br>
        <table>
            <tr>
                <th><h2>Guest mode:</h2></th>
                <td>
                    <label class="switch" >
                        <input type="checkbox" onclick="loadUnloadGuestCredentials()">
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
        </table>
        {{--        <a href="/home" class="btn-about">GO</a>--}}
        {{--        <br>--}}
        {{--        <div><h5><a href="" class="my-a" onclick="loadFields()">Do you need an account?</a></h5></div>--}}
        {{--        <br>--}}
        {{--        <table>--}}
        {{--            <tr>--}}
        {{--                <th><h2>Guest mode:</h2></th>--}}
        {{--                <td>--}}
        {{--                    <label class="switch" >--}}
        {{--                        <input type="checkbox" onclick="loadUnloadGuestCredentials()">--}}
        {{--                        <span class="slider round"></span>--}}
        {{--                    </label>--}}
        {{--                </td>--}}
        {{--            </tr>--}}
        {{--        </table>--}}
        {{--    </div>--}}
</div>{{--end content--}}
@elseif($formType === 'signup')
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">{{--start content--}}
    {{--    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">--}}
    <h1>REGISTRO</h1>
    {{--        <h2>¿Que te gustaría leer hoy?</h2>--}}
    <table style="empty-cells: show;">

        <tr>
            <th><a href="#" onclick="toLogin()"><img src="/assets/img/back-button.png" height="100px"></a></th>
            <td colspan="6" {{--bgcolor="#009966"--}} height="5" width="70">&nbsp;</td>
            <td colspan="6" {{--bgcolor="#FFFF00"--}} height="5" width="70">&nbsp;</td>
            <td colspan="6" {{--bgcolor="#009966"--}} height="5" width="70">&nbsp;</td>
            {{--                <th><h2>space_space</h2></th>--}}
            <th><h2>Administrador:</h2></th>
            <td>
                <label class="switch" >
                    <input type="checkbox" onclick="switchAdminMode()">
                    <span class="slider round"></span>
                </label>
            </td>
        </tr>
    </table>

    <div class="container d-flex flex-column align-items-center">
        <br>
        <input type="text" id='emailOrNameLoginField' name="emailOrName" class="form-control col-md-3 col-lg-3" {{--id="searcher"--}} size="30" placeholder="Username or E-mail"/>
        <br>
        <input type="password" id='passwordLoginField' name="password" class="form-control col-md-3 col-lg-3" {{--id="searcher"--}} size="30" placeholder="Password"/>
        <div id="adminMode" class="{{--form-control--}} col-md-3 col-lg-3">
            <br>
            <input type="text" id='adminCode' name="adminCode" class="form-control {{--col-md-3 col-lg-3--}}" data-aos="fade-left"{{--id="searcher"--}} style="visibility: hidden" size="30" placeholder="Admin code"/>
{{--            <br>--}}
{{--            <input type="text" id='adminCode' name="adminCode" class="form-control col-md-3 col-lg-3" id="searcher" size="30" placeholder="Admin code"/>--}}
        </div>
        <br>
    </div>
    {{--        <table>--}}
    {{--            <tr>--}}
    {{--                <th><h2>Administrador:</h2></th>--}}
    {{--                <td>--}}
    {{--                    <label class="switch" >--}}
    {{--                        <input type="checkbox" onclick="loadUnloadGuestCredentials()">--}}
    {{--                        <span class="slider round"></span>--}}
    {{--                    </label>--}}
    {{--                </td>--}}
    {{--            </tr>--}}
    {{--        </table>--}}
    <a href="/home" class="btn-about">SIGN UP</a>
    </div>{{--end content--}}
    <script>
        var adminMode = false;
        // var adminMode = false;
        function switchAdminMode() {
            adminMode = !adminMode;
            var adminUrl = (adminMode)? 'adminModeOn':'adminModeOff';
            $.ajax({
                url: ('/index/' + adminUrl),
            })
                .done(function( data ) {
                    $('#adminMode').html(data);
                });
        }

        function switchAdminMode2() {
            adminMode = !adminMode;
            var adminModeVisibility = (adminMode)? 'visible':'hidden';
            $("#adminMode").css("visibility", adminModeVisibility);
        }
    </script>
{{--    </section>--}}
@elseif($formType === 'adminModeOn')
    <br>
    <input type="text" id='adminCode' name="adminCode" class="form-control {{--col-md-3 col-lg-3--}}" data-aos="fade-left" {{--id="searcher"--}} size="30" placeholder="Admin code"/>
@elseif($formType === 'adminModeOff')
        <br>
        <input type="text" id='adminCode' name="adminCode" class="form-control {{--col-md-3 col-lg-3--}}" data-aos="fade-left"{{--id="searcher"--}} style="visibility: hidden" size="30" placeholder="Admin code"/>
@endif
{{--        <h4>{{ $formType }}</h4>--}}

{{--</div>--}}
