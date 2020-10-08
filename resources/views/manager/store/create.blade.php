@extends('layouts.withoutnav')

@section('content')
    <div class="container">
        <h3>Register your store here</h3>
        <form action="/register/store" method="POST">
            @csrf
            <div>
                <label for="name">Shop Name: </label>
                <input type="text" name="shopname" placeholder="shopname">
            </div>
            <div>
                <label for="name">Shop Location: </label>
                <input type="text" name="shoplocation" placeholder="shoplocation">
            </div>
            <div>
                <label for="name">Shop Phone Number: </label>
                <input type="text" name="shopphonenumber" placeholder="shopphonenumber">
            </div>
            <div>
                <label for="name">Shop ssm no: </label>
                <input type="text" name="shopssmno" placeholder="shopssmno">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
