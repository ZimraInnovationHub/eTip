<div class="col-md-5 justifyForm">
    <!-- login form -->
    <!-- <h4 class="hFourSmall">ZIMRA e-Tip</h4> -->
    <form method="post" action="login" class="checkForm">
        @csrf
        <div class="formInputs">
            <h4>Login</h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control formLength passport" name="passport" id="floatingInput" placeholder="name@example.com" />
                <label for="floatingInput">Passport</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control formLength password" name="password" id="floatingPassword" placeholder="Password" />
                <label for="floatingPassword">Password</label>
            </div>

            <br />

            <div class="hrefButtons">
                <a href="#" class="hrefClicks" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Signup</a>
                <a href="#" class="hrefClicks">Forgot Password</a>
            </div>

            <div class="flex justify-center">
                <button class="btn bg-[#009933] hover:bg-black text-white w-[120px] g-recaptch" type="submit">
                    Login
                </button>

            </div>



            <br />

        </div>
    </form>