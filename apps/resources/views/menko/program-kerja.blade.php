@extends('menko.template.template_menko')
@section('title', 'Program Kerja')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/css/show_all_arahan_menteri.css">
</head>

@section('container-md-8')
    <div class="container-fluid pt-5">
      <div class="container-content ">
        <h1 class="text-title fw-bold">Program Kerja</h1>
        <div class="d-flex row m-5 ">
          <div class="row justify-content-md-center">
            <div class="col-sm-4 mb-4"> <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                <a href="{{ url('/menko/sekretariat-kemenko') }}"><img src="{{asset('images/sekertariat.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Sekretariat Kemenko</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen1 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen1)}}%</h6></div>
                  <h6 class="me-2">{{$SekretariatAct}}/{{$sekretariatTotal}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/inspektorat') }}"><img src="{{asset('images/inspektorat.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Inspektorat</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen2 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen2)}}%</h6></div>
                  <h6 class="me-2">{{$InspektoratAct}}/{{$inspektoratTotal}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi1') }}"><img src="{{asset('images/kedaulatan.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Kedaulatan Maritim dan Energi</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen3 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen3)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi1Act}}/{{$Deputi1Total}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi2') }}"><img src="{{asset('images/sumber-daya.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Sumber Daya Maritim</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen4 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen4)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi2Act}}/{{$Deputi2Total}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi3') }}"><img src="{{asset('images/infrastruktur-transportasi.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Infrastruktur dan Transportasi</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen5 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen5)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi3Act}}/{{$Deputi3Total}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi4') }}"><img src="{{asset('images/pengelolaan-lingkungan.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Pengelolaan Lingkungan dan Kehutanan</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen6 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen6)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi4Act}}/{{$Deputi4Total}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi5') }}"><img src="{{asset('images/pariwisata-ekonomi.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Pariwisata dan Ekonomi Kreatif</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen7 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen7)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi5Act}}/{{$Deputi5Total}} program</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="card ">
                <div class="card-body d-flex justify-content-start align-items-center overflow-hidden">
                  <a href="{{ url('/menko/deputi6') }}"><img src="{{asset('images/investasi-pertambangan.png')}}" class="rounded float-start" alt="..."></a>
                  <h5 class="card-title">Deputi Bidang Koordinasi Investasi dan Pertambang</h5>
                </div>
                <div class="d-inline-flex  p-2 pt-3 pb-3 bg text-white justify-content-between align-items-center round">
                  <h6 class="me-4 ms-3">Progress</h6>
                      <div class="progress progress-bar  me-2" role="progressbar" style="width: {{ $persen8 }}%; height: 30px;" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100"><h6>{{number_format($persen8)}}%</h6></div>
                  <h6 class="me-2">{{$Deputi6Act}}/{{$Deputi6Total}} program</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

@endsection