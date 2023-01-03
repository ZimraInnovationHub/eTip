<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    Registration Form
                </h1>
                <button type="button" class="btn-close font-bold" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="flex justify-center">
                    <h1 class="text-3xl font-bold">Account Registration</h1>
                    </div>
                    <div class="userRegistration">
                        <form action="" method="POST">
                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formRegister last_name" id="floatingInput"
                                        placeholder="Masaya" />
                                    <label for="floatingInput">Last Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formRegister phone" id="floatingInput"
                                        placeholder="+263777492142" />
                                    <label for="floatingInput">Phone Number</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formRegister first_name" id="floatingInput"
                                        placeholder="Kudakwashe" />
                                    <label for="floatingInput">First Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control formRegister password" id="password"
                                        placeholder="******" />
                                    <label for="floatingInput">Password</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formRegister passport" id="passport"
                                        placeholder="Kudakwashe" />
                                    <label for="floatingInput">Passport Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control formRegister password_confirmation"
                                        id="password_confirmation" placeholder="*******" />
                                    <label for="floatingInput">Confirm Password</label>
                                </div>
                            </div>

                            <div class="signupInputs">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control formRegister email" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput">Email Address</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn bg-[#009933] hover:bg-black text-white signUpBtn formRegister"
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
