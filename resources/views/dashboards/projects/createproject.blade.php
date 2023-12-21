@extends('dashboards.projects.layouts.project-dash-layout')
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
              <form action="{{ route('simpanproject') }}" method="post" enctype="multipart/form-data">
                @csrf
                 <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Project Name</label>
                  <input type="text" id="projectname" name="projectname" class="form-control">
                  @error('projectname')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project Description</label>
                    <input type="text" id="projectdescritpion" name="projectdescription" class="form-control">
                    @error('projectdescription')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                   </div>
                   {{-- <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project Detail</label>
                    <input type="text" id="projectdetails" name="projectdetails" class="form-control">
                    @error('projectdetails')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                   </div> --}}
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Project image</label>
                    <input type="file" id="projectimage" name="projectimage" class="form-control">
                    @error('projectimage')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                   </div>
                 <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan data</button>
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