@extends('welcome')
@section('bannerpage')
    <div class="banbg">
        <div class="container bancontent">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 col1">
                    <h1>Book Your Auto Rental</h1>
                    <p>Luxury Cars at low-cost, starts <span>&#8369;&nbsp;1,000 / day</span></p>
                </div>
                <div class="col-md-4 col2 bg-light p-4">
                    <form>
                        <h1 class="text-center">Sample Log in Form</h1>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1" >Email address</label>
                        </div>
                    
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" />
                        <label class="form-label" for="form2Example2">Password</label>
                        </div>
                    
                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>
                    
                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                        </div>
                    
                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
                    
                        <!-- Register buttons -->
                        <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection