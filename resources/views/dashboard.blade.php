@extends('layout.main')
@section('content')
@push('content-style')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endpush
<div id="main">
  <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>Dashboard Order</h3>
  </div>
  <div class="page-content" style="flex-grow: 1">
    <section class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample"
                aria-expanded="true"
                aria-controls="collapseExample"
                id="collapse-form"><i class="bi bi-search"></i>
                   &nbsp;Form Pencarian&nbsp;&nbsp;<i
                   class="bi bi-caret-down-fill"
                   ></i></h4>
              </div>
              <div class="card-body" id=form-card-body>
                <div class="collapse show" id="collapseExample">
                  <div class="row justify-content-center">
                    <div class="col-md-8 col-xxl-5 col-12">
                      <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Tanggal Awal</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <input
                                  type="date"
                                  id="tgl-awal"
                                  name="tgl-awal"
                                  class="form-control"
                                  placeholder="Pilih Tanggal Awal"
                                  value="{{ date('Y-m-d') }}"
                                />
                              </div>
                              <div class="col-md-4">
                                <label>Tanggal Akhir</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <input
                                  type="date"
                                  id="tgl-akhir"
                                  name="tgl-akhir"
                                  class="form-control"
                                  placeholder="Pilih Tanggal Akhir"
                                  value="{{ date('Y-m-d') }}"
                                />
                              </div>
                              <div class="col-md-4">
                                <label>Jenis Marketplace</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <select class="form-select" id="methodSelect">
                                  <option selected>-- Pilih --</option>
                                  <option>Shopee</option>
                                  <option>Gramedia</option>
                                  <option>Bhinneka</option>
                                  <option>Andes</option>
                                  <option>Padi</option>
                                  <option>Semua Marketplace</option>
                                </select>
                              </div>
                            </div>
                            <div id="note-0">
                              <span class="help-block"><small><strong>* Berdasarkan tanggal order</strong></small></span>
                              <table>
                                <tbody>
                                  <tr>
                                    <td style="vertical-align: top; width:60px;"><span class="help-block"><small><strong>* Note : </strong></small></span></td>
                                    <td><span class="help-block"><small><strong>&nbsp; - Data order yang ditransaksikan di NIPOS akan terakumulasi pada jumlah Kolekting
                                      <br>&nbsp; - Data tarif berdasarkan data yang ditransaksikan di IPOS</strong></small></span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            
                            <div class="col-sm-12 d-flex justify-content-center mt-3">
                              <button
                                type="submit"
                                class="btn btn-primary me-1 mb-1"
                                id="searchOrderBtn"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseExample"
                                aria-expanded="true"
                                aria-controls="collapseExample"
                              ><i class="bi bi-search"></i>
                                Cari
                              </button>
                              <button
                                type="reset"
                                class="btn btn-light-secondary me-1 mb-1"
                              ><i class="bi bi-arrow-counterclockwise"></i>
                                Reset
                              </button>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="order-info" style="display: none">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="rounded-4 text-center shadow py-2">
                    <p class="m-0">Marketplace : SHOPEE<br>
                    Total Order : 40004 - AREA V BANDUNG<br>
                    Tanggal Order : 2023-01-10 s.d 2023-01-10</p>
                </div>
              </div>
              <div class="card-body">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        Informasi Pesanan
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <div class="row justify-content-center">
                          <div class="col-6 col-lg-2 col-md-6">
                            <div class="card">
                              <div class="card-body px-4 py-4-5">
                                <div class="row">
                                  <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                                  >
                                    <div class="stats-icon blue mb-2">
                                      <i class="bi-middle bi-check-circle"></i>
                                    </div>
                                  </div>
                                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">
                                      Pesanan Masuk
                                    </h6>
                                    <h6 class="font-extrabold mb-0">144</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-lg-2 col-md-6">
                            <div class="card">
                              <div class="card-body px-4 py-4-5">
                                <div class="row">
                                  <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                                  >
                                    <div class="stats-icon red mb-2">
                                      <i class="bi-middle bi-x-circle"></i>
                                    </div>
                                  </div>
                                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pesanan Dibatalkan</h6>
                                    <h6 class="font-extrabold mb-0">0</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-lg-2 col-md-6">
                            <div class="card">
                              <div class="card-body px-4 py-4-5">
                                <div class="row">
                                  <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                                  >
                                    <div class="stats-icon green mb-2">
                                      <i class="bi-middle bi-collection"></i>
                                    </div>
                                  </div>
                                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Kolekting</h6>
                                    <h6 class="font-extrabold mb-0">36</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-lg-2 col-md-6">
                            <div class="card">
                              <div class="card-body px-4 py-4-5">
                                <div class="row">
                                  <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                                  >
                                    <div class="stats-icon maroon mb-2">
                                      <i class="bi-middle bi-x-circle"></i>
                                    </div>
                                  </div>
                                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Batal Kolekting</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-lg-2 col-md-6">
                            <div class="card">
                              <div class="card-body px-4 py-4-5">
                                <div class="row">
                                  <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                                  >
                                    <div class="stats-icon orange mb-2">
                                      <i class="bi-middle bi-slash-square"></i>
                                    </div>
                                  </div>
                                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Belum Ditransaksikan</h6>
                                    <h6 class="font-extrabold mb-0">108</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row text-center mb-2">
                          <div class="d-grid d-md-block">
                            <button class="btn btn-outline-primary" type="button" id="detailOrderBtn">* Klik untuk informasi lebih lanjut</button>
                          </div>
                        </div>
                        <div id="chart-pesanan-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="true"
                        aria-controls="collapseThree"
                      >
                        Informasi Kolekting
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Kiriman</td>
                                <td>36</td>
                              </tr>
                              <tr>
                                <td>Jumlah</td>
                                <td>Rp. 0</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="order-tables" style="display: none">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="rounded-4 text-center shadow py-2">
                    <p class="m-0">Marketplace : SHOPEE<br>
                    Total Order : 40004 - AREA V BANDUNG<br>
                    Tanggal Order : 2023-01-10 s.d 2023-01-10</p>
                </div>
              </div>
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-lg justify-content-center" id="paginate">
                    <li class="page-item">
                      <a class="page-link" type="button" aria-label="Home" id="page-home">
                        <span aria-hidden="true"><i class="bi bi-house-door"></i></span>
                      </a>
                    </li>
                    <li class="page-item" id="page-prev">
                      <a class="page-link" type="button" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active" id="page-1"><a class="page-link" type="button" id="page-a-1">1</a></li>
                  </ul>
                </nav>
                <div class="table-responsive" id="tabel1">
                  <div id="note-2">
                    <table>
                      <tbody>
                        <tr>
                          <td style="vertical-align: top; width:60px;"><span class="help-block"><small><strong>* Note : </strong></small></span></td>
                          <td><span class="help-block"><small><strong>&nbsp; - Klik pada baris untuk menampilkan detail data</strong></small></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <table class="table table-styled" id="table-order-1">
                    <thead class="table-active">
                      <tr>
                        <th>Tanggal Order</th>
                        <th>Pesanan Masuk</th>
                        <th>Pesanan Dibatalkan</th>
                        <th>Kolekting</th>
                        <th>Batal Kolekting</th>
                        <th>Belum Ditransaksikan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2023-01-11</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-responsive" id="tabel2" style="display: none">
                  <div id="note-3">
                    <table>
                      <tbody>
                        <tr>
                          <td style="vertical-align: top; width:60px;"><span class="help-block"><small><strong>* Note : </strong></small></span></td>
                          <td><span class="help-block"><small><strong>&nbsp; - Klik pada baris untuk menampilkan detail data<br>
                            &nbsp; - Informasi order KPRK ini berdasarkan data kodepos pengirim pada data order
                            (Kantor transaksi tidak akan selalu sama dengan data order)
                        </strong></small></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <table class="table table-styled" id="table-order-2">
                    <thead class="table-active">
                      <tr>
                        <th>Nopend</th>
                        <th>Kantor</th>
                        <th>Pesanan Masuk</th>
                        <th>Pesanan Dibatalkan</th>
                        <th>Kolekting</th>
                        <th>Batal Kolekting</th>
                        <th>Belum Ditransaksikan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Ujungberung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Cimahi</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Soreang</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Purwakarta</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Subang</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Karawang</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <th>1</th>
                        <td>Bandung</td>
                        <td>144</td>
                        <td>0</td>
                        <td>36</td>
                        <td>112</td>
                        <td>108</td>
                        <td>
                          <button class="btn border detail-btn" type="button" data-bs-toggle="modal" data-bs-target="#chartOrderModal"><span class="bi-middle bi-search"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-responsive" id="tabel3" style="display: none">
                  <div id="note-4">
                    <table>
                      <tbody>
                        <tr>
                          <td style="vertical-align: top; width:60px;"><span class="help-block"><small><strong>* Note : </strong></small></span></td>
                          <td><span class="help-block"><small><strong>&nbsp; - Informasi order KPRK ini berdasarkan data kodepos pengirim pada data order. Kantor transaksi tidak akan selalu sama dengan data order</strong></small></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <table class="table" id="table-order-3">
                    <thead class="table-active">
                      <tr>
                        <th>No</th>
                        <th>Kode Booking</th>
                        <th>Item Name</th>
                        <th>Nama Pengirim</th>
                        <th>Alamat Pengirim</th>
                        <th>HP Pengirim</th>
                        <th>Nopend Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Dale</td>
                        <td>fringilla.euismod.enim@quam.ca</td>
                        <td>0500 527693</td>
                        <td>New Quay</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Nathaniel</td>
                        <td>mi.Duis@diam.edu</td>
                        <td>(012165) 76278</td>
                        <td>Grumo Appula</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-danger">Inactive</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Darius</td>
                        <td>velit@nec.com</td>
                        <td>0309 690 7871</td>
                        <td>Ways</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Oleg</td>
                        <td>rhoncus.id@Aliquamauctorvelit.net</td>
                        <td>0500 441046</td>
                        <td>Rossignol</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Kermit</td>
                        <td>diam.Sed.diam@anteVivamusnon.org</td>
                        <td>(01653) 27844</td>
                        <td>Patna</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Jermaine</td>
                        <td>sodales@nuncsit.org</td>
                        <td>0800 528324</td>
                        <td>Mold</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Ferdinand</td>
                        <td>gravida.molestie@tinciduntadipiscing.org</td>
                        <td>(016977) 4107</td>
                        <td>Marlborough</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-danger">Inactive</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Kuame</td>
                        <td>Quisque.purus@mauris.org</td>
                        <td>(0151) 561 8896</td>
                        <td>Tresigallo</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Deacon</td>
                        <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                        <td>07740 599321</td>
                        <td>Karapınar</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Channing</td>
                        <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                        <td>0845 46 49</td>
                        <td>Warrnambool</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Aladdin</td>
                        <td>sem.ut@pellentesqueafacilisis.ca</td>
                        <td>0800 1111</td>
                        <td>Bothey</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Cruz</td>
                        <td>non@quisturpisvitae.ca</td>
                        <td>07624 944915</td>
                        <td>Shikarpur</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Keegan</td>
                        <td>molestie.dapibus@condimentumDonecat.edu</td>
                        <td>0800 200103</td>
                        <td>Assen</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Ray</td>
                        <td>placerat.eget@sagittislobortis.edu</td>
                        <td>(0112) 896 6829</td>
                        <td>Hofors</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Maxwell</td>
                        <td>diam@dapibus.org</td>
                        <td>0334 836 4028</td>
                        <td>Thane</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Carter</td>
                        <td>urna.justo.faucibus@orci.com</td>
                        <td>07079 826350</td>
                        <td>Biez</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Stone</td>
                        <td>velit.Aliquam.nisl@sitametrisus.com</td>
                        <td>0800 1111</td>
                        <td>Olivar</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Berk</td>
                        <td>fringilla.porttitor.vulputate@taciti.edu</td>
                        <td>(0101) 043 2822</td>
                        <td>Sanquhar</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Philip</td>
                        <td>turpis@euenimEtiam.org</td>
                        <td>0500 571108</td>
                        <td>Okara</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Kibo</td>
                        <td>feugiat@urnajustofaucibus.co.uk</td>
                        <td>07624 682306</td>
                        <td>La Cisterna</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Bruno</td>
                        <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                        <td>07624 869434</td>
                        <td>Rocca d"Arce</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Leonard</td>
                        <td>blandit.enim.consequat@mollislectuspede.net</td>
                        <td>0800 1111</td>
                        <td>Lobbes</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Hamilton</td>
                        <td>mauris@diam.org</td>
                        <td>0800 256 8788</td>
                        <td>Sanzeno</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Harding</td>
                        <td>Lorem.ipsum.dolor@etnetuset.com</td>
                        <td>0800 1111</td>
                        <td>Obaix</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Emmanuel</td>
                        <td>eget.lacus.Mauris@feugiatSednec.org</td>
                        <td>(016977) 8208</td>
                        <td>Saint-Remy-Geest</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Detail Order-->
      <div class="modal fade" id="chartOrderModal" tabindex="-1" aria-labelledby="chartOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="chartOrderModalLabel">40004-AREA V BANDUNG - 2023-01-12</h1>
            </div>
            <div class="modal-body">
              <div class="row" id="modal-order-content">
                <div class="row mb-4 ms-0">
                  <div class="rounded-4 text-center shadow py-2">
                    <p class="m-0">Marketplace : SHOPEE<br>
                    Total Order : 40004 - AREA V BANDUNG<br>
                    Tanggal Order : 2023-01-10 s.d 2023-01-10</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="row"><h4>Informasi Pesanan</h4></div>
                  <div class="row justify-content-center">
                    <div class="col-6 col-lg-2 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div
                              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                            >
                              <div class="stats-icon blue mb-2">
                                <i class="bi-middle bi-check-circle"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">
                                Pesanan Masuk
                              </h6>
                              <h6 class="font-extrabold mb-0">144</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div
                              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                            >
                              <div class="stats-icon red mb-2">
                                <i class="bi-middle bi-x-circle"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">Pesanan Dibatalkan</h6>
                              <h6 class="font-extrabold mb-0">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div
                              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                            >
                              <div class="stats-icon green mb-2">
                                <i class="bi-middle bi-collection"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">Kolekting</h6>
                              <h6 class="font-extrabold mb-0">36</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div
                              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                            >
                              <div class="stats-icon maroon mb-2">
                                <i class="bi-middle bi-x-circle"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">Batal Kolekting</h6>
                              <h6 class="font-extrabold mb-0">112</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                      <div class="card">
                        <div class="card-body px-4 py-4-5">
                          <div class="row">
                            <div
                              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                            >
                              <div class="stats-icon orange mb-2">
                                <i class="bi-middle bi-slash-square"></i>
                              </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <h6 class="text-muted font-semibold">Belum Ditransaksikan</h6>
                              <h6 class="font-extrabold mb-0">108</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="chart-pesanan"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="row"><h4>Informasi Kolekting</h4></div>
                  <div class="row">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Kiriman</td>
                            <td>36</td>
                          </tr>
                          <tr>
                            <td>Jumlah</td>
                            <td>Rp. 0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('layout.footer')
</div>
@push('content-script')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script>
      let jquery_datatable = $("#table-order-1").DataTable();
      let jquery_datatable_2 = $("#table-order-2").DataTable();
      let jquery_datatable_3 = $("#table-order-3").DataTable();

      let optionsPersentasePesanan = {
        series: [108, 36, 0, 112],
        labels: ["Belum Ditransaksikan", "Ditransaksikan", "Batal Order", "Batal Transaksi"],
        colors: ["#ff9933", "#5ddab4", "#ff7976", "#940000"],
        chart: {
          type: "donut",
          width: "100%",
          height: "350px",
        },
        legend: {
          position: "bottom",
        },
        plotOptions: {
          pie: {
            donut: {
              size: "30%",
            },
          },
        },
      };

      var chartPersentasePesanan = new ApexCharts(
        document.getElementById("chart-pesanan"),
        optionsPersentasePesanan
      );

      var chartPersentasePesanan2 = new ApexCharts(
        document.getElementById("chart-pesanan-2"),
        optionsPersentasePesanan
      );

      chartPersentasePesanan.render();
      chartPersentasePesanan2.render();

      $('#collapse-form').click(function() {
        console.log("clicked");
        $('div#form-card-body').toggleClass("change-form-card-body");
      });

      $('#searchOrderBtn').click(function (e) { 
        e.preventDefault();
        $("#order-info").show();
        $('div#form-card-body').toggleClass("change-form-card-body");
      });

      $('#detailOrderBtn').click(function (e) { 
        e.preventDefault();
        $('#order-info').hide();
        $('#order-tables').show();
        $('#page-3').remove();
        $('#page-2').remove();
        $('#page-1').addClass('active');
        $('#tabel3').hide();
        $('#tabel2').hide();
        $('#tabel1').show();
      });

      $('#table-order-1').on('click', 'tbody tr td:not(:last-child)', function () {
        $('#tabel1').hide();
        $('#tabel2').show();
        let el = $("#page-1"), elClass = el.attr("class");
        el.attr("class", elClass.replace("active", ""));
        $('#paginate').append(`
          <li class="page-item active" id="page-2"><a class="page-link" type="button" id="page-a-2">2</a></li>
        `);
      });

      $('#table-order-2').on('click', 'tbody tr td:not(:last-child)', function () {
        $('#tabel2').hide();
        $('#tabel3').show();
        let el = $("#page-2"), elClass = el.attr("class");
        el.attr("class", elClass.replace("active", ""));
        $('#paginate').append(`
          <li class="page-item active" id="page-3"><a class="page-link" type="button" id="page-a-3">3</a></li>
        `);
      });

      $('#page-home').click(function (e) { 
        e.preventDefault();
        $('#order-tables').hide();
        $('#order-info').show();
      });
      
      $('#paginate').on('click', '#page-3', function () {
        console.log("page 3 clicked");
        $('#tabel2').hide();
        $('#tabel1').hide();
        $('#tabel3').show();
      });

      $('#paginate').on('click', '#page-2', function () {
        console.log("page 2 clicked");
        $('#page-3').remove();
        $('#page-2').addClass('active');
        $('#tabel3').hide();
        $('#tabel1').hide();
        $('#tabel2').show();
      });

      $('#paginate').on('click', '#page-1', function () {
        console.log("page 1 clicked");
        $('#page-3').remove();
        $('#page-2').remove();
        $('#page-1').addClass('active');
        $('#tabel2').hide();
        $('#tabel3').hide();
        $('#tabel1').show();
      });

      if ($('#page-1').hasClass('active')) {
          $('#prev-page').attr('disabled', '');
      }

      $('#paginate').on('click', '#page-prev', function () {
        console.log("prev page clicked");
        
        if ($('#page-2').hasClass('active')) {
          $('#page-2').remove();
          $('#page-1').addClass('active');
          $('#tabel2').hide();
          $('#tabel3').hide();
          $('#tabel1').show();
        } else if ($('#page-3').hasClass('active')) {
          $('#page-3').remove();
          $('#page-2').addClass('active');
          $('#tabel3').hide();
          $('#tabel1').hide();
          $('#tabel2').show();
        }
      });

      $('.table-styled tbody tr').hover(function() {
          $(this).addClass('highlight-table');
      }, function() {
          $(this).removeClass('highlight-table');
      });

      // $('#table-order-1').on('click', 'tbody tr td .detail-btn', function (e) { 
      //   e.preventDefault();

      //   $('#chartOrderModal .modal-body').append($('#accordionExample'));
        
      // });

    </script>
@endpush
@endsection