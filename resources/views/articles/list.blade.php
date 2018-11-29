@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Article List</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($articles))
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->body}}</td>
                                    <td>
                                        @if(!empty($article->categories))
                                            @foreach($article->categories as $category)
                                                {{$category->name}}
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                            <a href="{{route('article.edit',['id' => $article->id])}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="{{route('article.handler.delete',['id' => $article->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
        <a href="{{route('article.add')}}"><button type="button" class="btn btn-primary">Add New Article</button></a>
        <a href="{{route('category.list')}}"><button type="button" class="btn btn-primary">See Categories</button></a>
    </div>
@endsection
