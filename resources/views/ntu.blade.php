@extends('layout.base')

@section('title', 'DEV-ID | Turbidity')

@section('content')

<?php
$ntu = [];
$doValue=[];
$kadarGaram=[];
$all_date=[];
?>
@foreach($data_all as $data)
  <?php
    $ntu[]=$data->NTU;
    $doValue[] =$data->doValue;
    $kadarGaram[] =$data->kadarGaram;
    $time= strtotime($data->created_at);
    $all_date[] = date('d-m-Y H:i:s',strtotime('+7 hours',$time) );
    

  ?>
@endforeach
<?php
// dd($all_date);

?>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading color"> <img src="images/user.png" alt="" width="150"> </div>
      <div class="list-group list-group-flush">
      <a href="/" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="/doValue" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-circle-notch"></i> Disolved Oxygen</a>
      <a href="/kadarGaram" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-snowflake"></i> Salinity</a>
      <a href="/ntu" class="list-group-item list-group-item-action bg-dark"><i class="fab fa-periscope"></i> Turbidity</a>
      <a href="/location" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-map-marked-alt"></i> Location</a>
      <a href="/gallery" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-image"></i> Gallery</a>
      <a href="/profile" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-user-circle"></i> Profile</a>
    
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link color" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Setting</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <div class="container-fluid">
          <h2 class="mt-4 text-center">Kadar Kekeruhan (Turbidity)</h2>
        <!-- <hr class="line1"> -->
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 offset-1">
              <div class="card center" style="width: 14rem;">
                <div class="card-body head-1">
                  <h5 class="card-title">NTU : {{end($ntu)}}</h5>
                </div>
                @if(end($ntu) <=20)
                <h5 class="card-title body-text">baik</h5>
                @elseif(end($ntu) >=50)
                <h5 class="card-title body-text">keruh</h5>
                @else
                <h5 class="card-title body-text">normal</h5>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="container chart"> 
                <canvas id="hourly"></canvas>
              </div>

            </div>
          </div>
        <div>
       
        <footer >
          <div class="bg-color footer-copyright ml-2 py-3 color-foot">Copyright © 
            <a href="http://instagram.com/dhoifuddaffa" class="foot">Dhoiffudaffa</a> 2020
          </div>
        </footer>
          
    </div>
    <!-- /#page-content-wrapper -->

    
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    var ntu= <?php echo json_encode($ntu); ?>;
    var all_date= <?php echo json_encode($all_date); ?>;
    // =======================chart===================
    Chart.defaults.global.elements.line.fill = false;
      
      var data_chart = 
      {
            labels:all_date ,
            datasets: [{
                type: 'line',
                label: 'Turbidity',
                id: "y-axis-0",
                borderColor: "blue",
                data:ntu
            }
            ]
        };
      
        
      var options = 
      {
          title: {
                  display: true,
                  text: 'Nilai Sensor',
                  position:'left'
              },
            
            scales: {
                yAxes: [{
                    // stacked: true,
                    position: "left",
                    id: "y-axis-0",
                }],
           
             }
      };
      Chart.Line('hourly', {
          data: data_chart,
          options: options,
        });
      
  </script>
@endsection