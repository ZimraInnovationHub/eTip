{{-- vehicle modal --}}
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    2. New TIP Application
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    @include('partials.tabs')
                    <div class="userRegistration tipFORM">
                        <form action="" method="POST" class="">
                            <div class="newTIPForms">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="make" />
                                    <label for="floatingInput">Vehicle Make/Model</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select body_type" id="floatingSelect"
                                        aria-label="Floating label select example" name="body">
                                        <option value="SUV" selected>SUV</option>
                                        <option value="Minivan">Minivan</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="Coupe">Coupe</option>
                                    </select>
                                    <label for="floatingSelect">Vehicle Body Type</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput class" id="floatingInput"
                                        placeholder="" name="class" />
                                    <label for="floatingInput">Class</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput registration" id="floatingInput"
                                        placeholder="" name="reg_number" />
                                    <label for="floatingInput">Registration Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput chasis" id="floatingInput"
                                        placeholder="" name="chassis_number" />
                                    <label for="floatingInput">Chasis Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput capacity" id="floatingInput"
                                        placeholder="" name="engine_capacity" />
                                    <label for="floatingInput">Engine Capacity</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput country_of_manufacture"
                                        id="floatingInput" placeholder="" name="country_of_manu" />
                                    <label for="floatingInput">Country of Manufacture</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput country_code" id="floatingInput"
                                        placeholder="" name="country_code" />
                                    <label for="floatingInput">Country of Manufacture Code</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput year" id="floatingInput"
                                        placeholder="" name="y_o_m" />
                                    <label for="floatingInput">Year Of Manufacture</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput value" id="floatingInput"
                                        placeholder="" name="value" />
                                    <label for="floatingInput">Vehicle Value</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select currency" id="floatingSelect"
                                        aria-label="Floating label select example" name="currency">
                                        <option selected>ZWL</option>
                                        <option value="1">USD</option>
                                        <option value="2">Rands</option>
                                        <option value="3">UERO</option>
                                    </select>
                                    <label for="floatingSelect">Currency</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="insurance" />
                                    <label for="floatingInput">Insurance Company</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn btnColor signUpTIP"
                                        data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                                        Back
                                    </button>
                                    <button type="button" class="btn btnColor signUpTIP" data-bs-toggle="modal"
                                        onclick="addVehicleDetails()">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- forms ends -->
        </div>
    </div>
</div>
{{-- end vehicle modal --}}
