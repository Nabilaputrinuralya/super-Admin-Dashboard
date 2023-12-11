@extends('dashboards.usermanagements.layouts.usermanagement-dash-layout')
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
                <form action="{{ route('simpanusermanagement') }}" method="post" enctype="multipart/form-data">
                  @csrf
                   <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">User Project</label>
                    <input type="text" id="userproject" name="userproject" class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1" class="form-label">User ID</label>
                      <input type="text" id="userid" name="userid" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" id="username" name="username" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                       </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1" class="form-label">Profile Picture</label>
                      <input type="file" id="profilepicture" name="profilepicture" class="form-control">
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