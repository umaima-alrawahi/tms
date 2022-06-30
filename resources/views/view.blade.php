<!DOCTYPE html>
<html>

<head>

    <!--- CDN link----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js  "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <style>
        html {
            height: 100%;
        }

        #grad1 {
            background-color: #279d4f;
        }
    </style>

</head>

<body>


    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong> Report of {{$customer->First_Name}} </strong></h2></br></br>

                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="form">
                                @csrf
                                {{csrf_field()}}
                                <!-- progressbar -->

                                <!-- first  -->
                                <fieldset>

                                    <div>

                                        <table cellpadding="5" cellspacing="0">
                                            <tr>
                                            <tr>
                                                <td>
                                                    <label for="First_Name">
                                                        <b style="padding: -38px;">First name </b>
                                                    </label></br>
                                                    <label name="First_Name">{{$customer->First_Name}}</< /label>

                                                </td>
                                                <td>
                                                    <label for="Second_Name">
                                                        <b style="padding: -38px;">Second name </b>
                                                    </label></br>

                                                    <label name="Second_Name">{{$customer->Second_Name}}</< /label>
                                                </td>

                                                <td>
                                                    <label for="Third_Name">
                                                        <b style="padding: -38px;">Third Name </b>
                                                    </label> </br>

                                                    <label name="Third_Name">{{$customer->Third_Name}}</label>
                                                </td>


                                                <td>
                                                    <label for="Last_Name">
                                                        <b style="padding: -38px;">Last Name</b>
                                                    </label></br>

                                                    <label name="Last_Name">{{$customer->Last_Name}}</label>
                                                </td>

                                            </tr>

                                            <tr>

                                                <td>

                                                    <label for="Email_Address"><b style=" margin: 10px">Email </b></label><br />

                                                    <label name="Email_Address">{{$customer->Email_Address}}</label>

                                                </td>
                                                <td>
                                                    <label for="Phone"><b style="padding: 30px; margin: 10px">Phone </b></label><br />
                                                    <label name="Phone">{{$customer->Phone}}</label>

                                                </td>



                                                <td>
                                                    <label for="Address"><b>Address</b></label><br />
                                                    <label name="Address">{{$customer->Address}}</label>

                                                </td>


                                                <td>
                                                    <label for="City"><b>City</b></label><br />
                                                    <label name="City">{{$customer->City}}</label>

                                                </td>


                                            <tr>
                                                <td colspan="2">
                                                    <label for="IDNumber"><b>IDNumber</b></label><br />
                                                    <label name="IDNumber">{{$customer->IDNumber}}</label>

                                                </td>

                                                <td colspan="5">
                                                    <label for="BirthDate"><b>BirthDate</b></label><br />
                                                    <label name="BirthDate">{{$customer->BirthDate}}</label>

                                                </td>

                                            </tr>

                                            </tr>
                                            <tr>



                                            </tr>
                                        </table>

                                    </div>

                                    </br></br>

                                    <div class="form-card">
                                        <table cellpadding="2">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="Flight"><b style="padding: 30px;">Are you Flight Booking :</b></label><br />

                                                        <label name="Flight">{{$customer->Flight}}</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b style="padding: 90px;">Destination</b></label></br>
                                                        <label name="Country">{{$customer->Country}}</label>

                                                    </div>
                                                </td>


                                            <tr>
                                                <td>
                                                    <div>
                                                        <div class="form-group">
                                                            <label class="form-label"><b style="padding: 30px;">Check In</b></label></br>
                                                            <label name="Check_In">{{$customer->Check_In}}</label>

                                                        </div>
                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b style="padding: 90px;">Check out</b></label></br>
                                                        <label name="Check_out">{{$customer->Check_out}}</label>

                                                    </div>
                                                </td>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b style="padding: 30px;">number of Adults</b></label></br>
                                                        <label name="Adults">{{$customer->Adults}}</label>

                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label"><b style="padding: 90px;">number of Children</b></label></br>
                                                        <label name="Childrens">{{$customer->Childrens}}</label>

                                                    </div>

                                                </td>

                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="form-label" display="None"><b>Hotel rating</b></label></br>
                                                        <label name="Hotel_rating">{{$customer->Hotel_rating}}</label>
                                                    </div>

                                                </td>
                                            </tr>
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