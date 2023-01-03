@extends('layouts.app')

@section('content')
    @include('partials.nav')
        
    <div class="container headProfile">
        <div class="card profileAvatar" style="width: 60rem;">
            <div class="profileImage">
                <img src="images/tiplogo.png" alt="image" class="myImage">
            </div>
            <div class="profileBrief">
                <p class="textProfile">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae adipisci optio eligendi veritatis, at illo quas architecto repellat id, reprehenderit distinctio quam, maxime neque quaerat quibusdam facilis velit ducimus libero!
                </p>
            </div>
        </div>

        <div class="card profileCard" style="width: 60rem;">
            <br/>
            <h4 class="changeHeadings" style="align-self:center;">Change Password</h4>
            <br/>
            <div class="profileForms">

                    <form>
                        <div class="profileEditForms">
        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control personalDetails" id="floatingInput"
                                    placeholder="Masaya" />
                                <label for="floatingInput">Old Password</label>
                            </div>
        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control personalDetails" id="floatingInput"
                                    placeholder="Masaya"/>
                                <label for="floatingInput">New Password</label>
                            </div>
        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control personalDetails" id="floatingInput"
                                    placeholder="Masaya"/>
                                <label for="floatingInput">Confirm New Password</label>
                            </div>
        
                            <button type="button" class="btn btnColor personalDetails saveChange">
                                                    Change Password
                            </button>
        
                        </div>
                    </form>
            </div>
        </div>

        <!-- <div class="card profileChangePassword" style="width: 60rem;">
            <br/>
            <h4 class="changeHeadings">Change Password</h4>
               <form action="" method="">
                    <div class="changePasswordForm">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control formChange" id="value"
                                    name="goods_currency"/>
                                <label for="floatingInput">Old Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control formChange" id="value"
                                    name="goods_currency"/>
                                <label for="floatingInput">New Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control formChange" id="value"
                                    name="goods_currency"/>
                                <label for="floatingInput">Confirm Password</label>
                            </div>

                            <button type="button" class="btn btnColor changPass mb-3">
                                            Change
                            </button>
                        </div>

               </form> 
        </div> -->

    </div>

@endsection


<!-- <br/>
        <br/>
        <br/>
            
                    <div class="checkOption">

                        <div class="form-check">
                            <input class="form-check-input" onclick="deleteChange('changPassword')" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Change Password
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" onclick="deactivateAccount('deactivatedAccount')" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Deactivate Account
                            </label>
                        </div>

                    </div>

             

                <div class="formsArrangements" id="formsArrangements" onload="remove()">
                    
                    <div class="changPassword" id="changPassword">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formChange" id="value"
                                        name="goods_currency" value="200" />
                                    <label for="floatingInput">Old Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formChange" id="value"
                                        name="goods_currency" value="200" />
                                    <label for="floatingInput">New Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formChange" id="value"
                                        name="goods_currency" value="200" />
                                    <label for="floatingInput">Confirm Password</label>
                                </div>
                            </div>

                            <button type="button" class="btn btnColor changPass"
                                            data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
                                            Change Password
                            </button>
                    </div>

                    <div class="deactivatedAccount" id="deactivatedAccount">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control formChange" id="value"
                                        name="goods_currency" value="200"/>
                                    <label for="floatingInput">Email</label>
                                </div>
                            </div>

                            <button type="button" class="btn btnColor changPass"
                                            data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
                                            Deactivate Account
                            </button>
                    </div>



                </div> -->
