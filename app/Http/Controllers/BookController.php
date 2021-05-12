<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $book = new Book;
//        $book->isbn = $request->isbn;
        $book->title = $request->title;
//        $book->author = $request->author;
        $book->review = $request->review;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
//        $book->category = (string)$request->category;
//        $book->r_date = $request->r_date;

        $book->save();
        $id_book = ['id' => ($book->id)];
//        return redirect()->route('/bookSheet', $id_book);
        return redirect()->route('/bookSheet', ['id' => $id_book]);

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

//    ---------------------------------------------------------------
    public function showLastBooks() {
        $books = Book::all();
        return view('welcome.home', compact('books'));
    }

    public function showBookSheet($id) {
        $book = $user = DB::table('books')->where('id', $id)->first();
        $category = $book->category;
        return view('welcome.about', compact('book', 'category'));
    }

    public function showBookCategoryList($category) {
        $books = DB::table('books')->where('category', $category)->get();
//            $hostels = Hostel::where('gender', $gender)->get();
//            $blocks = array();
//            foreach($hostels as $hostel) {
//                $blocks[] = Block::where('capacity', $capacity)
//                    ->where('hostel_id', $hostel->id)
//                    ->get();
//            }
//
//            # Return the view
//            return view('student/booking', ['blocks' => $blocks]);
//        return view('welcome.bookCategoryList')->with(with(compact('books', 'category')));

        return view('welcome.bookCategoryList', compact('books', 'category'));

    }

    public function filterBook($category, $type, $order) {
        $books = DB::table('books')->
            where('category', $category)->
            orderBy($type, $order)->get();
        return view('welcome.bookCategoryList', compact('books', 'category', 'type', 'order'));
    }

    public function showFavs($category, $type, $order) {
        $books = DB::table('books')->
            where('category', $category)->
            orderBy($type, $order)->get();
        return view('books.bookFavsList', compact('books', 'category', 'type', 'order'));
    }
//    public function showBookCategoryList($category) {
//        $books = DB::table('books')->where('category', $category);
//        return view('welcome.bookCategoryList', compact('books'));
//    }

    public function resultsBooks($keyword, $type, $order) {
        $translatedCategory = $this->translateCategory($keyword);
        $books = DB::table('books')->
            where('title','like','%'.$keyword.'%')->
            orWhere('author','like','%'.$keyword.'%')->
            orWhere('category','like','%'.$keyword.'%')->
            orWhere('category','like','%'.$translatedCategory.'%')->
            orderBy($type, $order)->get();
        return view('books.bookResultsView', compact('keyword', 'books', 'type', 'order'));

    }

    public function selectBook() {
        return view('books.bookSearchView');
    }

    public function translateCategory($category) {
        if (strpos('aventura', strtolower($category)) > -1) {
            $category = 'adventure';
        }
        if (strpos('ciencia ficcion', strtolower($category)) > -1) {
            $category = 'science_fiction';
        }
//        if (strpos('comic', strtolower($category)) > -1) {
//            $category = 'comic';
//        }
        if (strpos('cuento de hadas', strtolower($category)) > -1) {
            $category = 'fairy_tail';
        }
        if (strpos('distopico', strtolower($category)) > -1) {
            $category = 'dystopic';
        }
//        if (strpos('manga', strtolower($category)) > -1) {
//            $category = 'manga';
//        }
        if (strpos('policiaco', strtolower($category)) > -1) {
            $category = 'detective';
        }
        if (strpos('romantico', strtolower($category)) > -1) {
            $category = 'romantic';
        }
//        if (strpos('terror', strtolower($category))) {
//            $category = 'terror';
//        }
        return $category;
    }

//    public function getLastId() {
//        $rows = Book::all();
//        return count($rows);
////        $last_row = current(end($rows));//funciona
////        return $last_row->id;
////        $last_row = end($rows);
//////        $first_row = reset($rows);
//////        echo $first_row;
////        print_r($last_row);
////        return $rows;
////       return var_dump(end($rows));
////        return end($rows)->id;
//    }
}
