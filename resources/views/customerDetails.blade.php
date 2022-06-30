<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="scripts/customerDetails.css">
    <script src="scripts/customerDetails.js"></script>


    <!--- CDN link----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js  "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
</head>

<body>


    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Fill all form field to go to next step</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="/customers/store" method="POST">
                                @csrf
                                {{csrf_field()}}
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>personal</strong></li>
                                    <li id="personal"><strong>Flight&Transport</strong></li>
                                    <li id="payment"><strong>payment</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul> <!-- fieldsets -->

                                <!-- first  -->
                                <fieldset>

                                    <div class="form-card">

                                        <table border="0" cellpadding="5" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <label for="First_Name">
                                                        <b>First name *</b>
                                                    </label>
                                                    <input name="First_Name" type="text" required />
                                                </td>
                                                <td>
                                                    <label for="Second_Name">
                                                        <b>Second name *</b>
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;<input name="Second_Name" type="text" required />
                                                </td>
                                                <td colspan="2">
                                            <tr>

                                                <td style="width: 50%">
                                                    <label for="Third_Name"><b>Third name *</b></label><br />
                                                    <input name="Third_Name" type="text" required />
                                                </td>
                                                <td style="width: 50%">
                                                    <label for="Last_Name"><b>Last name *</b></label><br />
                                                    &nbsp;&nbsp;&nbsp;<input name="Last_Name" type="text" required />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="Email_Address"><b>Email *</b></label><br />
                                                    <input name="Email_Address" type="email" required />
                                            <tr>
                                                <td>
                                                    <label for="Phone"><b>Phone *</b></label><br />
                                                    <input name="Phone" type="text" maxlength="50" style="width:100%;max-width: 260px" />
                                                </td>
                                                <td>
                                                    <label for="Address"><b>Address</b></label><br />
                                                    <input name="Address" type="text" maxlength="50" style="width:100%;max-width: 260px" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="City"><b>City</b></label><br />
                                                    <input name="City" type="text" maxlength="50" style="width:100%;max-width: 535px" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="IDNumber"><b>IDNumber</b></label><br />
                                                    <input name="IDNumber" type="number" maxlength="50%" />
                                                </td>

                                                <td>
                                                    <label for="IDCardCopy"><b>IDCardCopy</b></label><br />
                                                    <input name="IDCardCopy" type="file" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="BirthDate"><b>BirthDate</b></label><br />
                                                    <input name="BirthDate" type="date" maxlength="50" />
                                                </td>
                                            </tr>
                                            <label style=" padding: 20px" for="gender"><b> Select your gender</b></label>
                                            <select name="gender">
                                                <option value="none" selected>Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center;">


                                                </td>
                                            </tr>
                                        </table>

                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Next Step" />

                                </fieldset>


                                <!-- second step  -->

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Flight&Transport</h2>


                                        <span>Flight Booking</span>
                                        <input type="radio" id="yes" name="Flight" value="YES">
                                        <label for="yes">Yes</label>
                                        <input type="radio" id="no" name="Flight" value="NO">
                                        <label for="no">No</label>


                                        <div class="form-group">
                                            <span class="form-label">Destination</span>
                                            <input class="form-control" name="Country" type="text" placeholder="Country">
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Check In</span>
                                                <input class="form-control" name="Check_In" type="date" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <span class="form-label">Check out</span>
                                            <input class="form-control" name="Check_out" type="date" required>
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">number of Adults</span>
                                            <input class="form-control" name="Adults" type="number" placeholder="number of Adults">
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">number of Children</span>
                                            <input class="form-control" name="Childrens" type="number" placeholder="number of Childrens">
                                        </div>

                                        <span class="form-label">Hotel</span>

                                        <div class="form-group">
                                            <span class="form-label" display="None">Hotel rating</span>
                                            <select class="form-control" name="Hotel_rating" required>
                                                <option value="One-Star">One-Star</option>
                                                <option value="Two-Star">Two-Star</option>
                                                <option value="Three-Star">Three-Star</option>
                                                <option value="Four-Star">Four-Star</option>
                                                <option value="Five-Star">Five-Star</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>

                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>




                                <!-- Third step  -->

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Payment Information</h2>

                                        <div class="radio-group">
                                            <div class='radio' data-value="credit"><img src="/img/pay.jpg" width="200px" height="100px"></div>
                                            <div class='radio' data-value="paypal"><img src="/img/payy.jpg" width="200px" height="100px"></div> <br>
                                        </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                        <div class="row">
                                            <div class="col-9"> EEees `eb !S44 vd67ycu<label class="pay">Card Number*</label> <input type="number" name="cardno" placeholder="" />
                                            </div>
                                            <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                            <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                    <option selected>Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>

                                                    <div class="form-group">
                                                        <span class="form-label">Year</span>
                                                        <input class="form-control" name="expyear" type="number">
                                                    </div>
                                            </div>

                                        </div>
                                        <button type="submit" name="make_payment" class="next action-button">Confirm</button>

                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>