@extends('layouts.master')
@section('content')
<div class="container">
<h2>Knowledge Management Lessons</h2>
<a class="btn btn-sm" href="javascript:void(0)">&nbsp;</a><a class="pull-right btn btn-sm btn-danger" href="{{ route('quicklearning')}}">Go Back</a>
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
            
            <div id="def" style="display:block">{!! str_limit($kmlesson->content, 300) !!} <a  class="btn btn-sm btn-info" href="{{ route('knowledgemanagement.show', $kmlesson->id)}}">...Show More</a></div>
            <div id="read" style="display:none">{!! $kmlesson->content!!} <a href="#" onClick="return getLess();">...Show Less</a></div>
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