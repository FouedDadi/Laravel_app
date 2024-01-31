@extends('layouts.app')

@section('content')
<style>html,
body,
.intro {
  height: 90%;
}

/* table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
} */

thead th {
  color: #fff;
}

.card {
  border-radius: .5rem;
}

.table-scroll {
  border-radius: .5rem;
}

.table-scroll table thead th {
  font-size: 1.25rem;
}
thead {
  top: 0;
  position: sticky;
}</style>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ftpsdb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-secondary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/home" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid" style="color: black"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Tables</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ url('/apnee') }}" class="nav-link px-0" style="color: black"> <span class="d-none d-sm-inline" style="color: black">Apnee</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{ url('/equipe') }}" class="nav-link px-0" style="color: black"> <span class="d-none d-sm-inline" style="color: black">Equipe</span></a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <hr>
                <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="col py-3 container">
        <section class="intro">
  <!-- <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100"> -->
      <!-- <div class=""> -->
        <div class="row justify-content-center">
        <a href="{{ route('equipe.create') }}" class="btn btn-success mt-5 mb-5" style="width: 20%">Create Equipe</a>
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0" style="height: 90vh">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: absolute; height: 100%">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col">nr_ap</th>
                        <th scope="col">equipe</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($equipe as $equipe)
                      <tr>
                        <td>{{ $equipe->nr_equipe }}</td>
                        <td>{{ $equipe->equipe }}</td>
                        <td>
                          <a href="{{ route('equipe.edit', $equipe->nr_equipe) }}" class="btn btn-primary">Edit</a>
                          <button class="btn btn-danger" onclick="deleteEquipe({{ $equipe->nr_equipe }})">Delete</button>
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
      <!-- </div> -->
    <!-- </div>
  </div> -->
</section>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteEquipe(nrEquipe) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform the delete operation via AJAX or form submission
                    // For simplicity, let's assume you have a delete route in EquipeController
                    // and use AJAX to send the request
                    axios.delete('/equipe/' + nrEquipe)
                        .then((response) => {
                            if (response.data.success) {
                                Swal.fire('Deleted!', 'Equipe has been deleted.', 'success');
                                window.location.reload();
                                // You may want to reload the page or update the table without refreshing
                            } else {
                                Swal.fire('Error!', 'Failed to delete equipe.', 'error');
                            }
                        })
                        .catch((error) => {
                            console.error(error);
                            Swal.fire('Error!', 'Failed to delete equipe.', 'error');
                        });
                }
            });
        }
    </script>
