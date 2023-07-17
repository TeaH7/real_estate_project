<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{



    public function index(Request $request)
    {

        if (auth()->user()->role_id === 1) {




            $properties = Property::where('is_approved', 1)->latest()->paginate(20);
            return view('admin.properties.index', ['properties' => $properties]);
        }

        if (auth()->user()->role_id === 2) {
            $properties = Property::where('user_id', auth()->user()->id)->latest()->paginate(20);

            return view('admin.properties.index', ['properties' => $properties]);
        }
    }


    public function create()
    {

        return view('admin.properties.create');
    }


    public function store(PropertyRequest $request)
    {
        try {
            $data = $request->validated();


            //* Check if request has a file cover image
            if ($request->hasFile('cover_image')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('cover_image');
                //* Set a variable for the name of the file in the request
                $fileNameCover =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameCover);
                $data['cover_image'] = $pathLink;
            }

            //* Check if request has a file img1
            if ($request->hasFile('img1')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img1');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img1'] = $pathLink;
            }

            //* Check if request has a file img2
            if ($request->hasFile('img2')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img2');
                //* Set a variable for the name of the file in the request
                $fileNameImg2 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg2);
                $data['img2'] = $pathLink;
            }

            //* Check if request has a file img3
            if ($request->hasFile('img3')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img3');
                //* Set a variable for the name of the file in the request
                $fileNameImg3 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg3);
                $data['img3'] = $pathLink;
            }

            //* Check if request has a file img4
            if ($request->hasFile('img4')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img4');
                //* Set a variable for the name of the file in the request
                $fileNameImg4 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg4);
                $data['img4'] = $pathLink;
            }

            Property::create([
                'title' => $data['title'],
                'type_of_property' => $data['type_of_property'],
                'address' => $data['address'],
                'location' => $data['location'],
                'area' => $data['area'],
                'cover_image' => $data['cover_image'],
                'img1' => isset($data['img1']) ? $data['img1'] : null,
                'img2' => isset($data['img2']) ? $data['img2'] : null,
                'img3' => isset($data['img3']) ? $data['img3'] : null,
                'img4' => isset($data['img4']) ? $data['img4'] : null,
                'nr_of_beds' => $data['nr_of_beds'],
                'nr_of_baths' => $data['nr_of_baths'],
                'price' => $data['price'],
                'description' => $data['description'],
                'sale_rent' => $data['sale_rent'],
                'status_id' => $data['status_id'],
                'user_id' => auth()->user()->id,
            ]);

            return redirect()->route('properties.index')->with('success', 'Property Created Successfully');
        } catch (\Exception $e) {
            // return redirect()->route('properties.index')->with('error', 'Upss!...Something Went Wrong!');
            return redirect()->route('properties.index')->with($e->getMessage(), 'Upss!...Something Went Wrong!');
        }
    }


    public function show($slug)
    {
        $property =  Property::where('slug', $slug)->first();

        return view('admin.properties.show', ['property' => $property]);
    }


    public function edit($slug)
    {
        $property = Property::where('slug', $slug)->first();

        return view('admin.properties.edit', ['property' => $property]);
    }


    public function update(UpdatePropertyRequest $request, $slug)
    {
        $property =  Property::where('slug', $slug)->first();

        $data = $request->validated();

        //* Check if request has a file cover image
        if ($request->hasFile('cover_image')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            //* Set a variable for the file in the request
            $file = $request->file('cover_image');
            //* Set a variable for the name of the file in the request
            $fileNameCover =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameCover);
            $data['cover_image'] = $pathLink;
        }


        //* Check if request has a file img1
        if ($request->hasFile('img1')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            //* Set a variable for the file in the request
            $file = $request->file('img1');
            //* Set a variable for the name of the file in the request
            $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
            $data['img1'] = $pathLink;
        }

        //* Check if request has a file img2
        if ($request->hasFile('img2')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            //* Set a variable for the file in the request
            $file = $request->file('img2');
            //* Set a variable for the name of the file in the request
            $fileNameImg2 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg2);
            $data['img2'] = $pathLink;
        }

        //* Check if request has a file img3
        if ($request->hasFile('img3')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            //* Set a variable for the file in the request
            $file = $request->file('img3');
            //* Set a variable for the name of the file in the request
            $fileNameImg3 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg3);
            $data['img3'] = $pathLink;
        }

        //* Check if request has a file img4
        if ($request->hasFile('img4')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            //* Set a variable for the file in the request
            $file = $request->file('img4');
            //* Set a variable for the name of the file in the request
            $fileNameImg4 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg4);
            $data['img4'] = $pathLink;
        }

        $property->update([
            'title' => $data['title'],
            'type_of_property' => $data['type_of_property'],
            'address' => $data['address'],
            'location' => $data['location'],
            'area' => $data['area'],
            'cover_image' => isset($data['cover_image']) ? $data['cover_image'] : $property->cover_image,
            'img1' => isset($data['img1']) ? $data['img1'] : $property->img1,
            'img2' => isset($data['img2']) ? $data['img2'] : $property->img2,
            'img3' => isset($data['img3']) ? $data['img3'] : $property->img3,
            'img4' => isset($data['img4']) ? $data['img4'] : $property->img4,
            'nr_of_beds' => $data['nr_of_beds'],
            'nr_of_baths' => $data['nr_of_baths'],
            'price' => $data['price'],
            'description' => $data['description'],
            'sale_rent' => $data['sale_rent'],
            'status_id' => $data['status_id'],

        ]);

        return redirect()->route('properties.index')->with('success', 'Property Updated Successfully');
    }


    public function destroy($id)
    {
        $property = Property::where('id', $id)->first();
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property Deleted Successfully');
    }


    public function forAproval()

    {
        $properties = Property::where('is_approved', '=', null)->paginate(20);
        return view('admin.properties.aprove-properties', ['properties' => $properties]);
    }

    public function aproveProperty($id)
    {
        $property = Property::where('id', $id)->first();

        $property->update([
            'is_approved' => 1

        ]);
        return redirect()->route('properties.for.aproval')->with('success', 'Property Approved.');
    }

    public function refuseProperty($id)
    {
        $property = Property::where('id', $id)->first();

        $property->update([
            'is_approved' => 0
        ]);
        return redirect()->route('properties.for.aproval')->with('success', 'Property Refused.');
    }
}
