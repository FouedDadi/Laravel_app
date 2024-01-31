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
    <div class="container">
        <h2>Create Apnee</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('apnee.store') }}">
            @csrf

            <!-- Add your form inputs here based on the model's fields -->
            <div class="form-group">
                <label for="num_ap">Num Ap:</label>
                <input type="number" class="form-control" name="num_ap" required>
            </div>

            <div class="form-group">
                <label for="annee_ap">Annee Ap:</label>
                <input type="number" class="form-control" name="annee_ap" required>
            </div>

            <div class="form-group">
                <label for="dat_ap">Date Ap:</label>
                <input type="date" class="form-control" name="dat_ap" required>
            </div>

            <div class="form-group">
                <label for="categorie_ap">Category:</label>
                <input type="text" class="form-control" name="categorie_ap" required>
            </div>

            <div class="form-group">
                <label for="lieu_ap">lieu_ap:</label>
                <input type="number" class="form-control" name="lieu_ap" required>
            </div>

            <div class="form-group">
                <label for="cleub_ap">cleub_ap:</label>
                <input type="number" class="form-control" name="cleub_ap" required>
            </div>

            <div class="form-group">
                <label for="pool_ap">pool_ap:</label>
                <input type="number" class="form-control" name="pool_ap" required>
            </div>

            <div class="form-group">
                <label for="ref_journee_ap">ref_journee_ap:</label>
                <input type="number" class="form-control" name="ref_journee_ap" required>
            </div>

            <div class="form-group">
                <label for="journee_ap">journee_ap:</label>
                <input type="number" class="form-control" name="journee_ap" required>
            </div>


            <div class="form-group">
                <label for="nr_plaque_ap">nr_plaque_ap:</label>
                <input type="number" class="form-control" name="nr_plaque_ap" required>
            </div>

            <div class="form-group">
                <label for="nr_licence_ap">nr_licence_ap:</label>
                <input type="number" class="form-control" name="nr_licence_ap" required>
            </div>

            <div class="form-group">
                <label for="abs_ap">abs_ap:</label>
                <input type="number" class="form-control" name="abs_ap" required>
            </div>

            <div class="form-group">
                <label for="type_journee_ap">Type of Journee:</label>
                <input type="text" class="form-control" name="type_journee_ap" required>
            </div>

            <div class="form-group">
                <label for="apnee_ap">apnee_ap:</label>
                <input type="number" class="form-control" name="apnee_ap" required>
            </div>

            <div class="form-group">
                <label for="apnee_statique">apnee_statique:</label>
                <input type="number" class="form-control" name="apnee_statique" required>
            </div>

            <div class="form-group">
                <label for="ins_stat">ins_stat:</label>
                <input type="number" class="form-control" name="ins_stat" required>
            </div>

            <div class="form-group">
                <label for="presence_ap_stat">presence_ap_stat:</label>
                <input type="number" class="form-control" name="presence_ap_stat" required>
            </div>

            <div class="form-group">
                <label for="ins_bf">ins_bf:</label>
                <input type="number" class="form-control" name="ins_bf" required>
            </div>

            <div class="form-group">
                <label for="presence_apnee_dinamique_bf">presence_apnee_dinamique_bf:</label>
                <input type="number" class="form-control" name="presence_apnee_dinamique_bf" required>
            </div>

            <div class="form-group">
                <label for="distance_ap_dina_bf">Distance (Dinamique BF):</label>
                <input type="number" step="any" class="form-control" name="distance_ap_dina_bf" required>
            </div>

            <div class="form-group">
                <label for="temps_ap_dina_bf">temps_ap_dina_bf:</label>
                <input type="number" class="form-control" name="temps_ap_dina_bf" required>
            </div>

            <div class="form-group">
                <label for="ins_mf">ins_mf:</label>
                <input type="number" class="form-control" name="ins_mf" required>
            </div>

            <div class="form-group">
                <label for="presence_ap_dinamique_mf">presence_ap_dinamique_mf:</label>
                <input type="number" class="form-control" name="presence_ap_dinamique_mf" required>
            </div>

            <div class="form-group">
                <label for="distance_ap_dina_mf">Distance (Dinamique MF):</label>
                <input type="number" step="any" class="form-control" name="distance_ap_dina_mf" required>
            </div>

            <div class="form-group">
                <label for="temps_ap_dina_mf">temps_ap_dina_mf:</label>
                <input type="number" class="form-control" name="temps_ap_dina_mf" required>
            </div>

            <div class="form-group">
                <label for="presence_ap_dinamique_nf">presence_ap_dinamique_nf:</label>
                <input type="number" class="form-control" name="presence_ap_dinamique_nf" required>
            </div>

            <div class="form-group">
                <label for="distance_ap_dina_nf">Distance (Dinamique NF):</label>
                <input type="number" step="any" class="form-control" name="distance_ap_dina_nf" required>
            </div>

            <div class="form-group">
                <label for="temps_ap_dina_nf">temps_ap_dina_nf:</label>
                <input type="number" class="form-control" name="temps_ap_dina_nf" required>
            </div>

            <div class="form-group">
                <label for="ref_statique">ref_statique:</label>
                <input type="number" class="form-control" name="ref_statique" required>
            </div>

            <div class="form-group">
                <label for="class_statique">class_statique:</label>
                <input type="number" class="form-control" name="class_statique" required>
            </div>

            <div class="form-group">
                <label for="ref_dinam_bf">ref_dinam_bf:</label>
                <input type="number" class="form-control" name="ref_dinam_bf" required>
            </div>

            <div class="form-group">
                <label for="class_dinam_bf">class_dinam_bf:</label>
                <input type="number" class="form-control" name="class_dinam_bf" required>
            </div>

            <div class="form-group">
                <label for="ref_dinam_mf">ref_dinam_mf:</label>
                <input type="number" class="form-control" name="ref_dinam_mf" required>
            </div>

            <div class="form-group">
                <label for="class_dinam_mf">class_dinam_mf:</label>
                <input type="number" class="form-control" name="class_dinam_mf" required>
            </div>

            <div class="form-group">
                <label for="ins_nf">ins_nf:</label>
                <input type="number" class="form-control" name="ins_nf" required>
            </div>

            <div class="form-group">
                <label for="ref_dinam_nf">ref_dinam_nf:</label>
                <input type="number" class="form-control" name="ref_dinam_nf" required>
            </div>

            <div class="form-group">
                <label for="class_dinam_nf">class_dinam_nf:</label>
                <input type="number" class="form-control" name="class_dinam_nf" required>
            </div>

            <div class="form-group">
                <label for="jaune_statique">jaune_statique:</label>
                <input type="number" class="form-control" name="jaune_statique" required>
            </div>

            <div class="form-group">
                <label for="jaune_dina_bf">jaune_dina_bf:</label>
                <input type="number" class="form-control" name="jaune_dina_bf" required>
            </div>

            <div class="form-group">
                <label for="jaune_dina_mf">jaune_dina_mf:</label>
                <input type="number" class="form-control" name="jaune_dina_mf" required>
            </div>

            <div class="form-group">
                <label for="jaune_dina_nf">jaune_dina_nf:</label>
                <input type="number" class="form-control" name="jaune_dina_nf" required>
            </div>

            <div class="form-group">
                <label for="rouge_statique">rouge_statique:</label>
                <input type="number" class="form-control" name="rouge_statique" required>
            </div>

            <div class="form-group">
                <label for="rouge_dina_bf">rouge_dina_bf:</label>
                <input type="number" class="form-control" name="rouge_dina_bf" required>
            </div>

            <div class="form-group">
                <label for="rouge_dina_mf">rouge_dina_mf:</label>
                <input type="number" class="form-control" name="rouge_dina_mf" required>
            </div>

            <div class="form-group">
                <label for="rouge_dina_nf">rouge_dina_nf:</label>
                <input type="number" class="form-control" name="rouge_dina_nf" required>
            </div>
            <!-- Add other fields here with similar structure -->

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

      <!-- </div> -->
    <!-- </div>
  </div> -->
</section>
        </div>
    </div>
</div>

@endsection
