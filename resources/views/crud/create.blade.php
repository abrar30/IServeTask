
@extends('layouts.app')
@section('content')
<div> 
<h1> Manage Your Addresses!</h1>
</div>
<div class="container">
  <form method="post" action="{{url('crud')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput1" class="col-sm-2 col-form-label col-form-label-lg"> Permanant Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Address1" name="address1" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput2" class="col-sm-2 col-form-label col-form-label-lg"> Residential Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Address2" name="address2">
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Postal Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Postalcode" name="postcode" required>
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">State:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="state" name="state" required>
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Country:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="country" name="country" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection