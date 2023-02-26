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
    <div class="page-content">
      <section class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true"
                    aria-controls="collapseExample" id="collapse-form"><i class="bi bi-search"></i>
                    &nbsp;Form Pencarian&nbsp;&nbsp;<i class="bi bi-caret-down-fill"></i></h4>
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
                                <input type="text" id="order-id" class="form-control" name="order-id"
                                  placeholder="Order ID" />
                              </div>
                            </div>
                            
                            <div class="row" id="con-nama" style="display: none;">
                              <div class="col-md-4">
                                <label>Nama Pengirim</label>
                              </div>
                              <div class="col-md-8 form-group">
                                <input type="text" id="nama-pengirim" class="form-control" name="nama-pengirim"
                                  placeholder="Nama Pengirim" />
                              </div>
                              <div id="note">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: top;"><span class="help-block"><strong><small>* Note
                                              : </strong></small></span></td>
                                      <td><span class="help-block"><small><strong>&nbsp;
                                              - Pencarian berdasarkan nama
                                              pengirim harus sesuai (termasuk
                                              spasi)
                                              <br>&nbsp; - Contoh : gramedia
                                              official
                                              shop</strong></small></span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="col-sm-12 d-flex justify-content-center mt-3">
                              <button type="submit" class="btn btn-primary me-1 mb-1" id="searchOrderBtn"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true"
                                aria-controls="collapseExample" disabled><i class="bi bi-search"></i>
                                Cari
                              </button>
                              <button type="reset" class="btn btn-light-secondary me-1 mb-1"><i
                                  class="bi bi-arrow-counterclockwise"></i>
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
          <div class="row" id="searchResult">
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
                          <th>Col 1</th>
                          <th>Col 2</th>
                          <th>Col 3</th>
                          <th>Col 4</th>
                          <th>Col 5</th>
                          <th>Col 6</th>
                          <th>Col 1</th>
                          <th>Col 2</th>
                          <th>Col 3</th>
                          <th>Col 4</th>
                          <th>Col 5</th>
                          <th>Col 6</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="table-responsive">
                    <table class="table" id="table-show2">
                      <thead>
                        <tr>
                          <th>Datetime</th>
                          <th>Connote ID</th>
                          <th>Nominal VA</th>
                          <th>Nominal Collecting</th>
                          <th>Selisih</th>
                          <th>Status</th>
                        </tr>
                      </thead>
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
      function initDatatable(datacon) {
        let table = $("#table-show").DataTable({
          data: datacon,
          columns: [{
              data: 'name'
            },
            {
              data: 'position'
            },
            {
              data: 'salary'
            },
            {
              data: 'start_date'
            },
            {
              data: 'office'
            },
            {
              data: 'extn'
            },
            {
              data: 'name',
            },
            {
              data: 'position'
            },
            {
              data: 'salary'
            },
            {
              data: 'start_date'
            },
            {
              data: 'office'
            },
            {
              data: 'extn'
            },
          ]
          // columnDefs: [{
          //   "targets": [1, 2, 3, 4, 5, 6],
          //   "className": "dt-body-left",
          //   "breakpoints": "xs sm"
          // }]
        });
      }

      function initDatatable2(datacon) {
        let table = $("#table-show2").DataTable({
          data: datacon,
          columns: [{
              data: 'date'
            },
            {
              data: 'connote_id'
            },
            {
              data: 'nominal_va'
            },
            {
              data: 'nominal_kolekting'
            },
            {
              data: 'null',
              render: function (data, type, row) {
                let selisih = parseFloat(row.nominal_va) - parseFloat(row.nominal_kolekting)
                return Math.round((selisih + Number.EPSILON)*100)/100;
              }
            },
            {
              data: 'null',
              render: function (data, type, row) { 
                return (row[4]!=0 ? 'SELISIH' : 'OK');
              }
            }
          ]
          // columnDefs: [{
          //   "targets": [1, 2, 3, 4, 5, 6],
          //   "className": "dt-body-left",
          //   "breakpoints": "xs sm"
          // }]
        });
      }

      $(document).ready(function() {
        // $.ajax({
        //     type: "get",
        //     url: "/assets/js/data.json",
        //     dataType: "json",
        //     success: function(response) {
        //         let data1 = response.data
        //         $.ajax({
        //             type: "get",
        //             url: "/assets/js/data.json",
        //             dataType: "json",
        //             success: function(response) {
        //                 let data2 = response.data
        //                 console.log(data1);
        //                 let datacon = data1.concat(data2)
        //                 console.log(datacon);
        //                 let table = $("#table-show").DataTable({
        //                     data: datacon,
        //                     columns: [{
        //                             data: 'name',
        //                         },
        //                         {
        //                             data: 'position'
        //                         },
        //                         {
        //                             data: 'salary'
        //                         },
        //                         {
        //                             data: 'start_date'
        //                         },
        //                         {
        //                             data: 'office'
        //                         },
        //                         {
        //                             data: 'extn'
        //                         },
        //                         {
        //                             data: 'name',
        //                         },
        //                         {
        //                             data: 'position'
        //                         },
        //                         {
        //                             data: 'salary'
        //                         },
        //                         {
        //                             data: 'start_date'
        //                         },
        //                         {
        //                             data: 'office'
        //                         },
        //                         {
        //                             data: 'extn'
        //                         },
        //                     ]
        //                 });
        //             },
        //             error: function(xhr, status, error) {

        //             }
        //         });
        //     },
        //     error: function(xhr, status, error) {

        //     }
        // });

        // $.when(ajax_satu(), ajax_dua()).then(function(data1, data2) {
        //   datat1 = data1[0].data;
        //   datat2 = data2[0].data;
        //   let datacon = datat1.concat(datat2)
        //   initDatatable(datacon)
        // }).catch(function() {

        // })

        let response1, response2;

        Promise.all([
          fetch('/assets/js/data.json').then(response => response.json()),
          fetch('/assets/js/data2.json').then(response => response.json())
        ]).then(data => {
          data1 = data[0].data;
          data2 = data[1].data;
          console.log(data1);
          console.log(data2);

          let datacon = data1.concat(data2)
          initDatatable(datacon)
        }).catch(error => {
          alert(error)
          console.error(error)
        })

        Promise.all([
          fetch('/assets/js/mock_data1.json').then(response => response.json()),
          fetch('/assets/js/mock_data2.json').then(response => response.json())
        ]).then(data => {
          data1 = data[0].data;
          data2 = data[1].data;
          // console.log(data1[0].nominal_va);
          // var byConnote = arrayOfObjects.slice(0);
          
          data1.sort(function(a,b) {
            var x = a.connote_id.toLowerCase();
            var y = b.connote_id.toLowerCase();
            return x < y ? -1 : x > y ? 1 : 0;
          });
          console.log(data1);
          
          data2.sort(function(a,b) {
            var x = a.connote_id.toLowerCase();
            var y = b.connote_id.toLowerCase();
            return x < y ? -1 : x > y ? 1 : 0;
          });
          console.log(data2);

          let connote2 = data2.map(({nominal_kolekting}) => ({nominal_kolekting}))
          console.log(connote2);
          data1.forEach(function(obj, index) {
              Object.assign(obj, connote2[index]);
          });
          // let datacon = [...data1, ...connote2]
          console.log(data1);
          initDatatable2(data1)
        }).catch(error => {
          alert(error)
          console.error(error)
        })
      });

      function ajax_satu() {
        return $.ajax({
          type: "get",
          url: "/assets/js/data.json",
          dataType: "json",
          success: function(response) {
            data1 = response.data
          }
        });
      }

      function ajax_dua() {
        return $.ajax({
          type: "get",
          url: "/assets/js/data2.json",
          dataType: "json",
          success: function(response) {
            data2 = response.data
          }
        });
      }

      // $("#methodSelect").change(function() {
      //     var selectedOption = $(this).find("option:selected");
      //     if (selectedOption.val() == "Order ID") {
      //       $('#con-orderid').show();
      //       $('#con-nama').hide();
      //       $("#searchOrderBtn").prop("disabled", false);
      //     } else if (selectedOption.val() == "Nama Pengirim") {
      //       $('#con-orderid').hide();
      //       $('#con-nama').show();
      //       $("#searchOrderBtn").prop("disabled", false);
      //     } else {
      //       $('#con-orderid').hide();
      //       $('#con-nama').hide();
      //       $("#searchOrderBtn").prop("disabled", true);
      //     }
      //   });

      // $('#searchOrderBtn').click(function (e) { 
      //   e.preventDefault();

      //   $('#searchResult').show();
      // });
    </script>
  @endpush
@endsection
