@extends('layouts.app')
@section('content')
<div class="container">

<h2>System Administration Add Lesson</h2>

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
            @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <strong>Error! </strong>There were some errors with inputs. 
                         <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul> 
                    </div>
                    
                @endif
             @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{$message}}</p>
                </div>
              @endif
            <form action="{{ route('adminsysadmin.store')}}" method="post">
      @csrf
            <p>Lesson No.</p>
             <input class="form-control" type="hidden" name="unit_id" value="2" >
             <input class="form-control" type="hidden" name="posted_by" value="{{ Auth::user()->id }}" >
             <input class="form-control" type="text" name="lessonNo" >
            <p>Objectives</p>
                <textarea class="textarea" name="objectives" placeholder="Type here"
                          style="width: 100%; height: auto; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              <p>Content</p>
           <textarea class="textarea" name="content" placeholder="Type here"
                          style="width: 100%; height: auto; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            <p>Upload file</p>
              <input class="form-control" type="file" name="file">
              <p>References</p>
             <textarea class="textarea" name="references" placeholder="Type here"
                          style="width: 100%; height: auto; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              <p>&nbsp;</p>
              <button type="submit" onsubmit="return confirm('Add Lesson?')" class="pull-right btn btn-sm btn-primary">Save</button>
              <a class="btn btn-danger btn-sm" href="{{ route('adminsysadmin.index')}}">Go Back</a>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection