<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="scripts/customerDetails.css">
    <script src="scripts/customerDetails.js"></script>


    <!--- CDN link----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js	"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>


    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Reports</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="/customers/store" method="POST">
                                @csrf
                                {{csrf_field()}}
                                <!-- progressbar -->

                                <!-- first  -->
                                <fieldset>

                                    <div class="form-card">

                                        <table border="0" cellpadding="5" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <label for="First_Name">
                                                        <b>First name *</b>
                                                    </label><br />
                                                    <input name="First_Name" type="text" required />
                                                </td>
                                                <td>
                                                    <label for="Second_Name">
                                                        <b>Second name *</b>
                                                    </label><br />
                                                    &nbsp;&nbsp;&nbsp;<input name="Second_Name" type="text" required />
                                                </td>
                                            </tr>
                                            <tr>
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
                                                    <input name="Email_Address" type="text" required />
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
                                                <td colspan="2">
                                                    <label for="IDNumber"><b>IDNumber</b></label><br />
                                                    <input name="IDNumber" type="text" maxlength="50%" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
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
                                            <label for="gender"><b> Select your gender</b></label>
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






                                    <div class="form-card">
                                        <h2 class="fs-title">Flight&Transport</h2>

                                        <div class="form-group">
                                            <span class="form-label">Flight Booking</span>
                                            <input type="radio" id="yes" name="Flight" value="YES" width="200px" height="100px">
                                            <label for="yes">Yes</label>
                                            <input type="radio" id="no" name="Flight" value="NO" width="200px" height="100px">
                                            <label for="no">No</label>
                                        </div>

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



                                    <div class="form-card">
                                        <h2 class="fs-title">Total Payment</h2>



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