<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Soluciones Luna</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Panel principal</span>
          </a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">

      <!--Section: Sales Performance KPIs-->
      <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
              <div class="align-self-center">
                <i class="far fa-user text-success fa-3x"></i>
                <h5 class="mb-0 text-center">  
                    <strong>Bienvenido:  {{auth()->user()->name}}</strong>
                </h5>
              </div>
          </div>
          <div>
            <p>
              Movil:  {{auth()->user()->telefono}}
              <br>
              Correo:  {{auth()->user()->email}}
              <br>
              Dirección:  {{auth()->user()->direccion}}
            </p>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Fecha del ultimo pago</th>
                    <th scope="col">Fecha del pago</th>
                    <th scope="col">Fecha de corte</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"> </th>
                    <td> {{auth()->user()->fechapagoanterior}}</td>
                    <td> {{auth()->user()->fechapago}}</td>
                    <td> {{auth()->user()->fechacorte}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Sales Performance KPIs-->

    
      <!--Section: Statistics with subtitles-->
      <section>
        <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h4>Tu plan actual es</h4>
                    </div>
                    <div class="align-self-center">
                      <h4>: {{auth()->user()->paquete}}</h4>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-book-open text-info fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">{{auth()->user()->precio}}</h2>
                    </div>
                    <div>
                      <h4>Total a pagar</h4>
                      <p class="mb-0">Mensualmente</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-wallet text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>