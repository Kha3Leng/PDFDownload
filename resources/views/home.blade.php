@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post" action="/submitForm">
                    @csrf
                    <div class="form-group">
                        <!-- Full Name -->
                        <label for="full_name_id" class="control-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="John Deer">
                    </div>

                    <div class="form-group">
                        <!-- Street 1 -->
                        <label for="street1_id" class="control-label">Street Address 1</label>
                        <input type="text" class="form-control" id="street1_id" name="street_address"
                            placeholder="Street address, P.O. box, company name, c/o">
                    </div>

                    <div class="form-group">
                        <!-- City-->
                        <label for="city_id" class="control-label">City</label>
                        <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
                    </div>

                    <div class="form-group">
                        <!-- Zip Code-->
                        <label for="zip_id" class="control-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
                    </div>
                    <br>
                    <div class="form-group">
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Buy!</button>
                    </div>

                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
