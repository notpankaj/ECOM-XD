@extends('layouts.app')

@section('content')

    <h1>PLACE ORDER</h1>



    <form action="/order" method="post" style="padding-left:50px">
        @csrf
        <label for="">full name</label>
        <input type="text" name="fullname">
        <br>
        <label for="">state</label>
        <input type="text" name="state">
        <br>
        <label for="">city</label>
        <input type="text" name="city">
        <br>
        <label for="">zipcode</label>
        <input type="text" name="zipcode">
        <br>
        <label for="">full address</label>
        <input type="text" name="address">
        <br>
        <label for="">mobile</label>
        <input type="text" name="mobile">
        <br>

        <h4>Payment Mode</h4>
        {{-- radio --}}



        cod <input type="radio" name="payment_method" id="payment_mosde" value="cash-on-delivery">
        <br>
        paypal <input type="radio" name="payment_method" id="payment_mode" value="paypal">
        <br>
        stripe <input type="radio" name="payment_method" id="payment_mosde" value="stripe">
        <br>
        card <input type="radio" name="payment_method" id="payment_mode" value="card">




        <br>
        <br>

        <button type="submit">Submit</button>
    </form>



@endsection
