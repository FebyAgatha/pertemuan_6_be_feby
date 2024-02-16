<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class BookController extends Controller
{
    //

    public function AddBook() {
        $publishers = Publisher::all();

        return view('addBook')->with('penerbit_penerbit', $publishers);
    }

    public function StoreBook(Request $req){
        Book::create([
            'bookTitle' => $req->judulBuku,
            'publisherId' => $req->namaPenerbit,
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

    public function editBook($id){
        $book = Book::findOrFail($id);

        return view('updateBook')->with('buku', $book);
    }

    public function updateBook($id, Request $req){
        $book = Book::findOrFail($id)->update([
            'bookTitle' => $req->judulBuku,
            'author' => $req->author,
            'price' => $req->harga,
            'releaseDate' => $req->tanggalRilis,
        ]);

        return redirect('/');
    }

    public function deleteBook($id){
        Book::destroy($id);

        return redirect('/');
    }
    
}
