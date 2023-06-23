{{-- trailer modal --}}
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    3. New TIP Application
                </h1>
                <button type="button" class="text-white text-lg font-bold" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="forMobileView">
                        @include('partials.ttabs')
                        <div class="userRegistration tipFORM">
                            <form action="" method="POST" class="">
                                <div class="newTIPForms">
                                    <!-- inset checkbox and label i have a trailer -->
                                    <div class="form-check">
                                        <input class="form-check-input yes_iht" onclick="Tchecked()" type="checkbox" value="" id="flexCheckChecked" name="insurance" />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            I Have A Trailer
                                        </label>
                                    </div>
                                    <div class="trailer_details  trailerForm" hidden>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tmake" id="floatingInput" placeholder="" name="trailer_make" />
                                            <label for="floatingInput">Trailer Maker</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select tbody" id="floatingSelect" aria-label="Floating label select example" name="trailer_body_type">
                                                <option value="">trailer body</option>
                                                <option value="1">Caravan</option>
                                                <option value="2">Box Trailer</option>
                                                <option value="3">Flatbed Trailer</option>
                                                <option value="4">Boat Trailer</option>
                                                <option value="5">Tanker Trailer</option>
                                            </select>
                                            <label for="floatingSelect">Trailer Body</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tregistration" id="floatingInput" placeholder="" name="trailer_registration" />
                                            <label for="floatingInput">Trailer Registration Number</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tchassis" id="floatingInput" placeholder="" name="trailer_chassis" />
                                            <label for="floatingInput">Trailer Chassis Number</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tcountry_of_manufacture" id="floatingInput" placeholder="" name="trailer_country_of_manufacture" />
                                            <label for="floatingInput">Trailer Country Of Manufacture</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tcountry_code" id="floatingInput" placeholder="" name="trailer_country_code" />
                                            <label for="floatingInput">Trailer Country Of Manufacture Code</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tyear" id="floatingInput" placeholder="" name="trailer_year" />
                                            <label for="floatingInput">Trailer Year Of Manufacture</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tvalue" id="floatingInput" placeholder="" name="trailer_value" />
                                            <label for="floatingInput">Trailer Value</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tcurrency tinsurance" id="floatingInput" placeholder="" name="trailer_currency" />
                                            <label for="floatingInput">Currency(select)</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput tinsurance" id="floatingInput" placeholder="" name="trailer_insurance" />
                                            <label for="floatingInput">Trailer Insurance Company</label>
                                        </div>
                                    </div>

                                    <div class="flex justify-between">
                                        <button type="button" class="btn bg-[#009933] text-white hover:bg-black" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                                            Back
                                        </button>
                                        <button type="button" class="btn bg-[#009933] text-white hover:bg-black" id="addOwner" onclick="addTrailerDetails()">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- forms ends -->
        </div>
    </div>
</div>
{{-- trailer modal ends --}}