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
    <h3>Tools Lacak Marketplace</h3>
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
              <div class="card-body">
                <div class="collapse show" id="collapseExample">
                  <div class="row justify-content-center">
                    <div class="col-md-7 col-xxl-5 col-12">
                      <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Jenis Pencarian</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <select class="form-select" id="methodSelect">
                                  <option selected>-- Pilih --</option>
                                  <option>Order ID</option>
                                  <option>Nama Pengirim</option>
                                </select>
                              </div>
                            </div>
                            
                            <div class="row" id="con-orderid" style="display: none;">
                              <div class="col-md-4">
                                <label>Order ID</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <input
                                  type="text"
                                  id="order-id"
                                  class="form-control"
                                  name="order-id"
                                  placeholder="Order ID"
                                />
                              </div>
                            </div>
                            
                            <div class="row" id="con-nama" style="display: none;">
                              <div class="col-md-4">
                                <label>Nama Pengirim</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <input
                                  type="text"
                                  id="nama-pengirim"
                                  class="form-control"
                                  name="nama-pengirim"
                                  placeholder="Nama Pengirim"
                                />
                              </div>
                              <div id="note">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: top;"><span class="help-block"><strong><small>* Note : </strong></small></span></td>
                                      <td><span class="help-block"><small><strong>&nbsp; - Pencarian berdasarkan nama pengirim harus sesuai (termasuk spasi)
                                        <br>&nbsp; - Contoh : gramedia official shop</strong></small></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
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
                                disabled
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
        <div class="row" id="searchResult" style="display: none">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Hasil Pelacakan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table-show">
                    <thead>
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
    </section>
  </div>
  @include('layout.footer')
</div>
@push('content-script')
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  {{-- <script src="/assets/js/pages/datatables.js"></script> --}}
  <script>
    $(document).ready(function () {
      let jquery_datatable = $("#table-show").DataTable();
    });

    $("#methodSelect").change(function() {
        var selectedOption = $(this).find("option:selected");
        if (selectedOption.val() == "Order ID") {
          $('#con-orderid').show();
          $('#con-nama').hide();
          $("#searchOrderBtn").prop("disabled", false);
        } else if (selectedOption.val() == "Nama Pengirim") {
          $('#con-orderid').hide();
          $('#con-nama').show();
          $("#searchOrderBtn").prop("disabled", false);
        } else {
          $('#con-orderid').hide();
          $('#con-nama').hide();
          $("#searchOrderBtn").prop("disabled", true);
        }
      });
    $('#searchOrderBtn').click(function (e) { 
      e.preventDefault();
      
      $('#searchResult').show();
    });
    
  </script>
@endpush
@endsection