<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;


class AdminHotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::paginate(5);
        return view('Admin.hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('Admin.hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->name = $request->input('name');
        $hotel->address = $request->input('address');
        $hotel->rating = $request->input('rating');
        $hotel->amenities = $request->input('amenities');


        if ($request->hasFile('hotel_images')) {
            $image = $request->file('hotel_images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assests/images'), $imageName);
            $hotel->hotel_images = $imageName;
        }

        $hotel->price = $request->input('price');
        $hotel->save();

        return redirect()->route('Admin.hotels.index')->with('success', 'Hotel created successfully');
    }

    public function edit($hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        return view('Admin.hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        $hotel->name = $request->input('name');
        $hotel->address = $request->input('address');
        $hotel->rating = $request->input('rating');
        $hotel->amenities = $request->input('amenities');
        if ($request->hasFile('hotel_images')) {
            $image = $request->file('hotel_images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assests/images'), $imageName);
            $hotel->hotel_images = $imageName;
        }

        $hotel->price = $request->input('price');
        $hotel->save();

        return redirect()->route('Admin.hotels.index')->with('success', 'Hotel updated successfully');
    }


    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect()->route('Admin.hotels.index')->with('success', 'Hotel deleted successfully');
    }
}
