<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Article;
class ArticleController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    //login functions
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    //
    public function index()
    {
        $user = Auth::user();
        return view('LTE/home', compact('user'));
    }

    //redirects to the view page
    public function view_article(){
        $user = Auth::user();
    	$articles = Article::all();
    	return view('LTE/view_article', compact('articles', 'user'));
    }


    //redirects to the add page
    public function add_article(){
        $user = Auth::user();
    	return view('LTE/add_article', compact('user'));
    }


    public function save_article(Request $request)
    {
        $user = Auth::user();
    	$article = new Article();
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->save();

    	$articles = Article::all();
    	return view('LTE/view_article', compact('articles', 'user'));
    }

    //redirects to edit page
    public function edit($id)
    {
    	$user = Auth::user();
        $article = Article::find($id);
        
        return view('LTE/edit_article',compact('article', 'user'));
    }


    public function update(Request $request, $id)
    {
        $article= Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content; 
        $article->save();


        return redirect()->route('article.view');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.view');      
    }
}
