<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Persidangan</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg">
      <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#">
          <img class="icon" src="images/prime.png" alt="" />
          <h3>
            Marves <br />
            Prime
          </h3></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a
              class="nav-link active"
              aria-current="page"
              href="component/pop-up-tambah-isu.html"
              >Program/Isu</a
            >
            <a class="nav-link" href="#">Arahan Menteri</a>
          </div>
        </div>
        <div class="navbar-icons">
          <div class="d-flex bd-highlight text-white">
            <div class="p-2 bd-highlight">
              <i class="bi bi-bell"></i>
            </div>
            <div class="p-2 bd-highlight">
              <i class="bi bi-person-circle"></i>
            </div>
            <div class="p-2 bd-highlight"><i class="bi bi-caret-down"></i></div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid pt-5">
      <div class="container-content">
        <div class="d-flex">
          <div class="d-grid col-2">
            <a href="/tambah-persidangan"><button class="btn btn-primary btn-lg lh-lg fs-4" type="button">
              Tambah Program/Isu
            </button></a>
          </div>
          <div class="d-grid col-2 ms-5 jus">
            <button class="btn btn-primary btn-lg lh-lg fs-4" type="button">
              Akan Dilaksanakan <i class="bi bi-caret-down"></i>
            </button>
          </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
          <div class="p-2 bd-highlight"><h5>Show :</h5></div>
          <div class="p-2 bd-highlight">
            <select
              class="form-select justify-content-center"
              aria-label="Default select example"
            >
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="p-2 bd-highlight"><h5>entries</h5></div>
          <div class="ms-auto p-2 bd-highlight">
            <input
              class="form-control me-5 p-lg-3"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid w-100 pt-5">
      <div class="container-content">
        <h1 class="title">Daftar Persidangan</h1>
        <table class="table w-100">
          <thead class="table-primary">
            <tr>
              <th scope="col">Judul Rapat Koordinasi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-secondary">
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"><a href="/tambah-draft-risalah"></a>
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
            <tr>
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"
                            >
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
            <tr class="table-secondary">
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"
                            >
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
            <tr>
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"
                            >
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
            <tr class="table-secondary">
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"
                            >
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
            <tr>
              <td>Rehabilitasi Ekosistem Mangrove</td>
              <td>10.00 WIB, 25 Februari 2021</td>
              <td>
                <!-- Button trigger modal -->
                <button
                  class="bi bi-arrow-up-right-square btn btn-success"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  style="font-size: 15px; border-radius: 100%"
                ></button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-heading" id="exampleModalLabel">
                          Detail Kegiatan
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
                              Rehabilitasi Ekosistem Mangrove
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Pic</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Devi Wahyuni Silitonga</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">
                              Tanggal Pelaksanaan
                            </div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">20 Januari 2020</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Waktu</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">10.00 A.M</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Lokasi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">Gedung A Lantai 2</div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Keterangan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Harga garam di pasar naik
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Substansi</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              Revitalisasi Biro Klasifikasi Indonesia (BKI)
                              AaBbCc DdEe FfGgHhIi JjKkLlMmNnOoPp QqRrSsTt
                              UuVvWwXxYyZz
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 col-md-3">Paparan</div>
                            <div class="col-6 col-md-1">:</div>
                            <div class="col-md-6">
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                              <br />
                              <i class="bi bi-download"></i>&nbsp;
                              <a href="">Paparan1.pptx</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-md-end">
                          <div class="d-grid col-2 ms-5 jus">
                            <button
                              class="btn btn-primary btn-lg lh-lg fs-4"
                              type="button"
                            >
                              Tambahkan Catatan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                View
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="container-fluid w-100 pt-5">
      <div class="container-content"><h4>Showing 1 to 10 of 60</h4></div>
    </div>
    <div class="container-fluid w-100 pt-5">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"
              >Previous</a
            >
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </body>
</html>
