{{-- owner modal --}}
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- Modal Elder -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    4. New TIP Application
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="badgeTIP">
                        <span class="badge text-bg-tip">1.Driver</span>
                        <span class="badge text-bg-tip">2.Vehicle</span>
                        <span class="badge text-bg-tip">3.Trailer</span>
                        <span class="badge text-bg-tips">4.Owner</span>
                        <span class="badge text-bg-tip">5.Other Goods</span>
                    </div>
                    <div class="userRegistration tipFORM">
                        <form action="" method="POST" class="">
                            <div class="newTIPForms">
                                <!-- insert checkbox and label i am the owner of the vehicle -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked name="owner" />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I Am The Owner
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="owner_lastname" />
                                    <label for="floatingInput">Owner Last Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="owner_firstname" />
                                    <label for="floatingInput">Owner First Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control tipInput" id="floatingInput"
                                        placeholder="" name="owner_country" />
                                    <label for="floatingInput">Owner Address</label>
                                </div>

                                <div class="formSignup">
                                    <button type="button" class="btn btnColor signUpTIP"
                                        data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">
                                        Back
                                    </button>
                                    <button type="button" class="btn btnColor signUpTIP"
                                        data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">
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
{{-- owner modal ends --}}
