<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;

class OfficerController extends Controller
{
    public function addview2()
    {
        return view('officer.addAssets');
    }

    public function upload(Request $request)
    {
        $assets = new Assets;

        //get the images of assets
        $image =$request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $image->move('assetsimage',$imagename);
        $assets->image =$imagename;

        // assets details
        $assets->name =$request->name;
        $assets->assetNo =$request->assetNo;
        $assets->type =$request->type;
        $assets->description =$request->description;
        $assets->model =$request->model;
        $assets->serialNo =$request->serialNo;
        $assets->warranty =$request->warranty;
        $assets->purchaseCost =$request->purchaseCost;
        $assets->purchaseDate =$request->purchaseDate;

        $assets->save();

        return redirect()->back()->with('message', 'Asset added successfully');

    }

    public function index(){

        $assets = Assets::all();
        return view('officer.home',compact('assets'));
        }

    public function addview3(Request $request)
    {
        return view('officer.assetMovement');
    }
    
    
}

?>