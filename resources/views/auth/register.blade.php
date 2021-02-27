<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href={{ asset('assets/img/icons/favicon.ico' ) }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/vendor/bootstrap/css/bootstrap.min.css' ) }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ) }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/vendor/animate/animate.css' ) }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/vendor/css-hamburgers/hamburgers.min.css' ) }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/vendor/select2/select2.min.css' ) }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/css/util.css' ) }}>
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/login_v1/css/main.css' ) }}>
<!--===============================================================================================-->

<style>

.dropList *{
    border: none;
    outline: none;
    scroll-behavior: smooth;
    background:none;
}
    #message {
  display:none;
  background:none;
  color: #000;
  position: absolute;
  padding: 20px;
  margin-top: 10px;
  width:310px;
}

#message p {
  padding: 10px 7px;
  font-size: 13px;
}
#message h3 {
    font-size: 15px;
}
/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

</head>
<body>
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('assets/vendor/login_v1/images/img-01.png' ) }}" alt="IMG">
                    <div id="message">
      <h3>Password must contain the following:</h3>
      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
      <p id="number" class="invalid">A <b>number</b></p>
      <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>
				</div>
                @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
                @endif
				<form method="POST" action="{{ route('register') }}">
                @csrf
					<span class="login100-form-title">
						Member Registration
					</span>

                    <!-- name -->
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name":value="old('name')" placeholder="Name" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text"  name="email":value="old('email')" placeholder="Email" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" required autocomplete="new-password">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" required autocomplete="new-password">
						<input class="input100" type="password" id="confirm_password" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                   
            
                <x-jet-label for="user_type_selection" value="{{ __('User Type') }}" />
                
                <div>

                    <select name="user_type" id="user_type" class="input100 dropList" style="border:none;" >

                        <option value="Seller">Seller</option>
                        <option value="Buyer">Buyer</option>
                    </select>
                </div>
            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>
            </div>
					

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->	
	<script src={{ asset('assets/vendor/login_v1/vendor/jquery/jquery-3.2.1.min.js' ) }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/login_v1/vendor/bootstrap/js/popper.js' ) }}></script>
	<script src={{ asset('assets/vendor/login_v1/vendor/bootstrap/js/bootstrap.min.js' ) }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/login_v1/vendor/select2/select2.min.js' ) }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/login_v1/vendor/tilt/tilt.jquery.min.js' ) }}></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
	</script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/login_v1/js/main.js' ) }}></script>

</body>
</html>