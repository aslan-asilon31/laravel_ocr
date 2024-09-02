@extends('../layouts/master')

@section('title','Tax Invoice')
@section('content')

<div class="row">
          <div class="col-12">

            <div class="row">
              <div class="col-md-6">
    
                <!-- Profile Image -->
                <div class="card card-danger card-outline">
                  <div class="nav-item">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  </div>
                  <div class="card-body box-profile">
                    <h6>Upload invoice here </h6>
                    <!-- Form Upload -->
                    <form id="upload-form" class="mt-10">
                        <div class="" style="display: flex;justify-content: space-between;">
                            <input type="file" id="file-input-pdf" style="width: 200px;" accept="application/pdf" required onchange="showPDF()">
                            <a href="{{route('tax-invoice.scan')}}" class="btn bg-dark " style="width: 100px;">Scan</a>
                        </div>
                    </form>
                
                    <!-- Iframe to display PDF -->
                    <iframe id="pdf-iframe" style="outline: none !important;border: none;" src="" width="100%" height="800"></iframe>
                  </div>
                
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="card card-danger card-outline">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link bg-dark active" href="#activity" data-toggle="tab">information detail</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <form class="form-horizontal">
                          <div class="form-group row">
                              <label for="inputInvoiceNo" class="col-sm-4 col-form-label">Invoice No</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="NoFakturPajak" name="NoFakturPajak" value=""
                                placeholder="no faktur pajak...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputPONo" class="col-sm-4 col-form-label">Tanggal Faktur</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="TanggalFakturPajak" name="TanggalFakturPajak" value=""
                                placeholder="tanggal faktur pajak...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputTerms" class="col-sm-4 col-form-label">NPWP Penjual</label>
                            
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="NPWPpenjual" name="NPWPpenjual" value="" placeholder="NPWP penjual...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputCustomerName" class="col-sm-4 col-form-label">Nama Penjual</label>
                              
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="NamaPenjual" name="NamaPenjual" value="" placeholder="nama penjual...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Alamat Penjual</label>
                             
                              <div class="input-group mb-3">
                                <textarea class="form-control" id="AlamatPenjual" name="AlamatPenjual" value="" placeholder="alamat penjual..."></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputSalesPerson" class="col-sm-4 col-form-label">No NPWP Lawan Transaksi</label>
                             
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="NoNPWPlawanTransaksi" name="NoNPWPlawanTransaksi" value="" placeholder="no NPWP lawan transaksi...">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Alamat Lawan Transaksi</label>
                            <textarea class="form-control" id="AlamatLawanTransaksi" name="AlamatLawanTransaksi" value="" placeholder="alamat lawan transaksi..."></textarea>
                          </div>
                          <div class="form-group row">
                              <label for="inputTotal" class="col-sm-4 col-form-label">Harga Total</label>
                             
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="number" class="form-control" id="hargaTotal" name="hargaTotal" value="" placeholder="harga total...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputTotal" class="col-sm-4 col-form-label">Diskon</label>
                          
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="number" class="form-control" id="diskon" name="diskon" value="" placeholder="diskon...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputPPN" class="col-sm-4 col-form-label">DPP </label>
                           
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="number" class="form-control" id="dpp" name="dpp" value="" placeholder="dpp...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputPPN" class="col-sm-4 col-form-label">PPN </label>
                            
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="number" class="form-control" id="ppn" name="ppn" value="" placeholder="ppn...">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="inputPPN" class="col-sm-4 col-form-label">PPnBM </label>
                             
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="number" class="form-control" id="ppnbm" name="ppnbm" value="" placeholder="ppnbm...">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Referensi</label>
                            <textarea class="form-control" id="referensi" name="referensi" value="" placeholder="referensi..."></textarea>
                           
                          </div>
                          <div class="form-group row">
                            <label for="inputSalesPerson" class="col-sm-4 col-form-label">URL</label>
                         
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control" id="url" name="url" value="" placeholder="url...">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Deskripsi Item</label>
                            <textarea class="form-control" id="desckripsiItem" name="desckripsiItem" value="" placeholder="deskripsi item..."></textarea>
                         
                              
                          </div>
                          <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>
                        </form>
                      
                        <!-- /.post -->
                      </div>
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <script>
    function previewPDF() {
        const fileInput = document.getElementById('file-input-pdf');
        const file = fileInput.files[0];

        if (file && file.type === 'application/pdf') {
            const reader = new FileReader();

            reader.onload = function(e) {
                const typedArray = new Uint8Array(e.target.result);

                pdfjsLib.getDocument(typedArray).promise.then(function(pdf) {
                    // Ensure there are at least two pages
                    if (pdf.numPages >= 2) {
                        // Render the first page
                        renderPage(pdf, 1, 'pdf-preview1');
                        // Render the second page
                        renderPage(pdf, 2, 'pdf-preview2');
                    } else {
                        alert('PDF harus memiliki setidaknya 2 halaman.');
                    }
                });
            };

            reader.readAsArrayBuffer(file);
        } else {
            alert('Silakan unggah file PDF.');
        }
    }

    function renderPage(pdf, pageNumber, canvasId) {
        pdf.getPage(pageNumber).then(function(page) {
            const canvas = document.getElementById(canvasId);
            const context = canvas.getContext('2d');
            const viewport = page.getViewport({ scale: 1.5 });

            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };

            page.render(renderContext);
        });
    }
</script>



<script>
  function showPDF() {
      const fileInput = document.getElementById('file-input-pdf');
      const file = fileInput.files[0];

      if (file && file.type === 'application/pdf') {
          const fileURL = URL.createObjectURL(file);
          document.getElementById('pdf-iframe').src = fileURL;
      } else {
          alert('Please upload a valid PDF file.');
      }
  }
</script>

@endsection