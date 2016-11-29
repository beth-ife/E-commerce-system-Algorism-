@extends('layout')
@section('title')
Register
@stop
@section('content')
<div class="container">
    <div class="register">
        <h2>Register</h2>
        <form action="/register" method="post">
            <div class="col-md-6  register-top-grid">

                <div class="mation">
                    <span>First Name</span>
                    <input class="form-control" required="required" type="text" name="firstname"> 

                    <span>Last Name</span>
                    <input class="form-control" required="required" type="text" name="lastname"> 

                    <span>Email Address</span>
                    <input class="form-control" required="required" type="text" name="email"> 
                    <span>Phone</span>
                    <input class="form-control" required="required" type="text" name="phone"> 
                </div>

                <div class="clearfix"> </div>
                <a class="news-letter" href="#">
                    <label class="checkbox"><input  type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
                </a>
            </div>
            <div class=" col-md-6 register-bottom-grid">
                <div class="mation">
                    <span>Street Address</span>
                    <input class="form-control" type="text" required="required"  list="streets" name="street">
                    <datalist id="streets">
                        <option value="Some street">
                    </datalist>

                    <span>City</span>
                    <input required="required" class="form-control" type="text"  list="city" name="city">
                    <datalist id="city">
                        <option value="Some city">
                    </datalist>

                    <span>State</span>
                    <input required="required" class="form-control" type="text"  list="states" name="state">
                    <datalist id="states">
                        <option value="FCT">
                        <option value="Abia">
                    </datalist>
                </div>
                <div class="mation">
                    <span>Password</span>
                    <input required="required" class="form-control" id="password" type="password" name="password">
                    <span>Confirm Password</span>
                    <input required="required" class="form-control" id="confirm-password" type="password">
                </div>
            </div>
            <div class="clearfix"> </div>


            <div class="register-but">

                <input class="btn btn-lg btn-warning" type="submit" value="submit">
                <div class="clearfix"> </div>

            </div>
        </form>
    </div>
</div>
@stop
