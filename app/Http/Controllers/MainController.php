<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Service;
use App\Gallery;
use App\Faq;
use App\MainSlider;
use App\Form;

class MainController extends Controller
{
    public function index()
    {
        $sliderItems = MainSlider::all();
        return view('index', compact('sliderItems'));
    }

    public function news()
    {
        $items = News::paginate(4);
        return view('news.index', compact('items'));
    }

    public function newsDetail($newsId)
    {
        $items = News::paginate(3);
        $item = News::find($newsId);
        $randItems = News::latest()->paginate(3);
        return view('news.detail', compact('item', 'items', 'randItems'));
    }

    public function services()
    {
        $items = Service::all();
        $item = $items[0];
        return view('services', compact('items', 'item'));
    }
    
    public function service($serviceId)
    {
        $items = Service::all();
        $item = Service::find($serviceId);
        return view('services', compact('items', 'item'));
    }

    public function gallery()
    {
        $items = Gallery::paginate(3);
        return view('gallery', compact('items'));
    }
    
    public function contacts()
    {
        return view('contacts');
    }

    public function faq()
    {
        $items = Faq::all();
        return view('faq', compact('items'));
    }

    public function prices1()
    {
        return view('prices.choosing_a_unit');
    }
    
    public function prices2()
    {
        return view('prices.contact_details');
    }

    public function prices3()
    {
        return view('prices.start_invoice');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string',
            'mail' => 'email|required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $formData = new Form;
        $formData->name = $validatedData['name'];
        $formData->email = $validatedData['mail'];
        $formData->phone = $validatedData['phone'];
        $formData->message = $validatedData['message'];
        $formData->save();
        return back()->withInput();
    }
}