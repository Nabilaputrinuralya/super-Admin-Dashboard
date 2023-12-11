@extends('dashboards.navbars.layouts.navbar-dash-layout')
@section('title','Dashboard')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="fontstyle">NAVIGATION BAR</h1>
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
               {{-- <a href="{{ route('createnavbar') }}" class="btn btn-success  mt-2 mb-3 ">Tambah <i class="fas fa-plus-square"></i></a> --}} 
                    <table id="" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>Website Logo</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @php
                $no = 1;
                @endphp
                      @foreach ($dataNavbar as $item)
                      <tr>
                          <td>
                            <img class="table-active" src="{{asset('navbarimg/'.$item->websitelogo)}}" width="300px" alt="" srcset="">
                          </td>
                          <td>
                            {{-- <a href="{{ url('shownavbar',$item->id) }}" class="btn btn-secondary">Show</a> --}}
                            <a href="{{ url('editnavbar',$item->id) }}" class="btn btn-primary">
                              <i class="fas fa-edit"></i>&nbsp;Edit</i>
                            </a>
                            {{-- <a href="{{ url('deletenavbar',$item->id) }}" class="btn btn-danger">Delete</a> --}}
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