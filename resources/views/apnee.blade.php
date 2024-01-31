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
        <a href="{{ route('apnee.create') }}" class="btn btn-success mt-5 mb-5" style="width: 20%">Create Apnee</a>
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0" style="height: 90vh">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: absolute; height: 100%">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col" style="padding-right: 6px">#</th>
                        <th scope="col">nr_ap</th>
                        <th scope="col">num_ap</th>
                        <th scope="col">annee_ap</th>
                        <th scope="col">dat_ap</th>
                        <th scope="col">categorie_ap</th>
                        <th scope="col">lieu_ap</th>
                        <th scope="col">cleub_ap</th>
                        <th scope="col">pool_ap</th>
                        <th scope="col">ref_journee_ap</th>
                        <th scope="col">journee_ap</th>
                        <th scope="col">nr_plaque_ap</th>
                        <th scope="col">nr_licence_ap</th>
                        <th scope="col">abs_ap</th>
                        <th scope="col">type_journee_ap</th>
                        <th scope="col">apnee_ap</th>
                        <th scope="col">apnee_statique</th>
                        <th scope="col">ins_stat</th>
                        <th scope="col">presence_ap_stat</th>
                        <th scope="col">ins_bf</th>
                        <th scope="col">presence_apnee_dinamique_bf</th>
                        <th scope="col">distance_ap_dina_bf</th>
                        <th scope="col">temps_ap_dina_bf</th>
                        <th scope="col">ins_mf</th>
                        <th scope="col">presence_ap_dinamique_mf</th>
                        <th scope="col">distance_ap_dina_mf</th>
                        <th scope="col">temps_ap_dina_mf</th>
                        <th scope="col">presence_ap_dinamique_nf</th>
                        <th scope="col">distance_ap_dina_nf</th>
                        <th scope="col">temps_ap_dina_nf</th>
                        <th scope="col">ref_statique</th>
                        <th scope="col">class_statique</th>
                        <th scope="col">ref_dinam_bf</th>
                        <th scope="col">class_dinam_bf</th>
                        <th scope="col">ref_dinam_mf</th>
                        <th scope="col">class_dinam_mf</th>
                        <th scope="col">ins_nf</th>
                        <th scope="col">ref_dinam_nf</th>
                        <th scope="col">class_dinam_nf</th>
                        <th scope="col">jaune_statique</th>
                        <th scope="col">jaune_dina_bf</th>
                        <th scope="col">jaune_dina_mf</th>
                        <th scope="col">jaune_dina_nf</th>
                        <th scope="col">rouge_statique</th>
                        <th scope="col">rouge_dina_bf</th>
                        <th scope="col">rouge_dina_mf</th>
                        <th scope="col">rouge_dina_nf</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($apnee as $apne)
                      <tr>
                      <td>{{ $loop->iteration }}</td>
                        <td>{{ $apne->nr_ap }}</td>
                        <td>{{ $apne->num_ap }}</td>
                        <td>{{ $apne->annee_ap }}</td>
                        <td>{{ $apne->dat_ap }}</td>
                        <td>{{ $apne->categorie_ap }}</td>
                        <td>{{ $apne->lieu_ap }}</td>
                        <td>{{ $apne->cleub_ap }}</td>
                        <td>{{ $apne->pool_ap }}</td>
                        <td>{{ $apne->ref_journee_ap }}</td>
                        <td>{{ $apne->journee_ap }}</td>
                        <td>{{ $apne->nr_plaque_ap }}</td>
                        <td>{{ $apne->nr_licence_ap }}</td>
                        <td>{{ $apne->abs_ap }}</td>
                        <td>{{ $apne->type_journee_ap }}</td>
                        <td>{{ $apne->apnee_ap }}</td>
                        <td>{{ $apne->apnee_statique }}</td>
                        <td>{{ $apne->ins_stat }}</td>
                        <td>{{ $apne->presence_ap_stat }}</td>
                        <td>{{ $apne->ins_bf }}</td>
                        <td>{{ $apne->presence_apnee_dinamique_bf }}</td>
                        <td>{{ $apne->distance_ap_dina_bf }}</td>
                        <td>{{ $apne->temps_ap_dina_bf }}</td>
                        <td>{{ $apne->ins_mf }}</td>
                        <td>{{ $apne->presence_ap_dinamique_mf }}</td>
                        <td>{{ $apne->distance_ap_dina_mf }}</td>
                        <td>{{ $apne->temps_ap_dina_mf }}</td>
                        <td>{{ $apne->presence_ap_dinamique_nf }}</td>
                        <td>{{ $apne->distance_ap_dina_nf }}</td>
                        <td>{{ $apne->temps_ap_dina_nf }}</td>
                        <td>{{ $apne->ref_statique }}</td>
                        <td>{{ $apne->class_statique }}</td>
                        <td>{{ $apne->ref_dinam_bf }}</td>
                        <td>{{ $apne->class_dinam_bf }}</td>
                        <td>{{ $apne->ref_dinam_mf }}</td>
                        <td>{{ $apne->class_dinam_mf }}</td>
                        <td>{{ $apne->ins_nf }}</td>
                        <td>{{ $apne->ref_dinam_nf }}</td>
                        <td>{{ $apne->class_dinam_nf }}</td>
                        <td>{{ $apne->jaune_statique }}</td>
                        <td>{{ $apne->jaune_dina_bf }}</td>
                        <td>{{ $apne->jaune_dina_mf }}</td>
                        <td>{{ $apne->jaune_dina_nf }}</td>
                        <td>{{ $apne->rouge_statique }}</td>
                        <td>{{ $apne->rouge_dina_bf }}</td>
                        <td>{{ $apne->rouge_dina_mf }}</td>
                        <td>{{ $apne->rouge_dina_nf }}</td>
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
