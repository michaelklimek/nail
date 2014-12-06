@extends('_master')

@section('title')
	About Us
@stop

@section('body')
    <div class="jumbotron">
	  	<h1>About Us</h1>
	  	<p>One of the Most Elegant Nail Salons in the World!!!</p>
	  	<p><a class="btn btn-danger btn-lg" href="#" role="button">Schedule Appointment</a></p>
	</div>

	<div class="row">
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="http://media-cache-ec0.pinimg.com/736x/b4/a6/3a/b4a63a47e704fb1fd570bef1ef3074ab.jpg" alt="...">
	      <div class="caption">
	        <h3>Elyssa Grace</h3>
	        <p>CEO &amp; Co-Founder</p>
	        <p><a href="#" class="btn btn-danger" role="button">Book Elyssa</a> <a href="{{ action('BiosController@bio') }}" class="btn btn-default" role="button">Elyssa's Bio</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="https://s-media-cache-ak0.pinimg.com/236x/16/59/11/1659117d8b18d97e25e86585845d3633.jpg" alt="...">
	      <div class="caption">
	        <h3>Fiona Heeney</h3>
	        <p>CFO &amp; Co-Founder</p>
	        <p><a href="#" class="btn btn-danger" role="button">Book Fiona</a> <a href="#" class="btn btn-default" role="button">Fiona's Bio</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="http://media-cache-ec0.pinimg.com/736x/fd/53/02/fd5302c0050f2f43817ca5103156e098.jpg" alt="...">
	      <div class="caption">
	        <h3>Maeve Heeney</h3>
	        <p>COO</p>
	        <p><a href="#" class="btn btn-danger" role="button">Book Maeve</a> <a href="#" class="btn btn-default" role="button">Maeve's Bio</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	
@stop