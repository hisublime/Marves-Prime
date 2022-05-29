@extends('notifikasi.template.template_notifikasi')

@section('container-md-8')

<style>

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid black;
}

.topnav a.active {
  border-bottom: 3px solid black;
}
</style>

<title>Program/Isu</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <center><h1><b>Notifikasi</b></h1></center>
    <br>
    <div class ="topnav">
        <a href="/notifikasi" class="active">Pengingat</a>
        <a href="/notifikasi/rapat-koordinasi" class="">Rapat Koordinasi</a>
        <a href="/notifikasi/draft-risalah"  class="">Draft Risalah</a>
    </div>
    <div class="left">
    <br>
    </div>
    
  </div>
  <h2 style="padding-left: 30px; font-family: 'Poppins', sans-serif;">Daftar Program Kerja yang mendekati status overdue</h2>
  <div class="panel-body">
    <table id="datatableid" class="table table-striped">
      <thead style="background-color: #DBE1FF" class="kepalajudul">
      <tr>
        <th width="70%">Nama Program Kerja</th>
        <th width="30%">Tanggal Selesai</th>
      </tr>
      </thead>
      @foreach ($reminder as $rmdr)
      <tbody>
      <tr>
        <td class="isitabel">{{$rmdr->nama_proker}}</td>
        <td class="isitabel">{{$rmdr->tgl_akhir}}</td>
      </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>

<!-- END TABLE HOVER -->

        </div>
      </div>
    </div>
  </div>
</div>

<body>

<script>
  // Get tde modal
  var modal = document.getElementById("myModal");
      
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
      
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
      
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
  modal.style.display = "block";
  }
      
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
  modal.style.display = "none";
  }
      
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
  }

    $(document).ready(function() {
      $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Cari",
        }
    });

    } );
  </script>
  </body>

@endsection