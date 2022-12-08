{{-- trailer modal --}}
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    3. New TIP Application
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="badgeTIP">
                        <span class="badge text-bg-tip">1.Driver</span>
                        <span class="badge text-bg-tip">2.Vehicle</span>
                        <span class="badge text-bg-tips">3.Trailer</span>
                        <span class="badge text-bg-tip">4.Owner</span>
                        <span class="badge text-bg-tip">5.Other Goods</span>
                    </div>
                    <div class="userRegistration tipFORM">
                        <form action="" method="POST" class="">
                            <div class="newTIPForms">
                                <!-- inset checkbox and label i have a trailer -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked name="insurance" />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I Have A Trailer
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_make" />
                                    <label for="floatingInput">Trailer Maker</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="trailer_body">
                                        <option selected>Caravan</option>
                                        <option value="1">Box Trailer</option>
                                        <option value="2">Flatbed Trailer</option>
                                        <option value="2">Boat Trailer</option>
                                        <option value="3">Tanker Trailer</option>
                                    </select>
                                    <label for="floatingSelect">Trailer Body</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_reg_number" />
                                    <label for="floatingInput">Trailer Registration Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_chassis_number" />
                                    <label for="floatingInput">Trailer Chassis Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_country_of_manu" />
                                    <label for="floatingInput">Trailer Country Of Manufacture</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_country_code" />
                                    <label for="floatingInput">Trailer Country Of Manufacture Code</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_y_o_m" />
                                    <label for="floatingInput">Trailer Year Of Manufacture</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_value" />
                                    <label for="floatingInput">Trailer Value</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_currency" />
                                    <label for="floatingInput">Currency(select)</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="trailer_insurance" />
                                    <label for="floatingInput">Trailer Insurance Company</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn btnColor signUpTIP"
                                        data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                                        Back
                                    </button>
                                    <button type="button" class="btn btnColor signUpTIP"
                                        data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
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
{{-- trailer modal ends --}}
