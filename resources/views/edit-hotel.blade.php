<!doctype html>
<html lang="en">
@extends('navbar')
@section('title')Отели
@endsection
@section('main_content')
<div class="container mt-3">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="{{route('edit.save', ['hotel'=>$hotel->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$hotel->id}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Name:</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="name" placeholder="Insert name..." required value="{{$hotel->name}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>City:</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="city" placeholder="Insert city..." required value="{{$hotel->city}}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Star:</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="star" placeholder="Insert star..." required value="{{$hotel->star}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Image:</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="file" class="form-control" name="image" placeholder="Insert image file..." required value="{{$hotel->image}}">
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

                </div>
                <div class="modal-footer">
                    <button  class="btn btn-success">SAVE</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
