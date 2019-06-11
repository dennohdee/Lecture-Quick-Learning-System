@extends('layouts.master')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
                        <h2>Quick Learning Services</h2>
                       
                        <table class="table">
                            <thead><tr>
                                <th colspan="2">Units Lists</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   <a href="{{ route('netadmin.index')}}">1. Network Administration</a>
                                </td>
                            </tr>                                                
                            <tr>
                                <td>
                                <a href="{{ route('sysadmin.index')}}"> 2. System Administration</a>
                                </td>
                                  
                             </tr>
                             <tr>
                                <td>
                                <a href="{{ route('dbms.index')}}">3. Database Management Systems</a>
                                </td>
                                  
                             </tr>
                             <tr>
                                <td>
                                <a href="{{ route('knowledgemanagement.index')}}">4. Knowledge Management</a>
                                </td>
                                  
                             </tr>
                             <tr>
                                <td>
                                &nbsp;
                                </td>
                                  
                             </tr>
                            
    
                       </tbody>
                        </table>
                        
                <embed />
                </div>
            <div class="col-md-4">
            <a href="{{ route('forum')}}" target="_blank">
                <h2>Go to Forum</h2>
            </a>
                <embed src="/forum#box">
            </div>
        </div>
</div>
@endsection
