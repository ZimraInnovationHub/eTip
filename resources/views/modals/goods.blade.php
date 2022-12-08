{{-- goods modal --}}
<div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <!-- forms -->
            <div class="modal-header">
                <h1 class="modal-title fs-5 regModal" id="staticBackdropLabel">
                    5. New TIP Application
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="badgeTIP">
                        <span class="badge text-bg-tip">1.Driver</span>
                        <span class="badge text-bg-tip">2.Vehicle</span>
                        <span class="badge text-bg-tip">3.Trailer</span>
                        <span class="badge text-bg-tip">4.Owner</span>
                        <span class="badge text-bg-tips">5.Other Goods</span>
                    </div>
                    <div class="userRegistration otherAdd">
                        <div class="addOther mb-2">
                            <button type="button" class="btn btnColor addOtherTIP">
                                Add Item
                            </button>
                            <!-- href="#addItem"
                        data-bs-toggle="modal" -->
                        </div>
                        <form action="" method="POST" class="">
                            <div class="items-content">
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control formAdd" id="desc"
                                                name="desc" />
                                            <label for="floatingInput">Description</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control formAdd" id="serial"
                                                name="serial_number" value="123121" />
                                            <label for="floatingInput">Serial Number</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="currency"
                                                aria-label="Floating label select example" name="goods_value">
                                                <option selected>USDs</option>
                                                <option value="1">ZWL Bond Notes</option>
                                                <option value="2">ZWL RTGs</option>
                                                <option value="2">Gold Coin</option>
                                            </select>
                                            <label for="floatingSelect">Currency</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control formAdd" id="value"
                                                name="goods_currency" value="200" />
                                            <label for="floatingInput">Value</label>
                                        </div>
                                    </div>

                                    <div class="col"></div>
                                </div>
                            </div>

                            <div class="declarations">
                                <div class="declarationHeading">
                                    <div class="instructions">
                                        <h4>Driver's Declaration and Undertaking</h4>
                                    </div>
                                    <div class="instructions">
                                        <p class="textDeclarations">
                                            (Tick the checkbox to proceed to submit)
                                        </p>
                                    </div>
                                </div>

                                <div class="declare">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" />
                                        <label class="form-check-label textDeclarations" for="flexCheckChecked">
                                            I, hereby declare that I am a bona-fide visitor to
                                            Zimbabwe and undertake, in respect of the vehicle(s)
                                            and other goods on this permit:
                                        </label>
                                    </div>

                                    <ul>
                                        <li class="textDeclarations">
                                            not to sell, pledge or otherwise dispose of them in
                                            Zimbabwe; and
                                        </li>
                                        <li class="textDeclarations">
                                            not to allow them to be used by any resident of
                                            Zimbabwe; and
                                        </li>
                                        <li class="textDeclarations">
                                            to remove them from Zimbabwe on expiry of this
                                            permit, or on my departure from Zimbabwe whichever
                                            is the earlier.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br />
                            <div class="submitOther">
                                <button type="button" class="btn btnColor signUpTIP"
                                    data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
                                    Back
                                </button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btnColor addOtherTIP" data-bs-target="#"
                                    data-bs-toggle="modal">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- forms ends -->
        </div>
    </div>
</div>
{{-- goods modal ends --}}
