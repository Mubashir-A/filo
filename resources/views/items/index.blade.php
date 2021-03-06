@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8 ">
         <div class="card">
            <div class="card-header">Display all items</div>
            <div class="card-body">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>Category</th>
                        <th>found_time</th>
                        <th>found_place</th>
                        <th>colour</th>
                        <th colspan="3">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($items ?? '' as $item)
                     <tr>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['found_time']}}</td>
                        <td>{{$item['found_place']}}</td>
                        <td>{{$item['colour']}}</td>
                        @auth
                        <td><a href="{{action('ItemsController@show', $item['id'])}}" class="btn
                           btn- primary">Details</a></td>
                        @endauth
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection