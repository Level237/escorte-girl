@extends('layouts.Backend.Admin.app')

@section('title')
Nouvel utilisateur
@endsection

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users') }}">Abonnements</a></li>
                                <li class="breadcrumb-item active">Nouvel abonnement</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Nouvel Abonnement</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">



                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">


                                            <form method="POST" action="{{ route('users.create') }}">
                                                @csrf
                                                <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Nom de l'abonnement</label>
                                                        <input type="text" name="membership_name" placeholder="Entrez le nom de l'abonnement" id="simpleinput" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Durée</label>
                                                    <input type="number" id="period" name="period" class="form-control" 
                                                    placeholder="Durée en jours avant l'expiration de l'abonnement">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Coût</label>
                                                    <input type="number" id="price" name="price" class="form-control" 
                                                    placeholder="Entrez le montant à payer pour cette abonnement">
                                                </div>
                                               

                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                                    </div>
                                            </form>



                                    <!-- end row-->
                                </div> <!-- end preview-->


                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Stillforce Technologies
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
