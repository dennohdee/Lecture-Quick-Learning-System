@extends('layouts.app')
@section('content')
<div class="container">

<h2>DBMS Lesson {{$dbmslesson->lessonNo}}</h2>

<div class="box box-warning">
            <div class="box-header with-border">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="{{ route('admindbms.update', $dbmslesson->id)}}" method="post">
       @csrf
       @method('PUT')
            <p>Lesson No.</p>
             <input class="form-control" type="text" value="{{$dbmslesson->lessonNo}}" >
            <p>Objectives</p>
            <textarea class="form-control">{!! $dbmslesson->objectives!!}</textarea>
            <p>Content</p>
            <textarea class="form-control">{!! $dbmslesson->content !!}</textarea>
            <p>Upload file</p>
              <a href="/files/{{$dbmslesson->file}}" >{{$dbmslesson->file}}</a>
              <input class="form-control" type="file" name="file">
              <p>References</p>
             <input class="form-control" type="text" value="{{$dbmslesson->references}}" >
              <p>&nbsp;</p>
              <button type="submit" onclick="return confirm('Update Lesson Details?')" class="pull-right btn btn-sm btn-primary">Save</button>
              <a class="btn btn-danger btn-sm" href="{{ route('admindbms.index')}}">Go Back</a>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection