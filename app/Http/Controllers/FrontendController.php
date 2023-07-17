<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Property;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Matcher\ExpressionLanguageProvider;

class FrontendController extends Controller
{



    public function allListings(Request $request)
    {

        $query = Property::query();
        if ($request->get('sale_rent')) {
            $param = $request->get('sale_rent') === 'sale' ? 1 : 0;
            $query->where(['is_approved' => 1, 'status_id' => 1])->where('sale_rent', $param);
        }
        if ($request->get('search_property')) {
            $param = $request->get('search_property');
            $query->where(['is_approved' => 1, 'status_id' => 1])->where('type_of_property', 'LIKE', "%{$param}%");
        }
        if ($request->get('location')) {
            $param = $request->get('location');
            $query->where(['is_approved' => 1, 'status_id' => 1])->where('location', 'LIKE', "%{$param}%")->orWhere('address', 'LIKE', "%{$param}%");
        }
        if ($request->get('price')) {

            if ($request->get('price') !== '10000+') {
                $explodePrice = explode('-', $request->get('price'));

                $query->where(['is_approved' => 1, 'status_id' => 1])->whereBetween('price', $explodePrice);
            } else {


                $query->where(['is_approved' => 1, 'status_id' => 1])->where('price', '>=', '10000');
            }
        }

        $properties = $query->where(['is_approved' => 1, 'status_id' => 1])->latest()->paginate(8);
        return view('front.all-listings', ['properties' => $properties]);
    }


    public function home()
    {
        $properties = Property::where('is_approved', true)
            ->where('status_id', 1)
            ->latest()
            ->limit(6)->get();
        return view('front.index', compact('properties'));
    }


    public function showProperty($slug)
    {
        $property = Property::where('slug', $slug)->with('user')->first();

        $properties = Property::where('location', 'LIKE', '%' . 'albania' . '%')->paginate(4);

        return view('front.property-page', ['property' => $property, 'properties' => $properties]);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function searchPage()
    {
        return view('front.search-page');
    }

    public function storeContact(ContactRequest $request)
    {

        $incomingData = $request->validated();

        $contact =  Contact::create([
            'name' => $incomingData['name'],
            'email' => $incomingData['name'],
            'message' => $incomingData['name'],
        ]);
        $contact->save();

        return redirect()->route('contact-us')->with('success', 'Faleminderit qe na kontaktuat!');
    }
}
