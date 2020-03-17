

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/admin/stylelogin.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

<body>
<div id="formWrapper">

<div id="form">
<div class="logo">
<h1 class="text-center head" >فرم ورود </h1>
</div>
		<div class="form-item">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <p class="formLabel">ایمیل</p>

			<input type="email" name="email" id="email" class="form-style form-control @error('email') is-invalid @enderror" autocomplete="off" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
		<div class="form-item">
            <p class="formLabel">کلمه عبور</p>

                               

            <input type="password" name="password" id="password" class="form-style form-control @error('password') is-invalid @enderror" required autocomplete="current-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label> --}}
            <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
            @if (Route::has('password.request'))
			<p><a href="{{ route('password.request') }}" ><small>کلمه عبور خود  را فراموش کرده اید؟</small></a></p>	
                                    
            @endif
		</div>
		<div class="form-item">
        <p class="pull-left"><a href="#"><small>برو به سایت</small></a></p>
        
        {{-- <button type="submit" class="login pull-right btn">
            {{ __('Log In') }}
        </button> --}}

        <input type="submit" class="login pull-right" value="ورود">
        <a href="{{ url('login/google') }}"  class="login pull-right btn">ورود بااکانت گوگل</a>
        <div class="clear-fix"></div>
        </form>
		</div>
</div>
</div>


<script>
$(document).ready(function(){
	var formInputs = $('input[type="email"],input[type="password"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
});
</script>
</body>
</html>