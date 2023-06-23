{{-- owner modal --}}
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- Modal Elder -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    4. New TIP Application
                </h1>
                <button type="button" class=" text-white font-bold text-lg" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="forMobileView">
                        @include('partials.otabs')
                        <div class="userRegistration tipFORM">
                            <form action="" method="POST" class="">
                                <div class="newTIPForms">
                                    <!-- insert checkbox and label i am the owner of the vehicle -->
                                    <div class="form-check">
                                        <input class="form-check-input iao" type="checkbox" value="" id="flexCheckChecked" onclick="amOwner()" name="owner" />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            I Am The Owner
                                        </label>
                                    </div>
                                    <div id="amowner" hidden>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput owner_lastname" id="floatingInput" placeholder="" name="owner_lastname" />
                                            <label for="floatingInput">Owner Last Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput owner_firstname" id="floatingInput" placeholder="" name="owner_firstname" />
                                            <label for="floatingInput">Owner First Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control tipInput owner_address" id="floatingInput" placeholder="" name="owner_country" />
                                            <label for="floatingInput">Owner Address</label>
                                        </div>

                                    </div>

                                    <div class="flex justify-between">
                                        <button type="button" class="btn bg-[#009933] text-white hover:bg-black" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">
                                            Back
                                        </button>
                                        <button type="button" class="btn bg-[#009933] text-white hover:bg-black" onclick="addOwnerDetails()">
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
{{-- owner modal ends --}}