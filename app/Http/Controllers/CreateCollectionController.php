<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CreateCollectionController extends Controller
{

    public function index(){
        return view('create_collection');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required'],
            'collection_img'=>['required']
        ]);

        $image = $request->file('collection_img');
        $imageName = Str::uuid().".".$image->extension();
        $serverImage = Image::make($image);
        $serverImage->fit(1000, 1000);

        $imagePath = public_path('uploads').'/'.$imageName;
        $serverImage->save($imagePath);

        $data['collection_img'] = $imageName;
        $data['user_id'] = auth()->user()->id;
        Collection::create($data);

        return redirect()->route('collection');
    }


    public function like(Collection $collection)
    {
        $user = Auth::id();

        $existingLike = $collection->likes()->where('user_id', $user)->first();

        if ($existingLike) {
            $existingLike->delete();
        } else {
            $collection->likes()->create([
                'user_id' => $user
            ]);
        }

        return back();
    }

}
