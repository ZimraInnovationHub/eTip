@extends('layouts.app')
@section('content')
<div class="container">
    <div class="loginContainer">
        <div class="col-md-7 cText">
            <!-- etip image and about -->

            <h4 class="hFour">ZIMRA e-Tip</h4>

            <div class="details">
                <div class="flex justify-center ">
                    <img src="{{ asset('images/tiplogo.png') }}" class="h-40 w-40" />
                </div>
                <div class="flex justify-center ">
                    <p class="text-green-500 text-xl text-justify ml-4 mt-6 txtFont">
                        The ZIMRA eTIP platform seeks to make it convenient and quick
                        for visitors coming to Zimbabwe to apply for their vehicle
                        Temporary Import Permits online, from anywhere in the world
                        prior to their arrival at the border post
                    </p>

                </div>
                <div class="ml-4 mt-8">
                    <a href="#" class="text-xl text-green-600 hover:text-black txtFont">How To Apply?</a> &nbsp; &nbsp;
                    <a href="#" class="text-xl text-green-600 hover:text-black txtFont">Requirements</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 justifyForm">
            <!-- login form -->
            <!-- <h4 class="hFourSmall">ZIMRA e-Tip</h4> -->
            <form method="POST" action="login" class="checkForm">
                @csrf
                <div class="formInputs">
                    <h4 class="loginHeading">Login</h4>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control formLength passport " name="passport" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput txtFont">Passport</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control formLength password " name="password" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword txtFont">Password</label>
                    </div>

                    <br />

                    <div class="hrefButtons">
                        <a href="#" class="hrefClicks txtFont" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Signup</a>
                        <a href="#" class="hrefClicks txtFont">Forgot Password</a>
                    </div>

                    <div class="flex justify-center">
                        <button class="btn bg-[#009933] hover:bg-black text-white w-[150px] text-2xl g-recaptch btnFont" type="submit">
                            Login
                        </button>

                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- uncomment to show recapture -->
                    <!-- <div class="g-recaptcha" data-sitekey="6Lfl3mcjAAAAACvyp41pc3KDglEOIfM6MZiYLH74" data-theme="light" data-callback="rCaptcha"></div> -->



                    <br />

                </div>
            </form>

        </div>
    </div>
</div>
@include('modals.register')

{{-- <script type="">
        //login
        const handleLogin = async (e) => {
            
            // e.preventDefault();
            const passport = document.querySelector(".passport").value;
            const password = document.querySelector(".password").value;

            const details = {
                passport: passport,
                password: password,
            };

            await axios
                .post(api + "login", details)
                .then((response) => {
                    return api + "/home";
                })
                .catch(function(error) {
                    console.log(error.response.data);
                });
        };

    </script> --}}
@endsection