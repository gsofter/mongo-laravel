@extends('header')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input your article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method = "post" action="{{route('article.save')}}">
               @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="article-title">Title</label>
                  <input type="text" class="form-control" id="article-title" placeholder="title" name="title">
                </div>
                <div class="form-group">
                  <label for="article-content">Content</label>
                  <input class="form-control" id="article-content" placeholder="content" name="content">
                  </input> 
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection('content')