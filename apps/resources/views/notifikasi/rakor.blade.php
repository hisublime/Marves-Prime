{{-- <!-- @extends('layouts.master') --> --}}
{{-- <!-- @section('content') --> --}}
{{-- @extends('eselon1.template.template_eselon1') --}}
@extends('notifikasi.template.template_notifikasi')

@section('title', 'Daftar Persidangan')
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
      <a href="/notifikasi" class="">Pengingat</a>
      <a href="/notifikasi/rapat-koordinasi" class="active">Rapat Koordinasi</a>
      <a href="/notifikasi/draft-risalah"  class="">Draft Risalah</a>
    </div>
    <br>
    <div class="left">

<!--  <i class="lnr lnr-plus-circle"> -->
    </div>
    
  </div>  
  <div class="panel-body">
    <table id="datatableid" class="table table-striped">
      <thead style="background-color: #DBE1FF" class="kepalajudul">
      <tr>
        <th>Judul Rapat Koordinasi</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>

      @foreach ($rakor as $rakor)
      <tr>
      <td class="isitabel">{{$rakor->topik}}</td>
      <td class="isitabel">{{ \Carbon\Carbon::parse($rakor->waktu)->format('H:i') }} WIB,{{ \Carbon\Carbon::parse($rakor->tgl_pelaksanaan)->format('d M Y') }}</td>
      <td>
        <!-- Button trigger modal -->
        <button
        class="bi bi-arrow-up-right-square btn btn-success"
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#rakor{{ $rakor->id_rakor }}"
        style="font-size: 15px; border-radius: 100%"
        ></button>
        <button
        class="bi bi-pencil-square btn btn-warning"
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        style="font-size: 15px; border-radius: 100%"
        onclick="window.location.href='/notifikasi/edit-notifikasi/{{ $rakor->id_rakor }}'"
        ></button>
        
        <!-- Modal -->
        <div
        class="modal fade"
        id="rakor{{ $rakor->id_rakor }}"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-heading" id="exampleModalLabel">
                Detail Rapat Koordinasi
              </h1>
              <button
              type="button"
              class="btn-close btn-sm"
              data-bs-dismiss="modal"
              aria-label="Close"
              ></button>
            </div>
            <div class="modal-body ms-4">
              <div class="modal-detail">
                <div class="row">
                  <div class="col-6 col-md-3">Kegiatan</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">
                    {{ $rakor->topik }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Pic</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">{{ $rakor->pic }}</div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">
                    Tanggal Pelaksanaan
                  </div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">{{ \Carbon\Carbon::parse($rakor->tgl_pelaksanaan)->format('d M Y') }}</div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Waktu</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">{{ \Carbon\Carbon::parse($rakor->waktu)->format('H:i') }} WIB</div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Lokasi</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">{{ $rakor->lokasi }}</div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Keterangan</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">
                    {{ $rakor->catatan }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Substansi</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">
                    {{ $rakor->kegiatan }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">Paparan</div>
                  <div class="col-6 col-md-1">:</div>
                  <div class="col-md-6">
                    @foreach($file as $f)
                    {{ csrf_field() }} 
                    {{-- <p style="margin-top: 10px; font-size:12px;"><a href="/rakor/file/download/{{ $f->id }}" style="margin-left: 165px; margin-right: 15px; color:black;">{{ $f->filename }}</a><a href="/rakor/file/delete/{{ $f->id }}" style="color:red; text-decoration: none;">[X]</a></p> --}}
                    {{$f ->filename}}
                    @endforeach  
                   
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-md-end">
                {{-- <div class="d-grid col-2 ms-5 jus">                        
                    <button
                    class="btn btn-primary btn-lg lh-lg fs-4"
                    type="submit" onclick="window.location.href='persidangan/tambah-draft-risalah'">
                    Sunting
                  </button>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </td>   
      </tr>
      @endforeach
      </tbody>
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