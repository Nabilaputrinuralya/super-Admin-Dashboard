@extends('dashboards.projectmanagements.layouts.projectmanagement-dash-layout')
@section('title','Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="content"> 
    <div class="card card-info card-outline">
      <div class="card-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
            <form action="{{ route('updateprojectmanagement', ['id' => $dt->id]) }}" method="post" enctype="multipart/form-data">
              @csrf
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project ID</label>
                    <input type="text" id="project_id" name="project_id" class="form-control" value="{{ $dt->project_id }}">
                   </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project Name</label>
                    <input type="text" id="projectname" name="projectname" class="form-control" value="{{ $dt->projectname }}">
                   </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project User</label>
                    <input type="text" id="projectuser" name="projectuser" class="form-control" value="{{ $dt->projectuser }}">
                   </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project Deadline</label>
                    <input type="date" id="projectdeadline" name="projectdeadline" class="form-control" value="{{ $dt->projectdeadline }}">
                   </div>   
               <div class="form-group">
                <button type="submit" class="btn btn-success">Ubah data</button>
               </div>
                        </div>
                      </form>
                    </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection