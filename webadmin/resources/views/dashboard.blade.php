@extends('template.main')
@section('main-container')

<main id="main" class="main">

  <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css>

            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
          <title>Dashboard - SB Admin</title>

         
     

          
      </head>
      <body class="sb-nav-fixed">
          
              <div id="layoutSidenav_content">
                  <main>
                      <div class="container-fluid px-4">
                          <h1 class="mt-4">Dashboard</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                          <div class="row">
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-primary text-white mb-4">
                                      <div class="card-body">Primary Card</div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="#">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-warning text-white mb-4">
                                      <div class="card-body">Warning Card</div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="#">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-success text-white mb-4">
                                      <div class="card-body">Success Card</div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="#">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body">Danger Card</div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="small text-white stretched-link" href="#">View Details</a>
                                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xl-6">
                                  <div class="card mb-4">
                                      <div class="card-header">
                                          <i class="fas fa-chart-area me-1"></i>
                                          Area Chart Example
                                      </div>
                                      <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                  </div>
                              </div>
                              <div class="col-xl-6">
                                  <div class="card mb-4">
                                      <div class="card-header">
                                          <i class="fas fa-chart-bar me-1"></i>
                                          Bar Chart Example
                                      </div>
                                      <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                  </div>
                              </div>
                          </div>
                         </div>
                          </div>
                      </div>
                  </main>
                  <footer class="py-4 bg-light mt-auto">
                      <div class="container-fluid px-4">
                          <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted">Copyright &copy; Your Website 2021</div>
                              <div>
                                  <a href="#">Privacy Policy</a>
                                  &middot;
                                  <a href="#">Terms &amp; Conditions</a>
                              </div>
                          </div>
                      </div>
                  </footer>
              </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
          <script src="js/scripts.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
          <script src="assets/demo/chart-area-demo.js"></script>
          <script src="assets/demo/chart-bar-demo.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
          <script src="js/datatables-simple-demo.js"></script>
      </body>
  </html>
  

</main><!-- End #main -->
@endsection
