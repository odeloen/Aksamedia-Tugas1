@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Article</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="{{ route('article.handler.edit',['id'=>$article->id]) }}" method="post">
            @csrf
            <table>
                <tr class="form-group">
                    <td>Title :</td>
                    <td><input class="form-control" type="text" name="title" value="{{$article->title}}"></td>
                </tr>
                <tr class="form-group">
                    <td>Body :</td>
                    <td><textarea class="form-control" type="text" name="body">{{$article->body}}</textarea></td>
                </tr>
                <tr class="form-group">
                    <td>Kategori</td>
                    <td>
                        @if(!empty($categories))
                            @foreach($categories as $category)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="categories[]"
                                    @if (!empty($article->categories))
                                        @foreach ($article->categories as $articleCategory)
                                            @if ($articleCategory->name == $category->name)
                                                checked
                                            @endif
                                        @endforeach
                                    @endif
                                    value="{{$category->id}}">{{$category->name}}
                                </label>
                            </div>
                            @endforeach
                        @endif
                    </td>
                </tr>
            </table>
            <input class="btn btn-primary" type="submit" value="Simpan">
        </form>
        <a href="{{route('article.list')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
@endsection
