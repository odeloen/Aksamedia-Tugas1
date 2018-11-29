<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function list(){
        $articles = Article::all();
        return view('articles.list')->with('articles',$articles);
    }

    public function add(){
        $categories = Category::all();
        return view('articles.add')->with('categories',$categories);
    }

    public function handlerAdd(Request $request){
        //dd($request);
        $request->validate([
            'categories' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        foreach($request->categories as $category){
            DB::table('article_categories')->insert([
                'article_id' => $article->id,
                'category_id' => $category,
            ]);
        }

        return redirect(route('article.list'));
    }

    public function edit($articleID){
        $article = Article::find($articleID);
        $categories = Category::all();
        //dd($article);
        return view('articles.edit')->with('article',$article)->with('categories',$categories);
    }

    public function handlerEdit(Request $request, $articleID){
        $request->validate([
            'categories' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($articleID);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        //dd($article);

        DB::table('article_categories')->where('article_id',$articleID)->delete();

        foreach($request->categories as $category){
            DB::table('article_categories')->insert([
                'article_id' => $article->id,
                'category_id' => $category,
            ]);
        }

        return redirect(route('article.list'));
    }

    public function handlerDelete(Request $request, $articleID){
        $article = Article::find($articleID);
        $article->delete();
        DB::table('article_categories')->where('article_id',$articleID)->delete();
        return redirect(route('article.list'));
    }
}
