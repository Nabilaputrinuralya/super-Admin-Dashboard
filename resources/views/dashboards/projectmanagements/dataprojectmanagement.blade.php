@extends('dashboards.projectmanagements.layouts.projectmanagement-dash-layout')
@section('title','Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>PROJECT MANAGEMENT</h1>
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
                <a href="{{ route('createpms') }}" class="btn btn-success  mt-2 mb-3 ">Tambah <i class="fas fa-plus-square"></i></a>
                      <table id="myDataTable1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Project User</th>
                        <th>Project Deadline</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                        @foreach ($dataPms as $item)
                        <tr>
                          <th scope="item">{{ $no++}}</th>
                            <td>{{ $item->project_id }}</td>
                            <td>{{ $item->projectname }}</td>
                            <td>{{ $item->projectuser }}</td>
                            <td>{{ $item->projectdeadline }}</td>
                            <td>
                              {{-- <a href="{{ url('showpms',$item->id) }}" class="btn btn-secondary">Show</a> --}}
                              <a href="{{ url('editpms',$item->id) }}" class="btn btn-primary">Edit</a>
                              {{-- <a href="{{ url('deletepms',$item->id) }}" class="btn btn-danger">Delete</a> --}}
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