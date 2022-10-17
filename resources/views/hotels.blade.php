@extends('navbar')
@section('title')Отели
@endsection
@section('main_content')
<div class="container">
    @if(session('status'))
        {{session('status')}}
    @endif
</div>
@foreach( $hotels as $hotel )
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-2 mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{$hotel->name}}</h5>
                    <h5 class="card-title">{{$hotel->city}}</h5>
                    <p class="card-text">{{$hotel->star}}</strong></p>
                    <img src="storage/{{$hotel->image}}" style="width: 200px;" alt="image">
                    <h6 class="card-text">{{$hotel->category->name}}</strong></h6>
                    <a href="{{route('hotel', ['hotel' => $hotel->id])}}">DETAILS</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
