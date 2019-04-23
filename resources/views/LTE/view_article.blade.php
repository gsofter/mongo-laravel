@extends('header')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Articles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>title</th>
                  <th>content</th>
                  <th>CreatedAt</th>
                  <th>UpdatedAt</th>
                  <th colspan="2"> </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($articles as $article)
                  <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>{{$article->updated_at}}</td>
                    <td>
                      <a href="{{action('ArticleController@edit', $article->id)}}" class="btn btn-warning">Edit</a>
                    <td>
                      <form action="{{route('article.destroy', $article->id)}}" method="GET">
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection('content')