@extends('layouts.Backend.Admin.app')
@section('title')
Listes des escorts
@endsection

@section("content") vccv
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Ajouter un(e) escort</a></li>
                                <li class="breadcrumb-item active">Escorts</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un(e) escort</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                    <form method="get" action="#" class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                        <div class="col-auto">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>

                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center">



                                                <select name="role_id" class="form-select" id="status-select">
                                                    <option selected>Rechercher par username...</option>




                                                </select>
                                                <button type="submit" class="btn" style="background-color: #ED5858;color:white"> Filtrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('users.create') }}"><button type="button" class="btn btn-danger mb-2 me-2"> Nouvel utilisateur</button></a>
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Ville</th>
                                            <th>Numéro de Téléphone</th>
                                            <th>Vérifié</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($escorts as $escort)


                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{ $escort->id }}</a> </td>
                                            <td>
                                                {{ ucfirst($escort->username) }}</small>
                                            </td>
                                            <td>
                                                <h5>{{ $escort->town->town_name }} </h5>
                                            </td>
                                            <td>
                                               {{ $escort->phone_number }}
                                            </td>
                                            <td>

                                                 <form method="POST" action="{{ route('verify', ['id' => $escort->id ]) }}"
                                                    id="verify{{ $escort->id }}">

                                                        @csrf

                                                 <input type="checkbox" id="isVerify{{ $escort->id }}" name="isVerify{{ $escort->id }}" @if($escort->isVerify) checked @endif data-switch="success"
                                                 onclick="event.preventDefault(); document.getElementById('verify{{ $escort->id }}').submit();"/>
                                                 <label for="isVerify{{ $escort->id }}" data-on-label="Oui" data-off-label="Non"></label></div>
                                                 </form>
                                            </td>

                                            <td>

                                                <a href="{{ route('suspend-user',$escort->id) }}" style="cursor: pointer" class="action-icon"> <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Suspendre le compte" class="ri-escort-unfollow-fill"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>



                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Stillforce Technology
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
