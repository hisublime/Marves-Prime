@extends('pimpinan.template.template_pimpinan')
@section('active1', 'active')
@section('title', 'Data Arahan Menteri')
@section('active1', 'Active')

@section('container-md-8') 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/css/show_all_arahan_menteri.css">
  </head>
  <body>
    <div class="container-fluid mt-3">
        <div class="container-content">
        <br>
        <br>
            <div class="container-fluid mt-3">
                <div class="row">
                  <div class="col-8">
                    <a> <img class="gambar" src="/images/showall.png" alt="" /> <label class="status">Show All</label> </a>
                    <a> <img class="gambar ms-2" src="/images/overdue.png" alt="" /> <label class="status">Overdue</label> </a>
                    <a> <img class="gambar ms-2" src="/images/suspended.png" alt="" /> <label class="status">Suspended</label> </a>
                    <a> <img class="gambar ms-2" src="/images/pending.png" alt="" /> <label class="status">Pending</label> </a>
                    <a> <img class="gambar ms-2" src="/images/done.png" alt="" /> <label class="status">Done</label> </a>
                    <a> <img class="gambar ms-2" src="/images/active.png" alt="" /> <label class="status">Active</label> </a>
                  </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="container-fluid w-100 pt-3">
      <div class="container-content">
        <div class="table-responsive-sm">
          <table class="table table-striped" style="width:100%" id="datatableid">
            <thead>
              <tr>
                <th>Nama Program</th>
                <th>Status</th>
                <th>Kategori</th>
                <th>Progress</th>
              </tr>
            </thead>

            <tbody style="vertical-align: middle"; >
            @foreach($data_program as $req)
              <tr>
                <td>{{$req->nama_proker}}</td>
                @if($req->status == 'Done')
                <td><img class="gambar ms-2" src="/images/done.png" alt="" /> <label class="status">Done</label></td>
                @elseif($req->status == 'Overdue')
                <td><img class="gambar ms-2" src="/images/overdue.png" alt="" /> <label class="status">Overdue</label></td>
                @elseif($req->status == 'Suspended')
                <td><img class="gambar ms-2" src="/images/suspended.png" alt="" /> <label class="status">Suspended</label></td>
                @elseif($req->status == 'Active')
                <td><img class="gambar ms-2" src="/images/active.png" alt="" /> <label class="status">Active</label></td>
                @elseif($req->status == 'Pending')
                <td><img class="gambar ms-2" src="/images/pending.png" alt="" /> <label class="status">Pending</label></td>
                @endif 
                <td>{{$req->kategori}}</td>
                <td>
                  <div class="progress-bar" role="progressbar" style="background: #322881; width: {{ $persen }}%;"  aria-valuemin="0" aria-valuemax="100">{{number_format($persen)}}%</div>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
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
            searchPlaceholder: "Search Your Data",
        }
    });

} );
    </script>

    <!-- IONICONS-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
  @endsection
</html>
