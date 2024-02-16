<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    //
    public function viewAddPublisher(){
        return view('addPublisher');
    }

    public function storePublisher(Request $req){
        Publisher::create([
            'publisherName' => $req->namaPenerbit,
        ]);

        return redirect('/show/publisher');
    }

    public function viewPublisher(){
        $publishers = Publisher::all();

        return view('viewPublisher')->with('penerbit_penerbit', $publishers);
    }

    public function detail($id){
        $publisher = Publisher::findOrFail($id);

        return view('publisherDetail')->with('penerbit', $publisher);
    }

    public function delete($id){
        Publisher::destroy($id);

        return redirect('/show/publisher');
    }

    public function viewUpdate($id){
        $publisher = Publisher::findOrFail($id);

        return view('updatePublisher')->with('penerbit', $publisher);
    }

    public function update($id, Request $req){
        $publisher = Publisher::findOrFail($id)->update([
            'publisherName' => $req->namaPenerbit,
        ]);

        return redirect('/show/publisher');
    }

    
}
