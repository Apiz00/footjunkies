<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Collection;
use App\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:100000',
                ]);
                $extension = $request->image->extension();

                $request->image->storeAs('/public', $validated['name'] . "." . $extension);

                $url = Storage::url($validated['name'] . "." . $extension);

                //$images = url() . $image->getClientOriginalName();

                $image = Image::create([
                    'name' => $validated['name'],
                    'url' => $url,
                ]);

                Session::flash('success', "Success!");

                return back();
            }
        }
        abort(500, 'Could not upload image :(');
    }


    public function viewUploads()
    {
        $images = Image::all();
        return view('view_uploads')->with('images', $images);
    }

    public function destroyUpload($id)
    {
        $images = Image::findOrFail($id);
        $images->delete();
        return redirect('/view-uploads')->with('status', 'Deleted sucessfully');
    }
}
