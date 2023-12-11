@extends('dashboards.navbars.layouts.navbar-dash-layout')
@section('title','EditNavbar')

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
              <form action="{{ route('updatenavbar', $dt->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                     <div class="form-group">
                      <label for="exampleInputEmail1" class="form-label">Website Logo</label>
                      <input type="file" id="websitelogo" name="websitelogo" class="form-control" value="{{ $dt->websitelogo }}">
                     </div>
                 <div class="form-group">
                    <img class= "table-active" src="{{asset('navbarimg/'.$dt->websitelogo)}}" width="300px" alt="" srcset="">
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