<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    Registration Form
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="userRegistration">
                        <form action="" method="POST">
                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formSignup last_name" id="floatingInput"
                                        placeholder="Masaya" />
                                    <label for="floatingInput">Last Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formSignup phone" id="floatingInput"
                                        placeholder="+263777492142" />
                                    <label for="floatingInput">Phone Number</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formSignup first_name" id="floatingInput"
                                        placeholder="Kudakwashe" />
                                    <label for="floatingInput">First Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control formSignup password" id="password"
                                        placeholder="******" />
                                    <label for="floatingInput">Password</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formSignup passport" id="passport"
                                        placeholder="Kudakwashe" />
                                    <label for="floatingInput">Passport Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control formSignup password_confirmation"
                                        id="password_confirmation" placeholder="*******" />
                                    <label for="floatingInput">Confirm Password</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control formSignup email" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput">Email Address</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn btnColor signUpBtn"
                                        onclick="handleRegistration()">
                                        Signup
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
