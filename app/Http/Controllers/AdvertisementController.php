<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\PostImage;
use Auth;
use Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use View;

class AdvertisementController extends Controller
{

    private $advertisement;

    public function __construct(Advertisement $advertisement)
    {
        $this->advertisement = $advertisement;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('create_ad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = Auth::user();
        // $title = $request->title;
        // $description = $request->description;
        $images = $request->images;

        // $advertisement = Advertisement::create([
        //     'title' => $title,
        //     'description' => $description,
        //     'user_id' => $user->id,
        // ]);

        // //store images
        // foreach ($images as $image) {
        //     $imagePath = Storage::disk('uploads')->put($user->email . '/advertisements', $image);
        //     PostImage::create([
        //         'advertisement_image_caption' => $title,
        //         'advertisement_image_path' => '/uploads/' . $imagePath,
        //         'advertisement_id' => $advertisement->id,
        //     ]);
        // }
        // return response()->json(['error' => false, 'data' => $advertisement]);
        // dd($request);
        foreach ($images as $key => $image) {
            echo $image."<br>" ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
