@extends('layout.base')

@section('title', 'DEV-ID | Location')

@section('content')

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
        <h2 class="mt-4 text-center">Lokasi Tambak Udang</h2>
        <hr class="line">
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1749.2329758700225!2d110.30275650116891!3d-8.014943615032548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00f23da5eb49%3A0x40da9c4fee42eec7!2sKolam%20ikan%20laut!5e1!3m2!1sen!2sid!4v1598026592837!5m2!1sen!2sid" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


@endsection