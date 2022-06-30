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
                            <form id="form">
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
                                                        <b>First name </b>
                                                    </label><br />
                                                    <label name="First_Name">{{$customer->First_Name}}</label>

                                                </td>
                                                <td>
                                                    <label for="Second_Name">
                                                        <b>Second name </b>
                                                    </label><br />
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label name="Second_Name">{{$customer->Second_Name}}</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                            <tr>
                                                <td style="width: 50%">
                                                    <label for="Third_Name"><b>Third name </b></label><br />
                                                    <label name="Third_Name">{{$customer->Third_Name}}</label>
                                                </td>
                                                <td style="width: 50%">
                                                    <label for="Last_Name"><b>Last name </b></label><br />
                                                    &nbsp;&nbsp;&nbsp;<label name="Third_Name">{{$customer->Last_Name}}</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">

                                                    <label for="Email_Address"><b>Email </b></label><br />

                                                    <label name="Email_Address">{{$customer->Email_Address}}</label>
                                            <tr>
                                                <td>
                                                    <label for="Phone"><b>Phone </b></label><br />
                                                    <label name="Phone">{{$customer->Phone}}</label>

                                                </td>
                                                <td>
                                                    <label for="Address"><b>Address</b></label><br />
                                                    <label name="Address">{{$customer->Address}}</label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="City"><b>City</b></label><br />
                                                    <label name="City">{{$customer->City}}</label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="IDNumber"><b>IDNumber</b></label><br />
                                                    <label name="IDNumber">{{$customer->IDNumber}}</label>

                                                </td>
                                            </tr>
                                            <tr>

                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <label for="BirthDate"><b>BirthDate</b></label><br />
                                                    <label name="BirthDate">{{$customer->BirthDate}}</label>

                                                </td>
                                            </tr>
                                            <label for="gender"><b> Select your gender</b></label>
                                            <label name="gender">{{$customer->gender}}</label>

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
                                        <table cellpadding="2">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="Flight"><b>Flight Booking</b></label><br />

                                                        <label name="Flight">{{$customer->Flight}}</label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b>Destination</b></label></br>
                                                        <label name="Country">{{$customer->Country}}</label>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div>
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Check In</b></label></br>
                                                            <label name="Check_In">{{$customer->Check_In}}</label>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b>Check out</b></label></br>
                                                        <label name="Check_out">{{$customer->Check_out}}</label>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b>number of Adults</b></label></br>
                                                        <label name="Adults">{{$customer->Adults}}</label>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b>number of Children</b></label></br>
                                                        <label name="Childrens">{{$customer->Childrens}}</label>

                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label" display="None"><b>Hotel rating</b></label></br>
                                                        <label name="Hotel_rating">{{$customer->Hotel_rating}}</label>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>

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