
@extends('layouts.app')
@section('content')
<div > <h2>Manage Your Address</h2></div>
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Permanant Address</th>
          <th>Resedential Address</th>
        <th>Postalcode</th>
          <th>State</th>
          <th>Country</th>
          <th colspan="2">Action</th>
      </tr>
     <a href="{{route('crud.create')}}" class="btn btn-info pull-right">Create New Address</a><br><br>
     
        
    </thead>
    <tbody>
      @foreach($addresses as $post)
        
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['address1']}}</td>
        <td>{{$post['address2']}}</td>
          <td>{{$post['postcode']}}</td>
          <td>{{$post['state']}}</td>
          <td>{{$post['country']}}</td>
          <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection