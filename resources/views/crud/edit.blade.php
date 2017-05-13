@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
         <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address1:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Address1" name="address1"value="{{$address->address1}}">
      </div>
       </div> 
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Address1" name="address2"value="{{$address->address2}}">
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Postal Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Postalcode" name="postcode"value="{{$address->postcode}}">
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">State:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="state" name="state"value="{{$address->state}}">
      </div>
    </div>
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg ">Country:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="country" name="country"value="{{$address->country}}">
      </div>
    </div>
      
    

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>



@endsection