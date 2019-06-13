@extends('layouts.app')
@section('content')
<div class="container">

<h2>Knowledge Management Add Lesson</h2>

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
            <form action="{{ route('adminknowledgemanagement.store')}}" method="post">
       @csrf
            <p>Lesson No.</p>
             <input class="form-control" type="text" value="" >
            <p>Objectives</p>
            <textarea class="form-control"></textarea>
            <p>Content</p>
            <textarea class="form-control"></textarea>
            <p>Upload file</p>
              <input class="form-control" type="file" name="file">
              <p>References</p>
             <input class="form-control" type="text" value="" >
              <p>&nbsp;</p>
              <button type="submit" onclick="return confirm('Add Lesson?')" class="pull-right btn btn-sm btn-primary">Save</button>
             
              <a class="btn btn-danger btn-sm" href="{{ route('adminknowledgemanagement.index')}}">Go Back</a>
               </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection