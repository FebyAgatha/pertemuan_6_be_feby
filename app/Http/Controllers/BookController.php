<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function AddBook() {
        return view('addBook');
    }

    public function StoreBook(Request $req){
        Book::create([
            'bookTitle' => $req->judulBuku,
            'author' => $req->author,
            'price' => $req->harga,
            'releaseDate' => $req->tanggalRilis,
        ]);

        return redirect('/');
    }

    public function ViewAllBook(){
        $books = Book::all();
 
        return view('welcome')->with('buku_buku', $books);
    }

    public function ViewBook($id){
        $book = Book::findOrFail($id);
 
        return view('bookDetail')->with('buku', $book);
    }

    
}
