@extends("layouts.Backend.Admin.app")

@section("title")
Dashboard
@endsection

@section("content")

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <form class="d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-light" id="dash-daterange">
                                    <span class="input-group-text bg-primary border-primary text-white">
                                        <i class="mdi mdi-calendar-range font-13"></i>
                                    </span>
                                </div>
                              
                              
                            </form>
                        </div>
                        <h4 class="page-title">Backoffice D'Administration</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-6">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-account-multiple widget-icon bg-success-lighten text-success"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Number of User">Utilisateurs</h5>
                                    <h3 class="mt-3 mb-3">{{ $statUser->monthly }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> {{ $statUser->percent }}%</span>
                                        <span class="text-nowrap">Depuis la création du site</span>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-cart-plus widget-icon bg-danger-lighten text-danger"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Escortes</h5>
                                    <h3 class="mt-3 mb-3">{{ $statEscort->monthly }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i>{{ $statEscort->percent }}%</span>
                                        <span class="text-nowrap">Depuis ce mois</span>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-currency-usd widget-icon bg-info-lighten text-info"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Revenue</h5>
                                    <h3 class="mt-3 mb-3">{{ $statIncome->total }} Fcfa</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> {{ $statIncome->percent }} %</span>
                                        <span class="text-nowrap">Depuis le dernier mois</span>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-pulse widget-icon bg-warning-lighten text-warning"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Growth">Annonces</h5>
                                    <h3 class="mt-3 mb-3">{{ $statAnnounce->monthly }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> {{ $statAnnounce->percent }}%</span>
                                        <span class="text-nowrap">Depuis le mois dernier</span>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end col -->

                <div class="col-xl-7 col-lg-6">
                    <div class="card card-h-100">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Stats Villes</h4>
                           
                        </div>
                        <div class="card-body pt-0">
                            <div dir="ltr">
                                <table class="table table-hover table-centered mb-0">
									<thead>
										<tr>
											<th>Ville</th>
											<th>Utilisateurs</th>
											<th>Annonces</th>
											<th>Escortes</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>ASOS Ridley High Waist</td>
											<td>$79.49</td>
											<td><span class="badge bg-primary">82 Pcs</span></td>
											<td>$6,518.18</td>
										</tr>
										<tr>
											<td>Marco Lightweight Shirt</td>
											<td>$128.50</td>
											<td><span class="badge bg-primary">37 Pcs</span></td>
											<td>$4,754.50</td>
										</tr>
										<tr>
											<td>Half Sleeve Shirt</td>
											<td>$39.99</td>
											<td><span class="badge bg-primary">64 Pcs</span></td>
											<td>$2,559.36</td>
										</tr>
										<tr>
											<td>Lightweight Jacket</td>
											<td>$20.00</td>
											<td><span class="badge bg-primary">184 Pcs</span></td>
											<td>$3,680.00</td>
										</tr>
									</tbody>
								</table>

                      
                            </div>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Annonces Populaires</h4>
                            
                        </div>

                        <div class="card-body pt-0">
                            
                              <table class="table table-striped table-centered mb-0">
								<thead>
									<tr>
										<th>Utilisateur</th>
										<th>Titre</th>
										<th>Vues</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @if (count($popularsAds))
                                        
                                        @foreach ($popularsAds as $popularAd)
                                            @if ($popularAd['visits'] == 0)
                                                @break
                                            @endif
                                            <tr>
                                                <td class="table-user">
                                                    <img src="{{ route('display.ads.image',['id'=>$popularAd['id'], 'path'=>$popularAd['images'][0]['path']] )}}" alt="table-user" class="me-2 rounded-circle" />
                                                    {{  ucfirst($popularAd['user']['username'])  }}
                                                </td>
                                                <td> {{  ucfirst($popularAd['title'])  }}</td>
                                                <td> {{  ucfirst($popularAd['visits'])  }}</td>
                                                <td class="table-action">
                                                    <a href="{{ route('ads.details', ['username' => $popularAd['user']['username'],'slug'=>$popularAd['slug']]) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        Aucune Annonce à Afficher
                                    @endif
									
									
								</tbody>
							</table>

					
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

           

              
                <!-- end col -->

            </div>
            <!-- end row -->
			
			        <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Annonces Récentes</h4>
                            
                        </div>

                        <div class="card-body pt-0">
                            
                              <table class="table table-striped table-centered mb-0">
								<thead>
									<tr>
										<th>Utilisateur</th>
										<th>Titre</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-user">
											<img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
											Risa D. Pearson
										</td>
										<td>AC336 508 2157</td>
										<td>July 24, 1950</td>
										<td class="table-action">
											<a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
										</td>
									</tr>
									
								</tbody>
							</table>

					
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

           

              
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Viens - Yamo
                </div>
                <div class="col-md-6">
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
