@extends('layout')
@section('content')
<h1><?php  echo $heading ?></h1>
@unless (count($listings)==0)
<p>no listings found </p>   

 @foreach ($listings as $listing)
  <h2> 
   <a href="/listings/{{$listing['id']}}">{{ $listing['title']}}</a>
  </h2> 
<p>{{$listing['description']}}</p>
    
 @endforeach 
 @else
 <p>no listing found</p>
  @endunless
@endsection