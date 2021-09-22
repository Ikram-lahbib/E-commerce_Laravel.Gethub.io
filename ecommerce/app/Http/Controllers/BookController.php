<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Http\Requests\categorieRequest;
use App\Http\Requests\bookRequest;
use Illuminate\Http\UploadedFile;
use App\Book;
use App\Cart;
use Auth;

class BookController extends Controller
{
     public function welcome(){

        if(Auth::user()->is_admin){

            return redirect('getBook');
            
        }else{
             return redirect('/home');
        }
     }

    public function logout(){
         return redirect('/home');
    }

	public function home(){
        $date=date("m");
        $categories=Categorie::all();
        $books=Book::whereMonth('date', '=', $date)->get();

    	return view('book.Home',['books' => $books,'categories' => $categories]);
    }

    public function about(){

    	return view('book.About');
    }

    public function contact(){

    	return view('book.Contact');
    }

    public function createCat(){

    	return view('book.AddCategory');
    }
    public function getCategory(){
    	$cats=Categorie::all();

    	return view('book.AllCategory',['cats' => $cats]);
    }

  

    public function addCategory(categorieRequest $req){
    	$cat=new Categorie();
    	$cat->name=$req->input('name');
    	$cat->description=$req->input('description');
    	if($req->hasFile('image')){
          $cat->image = $req->image->store('images');
         }
         $cat->save();
         session()->flash("success","La Category à été bien enregistrer");
         return redirect('getCategory');


    }

    public function deleteCategory($id){
    	$cat=Categorie::find($id);
         
          //$this->authorize('delete',$cv);

    	 $cat->delete();
         session()->flash("success","La Category à été bien supprimer");
    	 return redirect('getCategory');
    }

    public function  createBook(){

        $cats=Categorie::all();

        return view('book.AddBook',['cats' => $cats]);

    }

    public function getBook(){
        $books=Book::all();
        $cats=Categorie::all();
        
        return view('book.AllBook',['books'=>$books,'cats'=>$cats]);
    }

    public function bookShop(){
         $books=Book::all();
         $cats=Categorie::all();

        return view('book.BookShop',['books'=>$books,'cats'=>$cats]);

    }


    public function addBook(bookRequest $req){
        $book=new Book();
        $book->name=$req->name;
        $book->writer=$req->writer;
        $book->stock=$req->stock;
        $book->prix=$req->prix;
        $book->summary=$req->summary;
        $book->date=$req->date;
        $book->categorie_id=$req->category;
        if($req->hasFile('image')){
          $book->image= $req->image->store('images');
         }

         $book->save();

         //return Response()->json(['etat' =>true,'book'=>$book]);
        session()->flash("success","Book à été bien ajouter");
         return redirect('getBook');

    }
    
    public function editBook($id){
        $book=Book::find($id);
        $cats=Categorie::all();
         return view('book.UpdateBook',['book'=>$book,'cats'=>$cats]);

    }
    public function updateBook(bookRequest $req,$id){

        $book=Book::find($id);
        $book->name=$req->name;
        $book->writer=$req->writer;
        $book->stock=$req->stock;
        $book->prix=$req->prix;
        $book->summary=$req->summary;
        $book->date=$req->date;
        $book->categorie_id=$req->category;
        /*if($req->hasFile('image')){
          $book->image= $req->image->store('images');
         }*/

         $book->save();

         //return Response()->json(['etat' =>true,'book'=>$book]);
        session()->flash("success","Book à été bien modifier");
        return redirect('getBook');


    }
    public function deleteBook($id){
        $book=Book::find($id);

        $book->delete();

        return redirect('getBook');
    }

    public function showBook($id){
        $book=Book::find($id);
        $cat=Categorie::find($book->categorie_id);

         return view('book.ShowBook',['book'=>$book,'cat'=>$cat]);


    }
    public function getBookByCategory($id_cat){
        $cat=Categorie::find($id_cat);
        //$books=Book::where('categorie_id','=',$id_cat)->get();
        $books=$cat->books()->get();
        return Response()->json([
                                 'books' =>$books
                                ]);

       //return view('book.BookCategory',['books'=>$books]);

    }
    public function addToCart($id){
        $book=Book::find($id);
        $cart=new Cart();
        $cart->book_name=$book->name;
        $cart->book_image=$book->image;
        $cart->book_prix=$book->prix;
        $cart->user_id=Auth::user()->id;

        $cart->save();

        return redirect('getCart');

    }

    public function getCart(){
        
        $carts=Auth::user()->carts;
        
        return view('book.AddToCart',['carts'=>$carts]);

    }

    public function deleteFromCart($id){
        $cart=Cart::find($id);

        $cart->delete();

        return redirect('getCart');
    }



}

