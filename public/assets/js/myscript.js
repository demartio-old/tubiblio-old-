function search(type, order) {
    type = '/' + (typeof type !== 'undefined' ? type : 'title');
    order = '/' + (typeof order !== 'undefined' ? order : 'asc');
    // alert(type + '///' +  order);
    $.ajax({
        url: "resultsBookView/" + $('#searcher').val() + type + order,
        // url: "resultsBookView/" + $('#searcher').val() + "/title/desc",
    })
        .done(function( data ) {
            $('#main').html(data)
        });
}

function myFunction() {
    alert("Hello! I am an alert box!");
}

// ------------------Index------------------

    var guest = false;
    var signup = false;
    var alreadyLoaded = false;

    function reloadHtml(url, container) {

        $.ajax({
            url: url,
        })
            .done(function( data ) {
                $(container).html(data);
            });
        console.log();
    }

    function loadUnloadGuestCredentials() {
        guest = !guest;
        if (guest) {
            $('#emailOrNameLoginField').val('guest_name');
            $('#passwordLoginField').val('guest_password');
        } else {
            $('#emailOrNameLoginField').val('');
            $('#passwordLoginField').val('');
        }
    }

    function showSwitchValue() {
        guest = !guest;
        // var guest = $('.switch input').val();
        alert(guest);
    }

    // function loadFields(formType) {
    //     // var url = (signup)? '/index/signup':'/index/login';
    //     // signup = !signup;
    //     alert('DEBUG: ' + formType);
    //     var url = (formType === 'login')? '/index/signup':'/index/login';
    //     // (formType === 'login')? alert('LOGIN'):alert('SIGNUP');
    //
    //     // var url = (formType.matches('login'))? alert('login'):alert('signup');
    //     // var url = (formType.matches('login'))? '/index/signup':'/index/login';
    //     reloadHtml(url,'#hero');
    // }

    function toSignup() {
        // alert('en signup');
        reloadHtml('/index/signup','#hero');
    }
    function toLogin() {
        // alert('en login');
        reloadHtml('/index/login','#hero');
    }

    function switchLogin() {

    }

    // function toLogin() {
    //
    // }

// ------------------EndIndex------------------
