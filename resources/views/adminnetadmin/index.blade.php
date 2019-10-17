@extends('layouts.app')
@section('content')
<div class="container">
<h2>Network Administration Lessons</h2>
@if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{$message}}</p>
                </div>
              @endif
<a class="btn btn-sm btn-info" href="{{ route('adminnetadmin.create')}}">Add Lesson</a><a class="pull-right btn btn-sm btn-danger" href="{{ route('adminquicklearning')}}">Go Back</a>
<div class="row">
@if(count($netlessons)>0)

@foreach($netlessons as $netlesson)
<script type="text/javascript">
      function getAll(){
        document.getElementById('def').style.display="none";
        document.getElementById('read').style.display="block";
      }
      function getLess(){
        document.getElementById('def').style.display="block";
        document.getElementById('read').style.display="none";
      }
      </script>
  <div class="col-md-6">
<div class="box box-warning box-solid">
            <div class="box-header with-border">            
              <h3 class="box-title">Lesson No {{$netlesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $netlesson->objectives!!}
            <h3>Content</h3>
            
            <div id="def" style="display:block">{!! str_limit($netlesson->content, 300) !!} <a class="btn btn-sm btn-info" href="{{ route('adminnetadmin.show', $netlesson->id)}}">...Show More</a></div>
             
            <div><a class="btn btn-sm btn-warning" href="{{ route('adminnetadmin.edit', $netlesson->id)}}">Edit Lesson</a></div>
            <form action="{{ route('adminnetadmin.destroy', $netlesson->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete Lesson?')" type="submit">Delete</button>
                    </form>
            <h3>Download PDF</h3>
            @if(($netlesson->file) !== "")
              <a href="/files/{{$netlesson->file}}" >{{$netlesson->file}}</a>
            @else
              No File Have Been Uploaded!
               @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      @endforeach
      @else
      <div class="box-body">No Lessons Have Been Posted!</div>
      @endif
      
      </div>
      {!! $netlessons->links() !!}
</div>
@endsection