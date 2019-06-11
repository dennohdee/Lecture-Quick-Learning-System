@extends('layouts.master')
@section('content')
<div class="container">
<h2>DBMS Lessons</h2>
<div class="row">
@if(count($dbmslesson)>0)
@foreach($dbmslesson as $dbmslesson)
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
              <h3 class="box-title">Lesson No {{$dbmslesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $dbmslesson->objectives!!}
            <h3>Content</h3>
            
            <div id="def" style="display:block">{!! str_limit($dbmslesson->content, 300) !!} <a href="{{ route('netadmin.show', $dbmslesson->id)}}">...Show More</a></div>
            <div id="read" style="display:none">{!! $dbmslesson->content!!} <a href="#" onClick="return getLess();">...Show Less</a></div>
            <h3>Download PDF</h3>
              <a href="/files/{{$dbmslesson->file}}" >{{$dbmslesson->file}}</a>
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
</div>
@endsection