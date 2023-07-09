<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }


    public function index()
    {
        if (auth()->user()->role_id === 1) {
            $properties = Property::where('is_aproved', 1)->latest()->paginate();

            return view('admin.properties.index', ['properties' => $properties]);
        }

        if (auth()->user()->role_id === 2) {
            $properties = Property::where('user_id', auth()->user()->id)->latest()->paginate();

            return view('admin.properties.index', ['properties' => $properties]);
        }
    }
}
