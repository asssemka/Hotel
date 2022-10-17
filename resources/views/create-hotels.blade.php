<!doctype html>
<html lang="en">
@extends('navbar')
@section('title')Отели
@endsection
@section('main_content')
{{--<div class="alert">--}}
{{--    <ul>--}}
{{--       @foreach($errors->all() as $error)--}}
{{--            <li>{{$error}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}
<div class="container">
    <div class="row">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label>NAME:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" placeholder="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label>CITY</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="city" placeholder="City"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label>STARS</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="number" class="form-control" name="star" placeholder="Stars" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>IMAGE FILE:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="file" name="image" class="form-control" placeholder="Insert image address" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>COUNTRY:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <select name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">ADD HOTEL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
