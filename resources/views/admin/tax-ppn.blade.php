@extends('../layouts/master')

@section('title','Tax Invoice')
@section('content')
@include('sweetalert::alert')

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
                  
                    <h6 class="">Upload a PDF or image file (JPEG, PNG, GIF, WebP, BMP, SVG) </h6>

                
                    <!-- Iframe to display PDF/image -->
                    <iframe id="pdf-preview" style="outline: none !important; border: none;" src="" width="100%" height="800"></iframe>  
                    <img id="image-preview" alt="Image Preview">

                    <!-- Form Upload -->
                    <form action="{{ route('tax-invoice.scan') }}" id="upload-form" class="mt-10" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div style="display: flex; justify-content: space-between;">
                          <input type="number" value="0" name="is_url" hidden>
                          <input type="file" id="file-input" name="doc_fp_img" style="width: 200px;" accept=".pdf, image/*" required onchange="handleFile()">
                          <button type="submit" class="btn bg-dark" style="width: 100px;">Scan</button>
                      </div>
                    </form>
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
                              <label for="inputInvoiceNo" class="col-sm-4 col-form-label">Nomor Faktur </label>
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
                              <div class=" col-sm-10">
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
  function handleFile() {
      const fileInput = document.getElementById('file-input');
      const file = fileInput.files[0];
      const pdfPreview = document.getElementById('pdf-preview');
      const imagePreview = document.getElementById('image-preview');

      if (file) {
          const fileType = file.type;

          if (fileType === 'application/pdf') {
              // Display PDF
              const reader = new FileReader();
              reader.onload = function(e) {
                  pdfPreview.src = e.target.result;
                  pdfPreview.style.display = 'block';
                  imagePreview.style.display = 'none';
              };
              reader.readAsDataURL(file);
          } else if (fileType.startsWith('image/')) {
              // Display image
              const reader = new FileReader();
              reader.onload = function(e) {
                  imagePreview.src = e.target.result;
                  imagePreview.style.display = 'block';
                  pdfPreview.style.display = 'none';
              };
              reader.readAsDataURL(file);
          } else {
              alert('File type not supported. Please upload a PDF or an image.');
          }
      }
  }
</script>

<script>
  
  function clearForm() {
            document.getElementById("inputName").value = '';
            document.getElementById("inputNIK").value = '';
            document.getElementById("inputTempatLahir").value = '';
            document.getElementById("inputTanggalLahir").value = '';
            document.getElementById("inputGolonganDarah").value = '';
            document.getElementById("inputAlamat").value = '';
            document.getElementById("inputRTRW").value = '';
            document.getElementById("inputKelurahan").value = '';
            document.getElementById("inputKecamatan").value = '';
            document.getElementById("inputKabupaten").value = '';
            document.getElementById("inputProvinsi").value = '';
            document.getElementById("inputAgama").value = '';
            document.getElementById("inputStatusPerkawinan").value = '';
            document.getElementById("inputPekerjaan").value = '';
            document.getElementById("inputKewarganegaraan").value = '';
            document.getElementById("inputBerlakuHingga").value = '';
      }

</script>



<script>
  document.addEventListener('DOMContentLoaded', function() {
      const checkbox = document.getElementById('tax-is-compare');
      const card = document.getElementById('tax-is-compare-card');

      // Load the saved checkbox state from localStorage
      const isChecked = localStorage.getItem('tax-is-compare') === 'true';
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      checkbox.addEventListener('change', function() {
          const isChecked = checkbox.checked;
          localStorage.setItem('tax-is-compare', isChecked);
          card.style.display = isChecked ? 'block' : 'none';
      });
  });
</script>
@endsection