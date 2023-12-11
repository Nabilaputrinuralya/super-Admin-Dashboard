@extends('dashboards.usermanagements.layouts.usermanagement-dash-layout')
@section('title','Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>USER MANAGEMENT</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="">
          <div class=" card card-info card-outline">
              <div class="card-header">
                  <a href="{{ route('createusermanagement') }}" class="btn btn-success  mt-2 mb-3 ">Tambah <i class="fas fa-plus-square"></i></a>
                        <table id="myDataTable1" class="table table-bordered tbale-hover">
                        <thead>
                        <tr>
                        <th>No</th>
                        <th>User Project</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Profile Picture</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                    $no = 1;
                    @endphp
                          @foreach ($dataProject as $item)
                          <tr>
                              <th scope="item">{{ $no++}}</th>
                              <td>{{ $item->userproject }}</td>
                              <td>{{ $item->userid }}</td>
                              <td>{{ $item->username }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->phone }}</td>
                              <td>
                                  <img src="{{asset('usermanagementimg/'.$item->profilepicture)}}" width="40px" alt="" srcset="">
                              </td>
                              <td>
                                {{-- <a href="{{ url('showproject',$item->id) }}" class="btn btn-secondary">Show</a> --}}
                                <a href="{{ url('editusermanagement',$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('deleteusermanagement',$item->id) }}" class="btn btn-danger">Delete</a>
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
  <br/>
      <!-- /.content -->

@endsection