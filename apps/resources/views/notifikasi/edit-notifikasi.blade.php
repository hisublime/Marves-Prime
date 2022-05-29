@extends('notifikasi.template.template_notifikasi')
@section('container-md-8')
  <div class="container-fluid pt-5">
    <div class="container-content">
      <div class="content-border">
        <h1 class="text-title">Sunting Notifikasi</h1>
        @foreach($rakor as $notifikasi)
        <form action='/notifikasi/{{ $notifikasi->id_rakor }}' method="POST">
          {{ csrf_field() }}
          <div class="d-flex mb-3">
            <label for="topik" class="form-label"
              ><h5>Topik</h5></label
            >
            <input
              type="text"
              class="form-control"
              name="topik"
              id="topik"
              value="{{ $notifikasi->topik }}"
            />
          </div>
          
          <div class="d-flex mb-3">
            <label for="pic" class="form-label"
              ><h5>PIC</h5></label
            >
            <input
             type="text"
              class="form-control"
              id="pic"
              name="pic"
              value="{{ $notifikasi->pic }}"
            />
          </div>
          <div class="d-flex mb-3">
            <label for="lokasi" class="form-label"
              ><h5>Lokasi</h5></label
            >
            <input
             type="text"
              class="form-control"
              id="lokasi"
              name="lokasi"
              value="{{ $notifikasi->lokasi }}"
            />
          </div>
          <div class="d-flex mb-3">
            <label for="tgl_pelaksanaan" class="form-label date"
              ><h5>Tanggal Pelaksanaan</h5></label
            >
            <input
              type="date"
              class="form-control date"
              id="tgl_pelaksanaan"
              name="tgl_pelaksanaan"
              value="{{ $notifikasi->tgl_pelaksanaan }}"
            />
          </div>
          <div class="d-flex mb-3">
            <label for="waktu" class="form-label date"
              ><h5>Waktu</h5></label
            >
            <input
              type="time"
              class="form-control date"
              id="waktu"
              name="waktu"
              value="{{ $notifikasi->waktu }}"
            />
          </div>
          <div class="d-flex mb-3">
            <label for="kegiatan" class="form-label"
              ><h5>Substansi</h5></label
            >
            <input
             type="text"
              class="form-control"
              id="kegiatan"
              name="kegiatan"
              value="{{ $notifikasi->kegiatan }}"

            />
          </div>
          <div class="arahan-container">
            <div class="mb-3">
              <label for="catatan" class="form-label"><h3 class="arahan-heading">Catatan</h3></label>
              <textarea class="form-control" id="catatan" name="catatan" rows="5" >{{ $notifikasi->catatan }}</textarea>
            </div>
          </div>
          @endforeach
          <div class="d-flex justify-content-md-end">
            <div class="d-grid col-2">
              <button class="btn btn-secondary btn-lg lh-lg fs-4 btn-simpan">
              Kembali
            </button>
          </div>
          <div class="d-grid col-2 ms-5 jus">
            <button class="btn btn-primary btn-lg lh-lg fs-4" type="submit">
              Kirim Notifikasi
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>

@endsection