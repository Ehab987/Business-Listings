<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ListingRequest;
use App\Models\Listing;

class ListingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['show','index']]);
    }
    public function index(){

        $Listings = Listing::orderBy('created_at','desc')->get();

        return view('pages.listings',compact('Listings'));
    }
    public function create() {
        return view('pages.createListing');
    }

    public function store(ListingRequest $request){
        $user_id =  auth()->user()->id;
        
        Listing::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'address' => $request -> address,
            'phone' => $request ->phone,
            'bio' => $request ->bio,
            'website' => $request ->website,
            'user_id' => $user_id
    ]);
   
     return redirect()->route('dashboard')->with(['success'=> 'Listing Created Successfully']);
    }

    public function edit($id){

        $listing = Listing::find($id);
        if(!$listing){
            return redirect()->back();
        }
        return view('pages.editListing',compact('listing'));
    }
    public function update(ListingRequest $request,$id){

         $listing = Listing::find($id);
         
         if(!$listing){
            return redirect()->back();
        }
        $listing -> update($request->all());
        return redirect()->route('dashboard')->with(['Update'=> 'Listing Updated Successfully']);
    }
    public function  delete($id){

        $listing = Listing::find($id);

        if(!$listing){
           return redirect()->back();
       }
       $listing -> delete();
       return redirect()->route('dashboard')->with(['delete'=> 'Listing deleted Successfully']);
    }
    public function show($id) {

        $listing = Listing::find($id);

        if(!$listing){
           return redirect()->back();
        }
        return view('pages.showListing',compact('listing'));
    }

}
