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
                  @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
                  @endif

                  @if(Session::has('error'))
                      <div class="alert alert-danger">
                          {{ Session::get('error') }}
                      </div>
                  @endif

                  <!-- Error Message -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                <!-- /.Error Message --> 

                  <form action="{{ route('simpanpms') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Project Name</label>
                          <input type="text" id="projectname" name="projectname" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Project User</label>
                          <input type="text" id="projectuser" name="projectuser" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Project Deadline</label>
                          <input type="date" id="projectdeadline" name="projectdeadline" class="form-control">
                        </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success">Simpan data</button>
                      {{-- <a href="{{ route('createdashboardpms') }}" class="btn btn-secondary mr-1">Next</a> --}}
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

        {{-- <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Create New Project</h3>
                  </div>
                  <div class="card-body p-0">
                    <div class="bs-stepper">
                      <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#logins-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Data</span>
                          </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#information-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">Dashboard</span>
                          </button>
                        </div>
                      </div>
                      <div class="bs-stepper-content">
                        <!-- your steps content here -->
                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                          {{-- <form action="{{ route('simpanpms') }}" method="post" enctype="multipart/form-data">
                            @csrf          
                            <div class="form-group">
                              <label for="projectname" class="form-label">Project Name</label>
                              <input type="text" class="form-control" id="projectname" placeholder="Enter name for new project">
                            </div>
                            <div class="form-group">
                              <label for="projectuser" class="form-label">Project User</label>
                              <input type="text" class="form-control" id="projectuser" placeholder="Enter admin for the project">
                            </div>
                            <div class="form-group">
                              <label for="projectdeadline" class="form-label">Project Deadline</label>
                              <input type="date" class="form-control" id="projectdeadline" placeholder="Set project deadline">
                            </div>
                            <div class="form-group">
                              <button type="submit" href="{{ route('createdashboardpms') }}" class="btn btn-primary" >Next</button>
                            </div>
                          </form> --}}

                          {{--<form action="{{ route('simpanpms') }}" method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                  <input type="text" id="projectname" name="projectname" class="form-control">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Project User</label>
                                  <input type="text" id="projectuser" name="projectuser" class="form-control">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Project Deadline</label>
                                  <input type="date" id="projectdeadline" name="projectdeadline" class="form-control">
                                 </div>
                              <div class="form-group">
                              <button id="saveButton" type="submit" class="btn btn-primary">Save Data</button>
                              <button id="nextButton" class="btn btn-primary mr-1" onclick="stepper.next()" disabled>Next</button>
                            </div>
                          </form>
                        </div>          
                        </div>
                        <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content --> --}}
    

  </div>
  <!-- /.row -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  <script>
    document.getElementById('saveButton').addEventListener('click', function() {
        // Enable the 'Next' button when 'Save' button is clicked
        document.getElementById('nextButton').disabled = false;
    });

    document.getElementById('cloneFolderForm').addEventListener('submit', function(event) {
        event.preventDefault();

        fetch(this.getAttribute('action'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                // You can include additional data if needed
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

      document.getElementById('createFolderForm').addEventListener('submit', function(event) {
          event.preventDefault();
          const form = this;

          // ... (previous XMLHttpRequest code)

          xhr.onreadystatechange = function() {
              if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                      const response = JSON.parse(xhr.responseText);
                      if (response.success) {
                          alert('Folder created successfully!');
                          window.location.href = '/createpms'; // Redirect to a success page
                      } else {
                          alert('Folder creation failed!');
                          // Handle error or stay on the current page
                      }
                  } else {
                      alert('Request failed with status ' + xhr.status);
                  }
              }
          };

          // ... (rest of your XMLHttpRequest code)
      });

    $(document).ready(function() {
      $('#cloneTemplate').on('click', function() {
        $.ajax({
            url: '/datapms',
            type: 'POST',
            success: function(response) {
                if (response.message) {
                    alert(response.message); // Show success message
                } else {
                    alert(response.error); // Show error message
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error: Unable to clone folder');
            }
        });
      });
    });

  </script>

@endsection