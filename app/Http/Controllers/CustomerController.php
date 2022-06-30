<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = Customer::all();
        return view('reportsList', ["customers" => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customerDetails');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("hi");
        $customer = new Customer();
        $customer->First_Name = $request->input('First_Name');
        $customer->Second_Name = $request->input('Second_Name');
        $customer->Third_Name = $request->input('Third_Name');
        $customer->Last_Name = $request->input('Last_Name');
        $customer->Email_Address = $request->input('Email_Address');
        $customer->Phone = $request->input('Phone');
        $customer->Address = $request->input('Address');
        $customer->City = $request->input('City');
        $customer->IDNumber = $request->input('IDNumber');
        $customer->IDCardCopy = $request->input('IDCardCopy');
        $customer->BirthDate = $request->input('BirthDate');
        $customer->gender = $request->input('gender');
        $customer->Flight = $request->input('Flight');
        $customer->Country = $request->input('Country');
        $customer->Check_In = $request->input('Check_In');
        $customer->Check_out = $request->input('Check_out');
        $customer->Adults = $request->input('Adults');
        $customer->Childrens = $request->input('Childrens');
        $customer->Hotel_rating = $request->input('Hotel_rating');
        // 'holdername', 'cardno', 'expmonth', 'expyear']; cvcpwd
        $customer->holdername = $request->input('holdername');
        $customer->cardno = $request->input('cardno');
        $customer->cvcpwd = $request->input('cvcpwd');
        $customer->expmonth = $request->input('expmonth');
        $customer->expyear = $request->input('expyear');
        $customer->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer, $id)
    {
        //
        $customer = Customer::find($id);
        //$customers = Customer::all();



        return view('view', ["customer" => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
