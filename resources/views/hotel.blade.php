@extends('navbar')
@section('title')Отели
@endsection
@section('main_content')
    <div class="container">
    @if(session('status'))
        {{session('status')}}
    @endif
</div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-2 mb-2">
                <div class="card-body">
                    <h3 class="card-title">{{$hotel->name}}</h3>
                    <h5 class="card-title">{{$hotel->city}}</h5>
                    <p class="card-text">{{$hotel->star}}</strong></p>
                    <img src="storage/{{$hotel->image}}" style="width: 200px;" alt="image">
                    <h6 class="card-text">{{$hotel->category->name}}</strong></h6>

                </div>
            </div>
            <a href="{{route('edit', ['hotel'=>$hotel->id])}}">EDIT</a>
            <a href="{{route('delete', ['hotel' => $hotel->id])}}">DELETE</a>
        </div>
    </div>
@endsection
