@extends('layouts.app')
@section('content')
<div class="container">
<h2>Knowledge Management Lessons</h2>
<a class="btn btn-sm btn-info" href="{{ route('adminknowledgemanagement.create')}}">Add Lesson</a><a class="pull-right btn btn-sm btn-danger" href="{{ route('adminquicklearning')}}">Go Back</a>
<div class="row">
@if(count($kmlessons)>0)
@foreach($kmlessons as $kmlesson)
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
              <h3 class="box-title">Lesson No {{$kmlesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $kmlesson->objectives!!}
            <h3>Content</h3>
            
            <div>{!! str_limit($kmlesson->content, 300) !!} 
             <a class="btn btn-sm btn-info" class="btn btn-sm btn-info" href="{{ route('adminknowledgemanagement.show', $kmlesson->id)}}">...Show More</a></div>
             
            <div><a class="btn btn-sm btn-warning" href="{{ route('adminknowledgemanagement.edit', $kmlesson->id)}}">Edit Lesson</a></div>
             <form action="{{ route('adminknowledgemanagement.destroy', $kmlesson->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete Lesson?')" type="submit">Delete</button>
                    </form>
             <h3>Download PDF</h3>
              @if(($kmlesson->file) !== "")
              <a href="/files/{{$kmlesson->file}}" >{{$kmlesson->file}}</a>
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
       {!! $kmlessons->links() !!}
</div>
@endsection