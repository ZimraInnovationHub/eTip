{{-- personal details modal --}}
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    1. New TIP Application
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
                                    <select class="form-select title" id="floatingSelect"
                                        aria-label="Floating label select example" name="title">
                                        <option value="Mr." selected>Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>
                                    <label for="floatingSelect">Select Title</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput last_name" id="floatingInput"
                                        placeholder="Masaya" name="lastname" />
                                    <label for="floatingInput">Surname</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput first_name" id="floatingInput"
                                        placeholder="Kudakwashe" name="firstname" />
                                    <label for="floatingInput">Forenames</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control tipInput email" id="floatingInput"
                                        placeholder="masayakudakwashe@gmail.com" name="email" />
                                    <label for="floatingInput">Email Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput phone" id="floatingInput"
                                        placeholder="+263777492142" name="phone" />
                                    <label for="floatingInput">Phone Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput address" id="floatingInput"
                                        placeholder="Address" name="address" />
                                    <label for="floatingInput">Physical Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput passport" id="floatingInput"
                                        placeholder="123456KM" name="passport" />
                                    <label for="floatingInput">Passport Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput country" id="floatingInput"
                                        placeholder="Zimbabwe" name="country" />
                                    <label for="floatingInput">Country of Residence</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput country_code" id="floatingInput"
                                        placeholder="ZW" name="intended_code" />
                                    <label for="floatingInput">Country Code</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput nationality" id="floatingInput"
                                        placeholder="Nationality" name="nationality" />
                                    <label for="floatingInput">Country of Nationality</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput nationality_code"
                                        id="floatingInput" placeholder="Code" name="nationality_code" />
                                    <label for="floatingInput">Nationality Code</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput intended_address"
                                        id="floatingInput" placeholder="Address" name="zimbabwean_address" />
                                    <label for="floatingInput">Zimbabwean Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control tipInput intended_date_of_travel"
                                        id="floatingInput" placeholder="Date" name="intended_date_of_travel" />
                                    <label for="floatingInput">Intended Date of Travel</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput intended_port"
                                        id="floatingInput" placeholder="Port" name="intended_port" />
                                    <label for="floatingInput">Intended Port of Entry</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput intended_port_code"
                                        id="floatingInput" placeholder="Port_Code" name="intended_port_code" />
                                    <label for="floatingInput">Intended Port of Entry Code</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn btnColor signUpTIPFirst" id="addPersonal"
                                        onclick="addPersonalDetails()">
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
{{-- end personal details modal --}}
