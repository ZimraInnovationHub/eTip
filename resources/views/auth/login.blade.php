@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="loginContainer">
            <div class="col-md-7 cText">
                <!-- etip image and about -->

                <h4 class="hFour">ZIMRA e-Tip</h4>

                <div class="details">
                    <div class="tipImage">
                        <img src="{{ asset('images/tiplogo.png') }}" class="shippingImage" />
                    </div>
                    <div class="detailsText">
                        <p class="detailsContent">
                            The ZIMRA eTIP platform seeks to make it convenient and quick
                            for visitors coming to Zimbabwe to apply for their vehicle
                            Temporary Import Permits online, from anywhere in the world
                            prior to their arrival at the border post
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 justifyForm">
                <!-- login form -->
                <!-- <h4 class="hFourSmall">ZIMRA e-Tip</h4> -->
                <form method="post" action="" class="checkForm">
                    <div class="formInputs">
                        <h4>Login</h4>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control formLength passport" id="floatingInput"
                                placeholder="name@example.com" />
                            <label for="floatingInput">Passport</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control formLength password" id="floatingPassword"
                                placeholder="Password" />
                            <label for="floatingPassword">Password</label>
                        </div>

                        <br />

                        <div class="hrefButtons">
                            <a href="#" class="hrefClicks" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Signup</a>
                            <a href="#" class="hrefClicks">Forgot Password</a>
                        </div>

                        <div class="btnCenter">
                            <button 
                                class="btn btnColor g-recaptcha" 
                                type="button" 
                                data-sitekey="6LcSqGcjAAAAAIengNtFb-AjHM0s95lyTOsg2ZlT"
                                data-callback='onSubmit' 
                                data-action='submit'
                                onclick="handleLogin()">
                                Login
                            </button>
                        </div>
                    </div>
                </form>

                <div class="howTo">
                    <a href="#" class="hrefClicks">How To Apply?</a> &nbsp; &nbsp;
                    <a href="#" class="hrefClicks">Requirements</a>
                </div>
            </div>
        </div>
    </div>
    @include('modals.register')
@endsection
