<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    //
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
}
