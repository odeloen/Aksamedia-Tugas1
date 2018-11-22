@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products List</h1>
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
                            <th>Category Name</th>
                            <th>Articles in this category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($categories))
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>                                    
                                    <td>
                                        @if(!empty($category->articles))
                                            {{$category->articles->count()}}
                                        @endif
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
        <a href="{{route('article.list')}}"><button type="button" class="btn btn-primary">See Article</button></a>        
    </div>
@endsection