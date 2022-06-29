<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="scripts/customerDetails.css">


    <!--- CDN link----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js  "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">



</head>

<body>


    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">

                                <!-- first  -->
                                <fieldset>
                                    <div class="form-card">

                                        <style>
                                            table,
                                            th,
                                            td {
                                                border: 1px solid white;
                                                border-collapse: collapse;

                                            }
                                        </style>

                                        <body>
                                            <h4>Here Is a List Of What Customer Request</h4>

                                            </br>
                                            </br>

                                            <table style="width:100%">
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>DATE</th>
                                                    <th>COUNTRY</th>
                                                </tr>
                                                <tr>
                                                    @foreach($customers as $customer)
                                                <tr>
                                                    <td>{{$customer->First_Name}}</td>
                                                    <td>{{$customer->Check_In}}</td>
                                                    <td>{{$customer->Country}}</td>

                                                </tr>
                                                @endforeach
                                                </tr>

                                            </table>
                                            </table>




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