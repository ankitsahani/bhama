@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Pages</a> <a href="#" class="current">View Pages</a> </div>
        <h1>Pages</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>View Pages</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Page ID</th>
                    <th>Page Name</th>
                    <th>Page Level</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($Pages as $Page)
                  <tr class="gradeX">
                    <td>{{ $Page->id }}</td>
                    <td>{{ $Page->name }}</td>
                    <td>{{ $Page->parent_id }}</td>
                    <td>{{ strip_tags($Page->description) }}</td>
                    <td class="center">
                      <div class="fr">
                        <a href="{{url('/admin/edit-pages/'.$Page->id)}}" class="btn btn-primary btn-mini">Edit
                        </a>
                        <a  href="delete-pages/{{$Page->id}}" rel1="delete-Page"
                          href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete
                        </a>
                      </div>
                    </td>              
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection