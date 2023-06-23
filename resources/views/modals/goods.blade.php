{{-- goods modal --}}
<div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    5. New TIP Application
                </h1>
                <button type="button" class="text-white font-bold text-lg" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="forMobileView">
                        @include('partials.other')
                        <div class="addingMoreItems">



                            <form action="" method="POST">
                                <div class="col mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control formAdd other_description" id="desc" name="desc" />
                                        <label for="floatingInput">Description</label>
                                    </div>
                                </div>
                                <div class="col mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control formAdd other_serialNumber" id="serial" name="serial_number" value="123121" />
                                        <label for="floatingInput">Serial Number</label>
                                    </div>
                                </div>
                                <div class="col mt-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select formAdd other_currency" id="currency" aria-label="Floating label select example" name="goods_value">
                                            <option selected>USDs</option>
                                            <option value="1">ZWL Bond Notes</option>
                                            <option value="2">ZWL RTGs</option>
                                            <option value="2">Gold Coin</option>
                                        </select>
                                        <label for="floatingSelect">Currency</label>
                                    </div>
                                </div>

                                <div class="col mt-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control formAdd other_value" id="value" name="goods_currency" value="200" />
                                        <label for="floatingInput">Value</label>
                                    </div>
                                </div>

                                <div class="col"></div>

                                <div class="flex ">
                                    <button type="button" class="btn bg-[#009933] w-[150px] text-white hover:bg-black">
                                        Add Item
                                    </button>
                                </div>


                            </form>

                            <div class="declarations">
                                <h4 class="hFour dClare">Driver's Declaration and Undertaking</h4>
                                <p class="txtFont dClare">
                                    (Tick the checkbox to proceed to submit)
                                </p>

                                <div class="declare">
                                    <div class="form-check">
                                        <input class="form-check-input iAggre" type="checkbox" value="" id="flexCheckChecked" />
                                        <label class="form-check-label txtFont font-bold" for="flexCheckChecked">
                                            I, hereby declare that I am a bona-fide visitor to
                                            Zimbabwe and undertake, in respect of the vehicle(s)
                                            and other goods on this permit:
                                        </label>
                                    </div>

                                    <ol class="txtFont text-black listStyle">
                                        <li>
                                            not to sell, pledge or otherwise dispose of them in
                                            Zimbabwe; and
                                        </li>
                                        <li>
                                            not to allow them to be used by any resident of
                                            Zimbabwe; and
                                        </li>
                                        <li>
                                            to remove them from Zimbabwe on expiry of this
                                            permit, or on my departure from Zimbabwe whichever
                                            is the earlier.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="flex btnSubmit">
                                <button type="button" class="btn bg-[#009933] text-white hover:bg-black" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
                                    Back
                                </button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn bg-[#009933] text-white hover:bg-black" onclick="addOtherDetails()">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- forms ends -->
        </div>
    </div>
</div>
{{-- goods modal ends --}}