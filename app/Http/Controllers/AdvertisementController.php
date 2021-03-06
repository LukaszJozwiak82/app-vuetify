<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\PostImage;
use App\Services\AdvertisementService;
use Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use View;

class AdvertisementController extends Controller
{

    private $advertisement;
    private $advertisementService;

    public function __construct(Advertisement $advertisement, AdvertisementService $advertisementService)
    {
        $this->advertisement = $advertisement;
        $this->advertisementService = $advertisementService;
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
        $user = Auth::user();
        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $images = $request->images;

        $advertisement = Advertisement::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $user->id,
            'price' => $price,
        ]);

        //store images
        foreach ($images as $image) {
            $imagePath = '/uploads/' . $user->email;
            Storage::disk('public')->put($imagePath, $image);
            // Storage::put('/uploads/' . $imagePath, $image);
            PostImage::create([
                'advertisement_id' => $advertisement->id,
                'advertisement_image_path' => $imagePath . '/' . $image->hashName(),
                'advertisement_image_caption' => $title,
            ]);
            // echo $image->getClientOriginalName();
        }
        // return response()->json(['error' => false, 'data' => $advertisement]);
        // dd($request);
        // foreach ($images as $key => $image) {
        //     echo $image."<br>" ;
        // }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adv =  $this->advertisementService->show($id);
        return view('advertisement.show', ['adv' => $adv]);
        // dd($adv->post_images[0]->id);
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
