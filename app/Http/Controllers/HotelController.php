<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function mainpage() {
        return view('mainpage');
    }

    public function about(){
        return view('about');
    }

    public function index(){
        $hotels = Hotel::with('category')->get();
        return view('hotels', [
            'hotels' => $hotels
        ]);
    }

    public function create(){
        $categories = Category::all();
        return view('create-hotels',[
            'categories' => $categories
        ]);
    }
    public function store(Request $request){
        if($request->hasFile('image')){
            $hotel = new Hotel();
            $hotel->name = $request->get('name');
            $hotel->city = $request->get('city');
            $hotel->star = $request->get('star');
            $hotel->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $hotel->image = $url;
            $hotel->save();

            return redirect('/')->with('status', 'Данные успешно сохранены!');
        }
    }

        public function hotel(Hotel $hotel){
            return view('hotel',[
                'hotel'=> $hotel
            ]);
        }

        public function edit($hotel){
            $hotel = Hotel::find($hotel);
            $categories = Category::all();
            return view('edit-hotel',[
            'hotel'=> $hotel,
            'categories'=>$categories

        ]);
    }

    public function editSave(Hotel $hotel,Request $request){
        if($request->hasFile('image')){
            $hotel->name = $request->get('name');
            $hotel->city = $request->get('city');
            $hotel->star = $request->get('star');
            $hotel->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $hotel->image = $url;
            $hotel->save();

            return redirect('/')->with('status', 'Данные успешно изменены!');
        }
    }

    public function delete(Hotel $hotel){
        $hotel->delete();
        return redirect('/')->with('status', 'Данные успешно удалены!');
    }


}
