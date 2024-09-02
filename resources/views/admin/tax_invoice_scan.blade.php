@extends('../layouts/master')

@section('title','Tax Invoice Scan')
@section('content')




<style>
    .sidebar-color{
      color:white !important;
    }
    .nav-link.active {
      font-weight: bold; /* Example styling */
      color: white !important; /* Example styling */
      background-color:#6f42c1;
      border-radius:3px;
      /* Add your desired active state styles here */
    }
    
    .background-image {
        width: 800px;
        height: 400px;
        background-image: url('../../../dist/img/nerp-human-resource.png'); /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire div */
        background-position: center; /* Centers the image within the div */
        margin: auto; /* Center the div horizontally */
        margin-top: 50px; /* Example: Adds some top margin */
    }
    .modal {
      margin-top:30px;
    }
    .progress-bar-on-hold{
        background-color: #FFC107 !important; /* Warna amber */
    }
    .progress-bar-delayed{
        background-color: #FF6F00 !important; /* Warna dark orange */
    }
    body{
      font-size: 14px !important;
    }
    input{
      font-size: 14px !important;
    }
    button{
      font-size: 14px !important;
    }
  </style>

  <div class="row">
    <div class="col-12">

      <div class="row">
        <div class="col-md-6">

          <!-- Profile Image -->
          <div class="card card-dark card-outline">
            <div class="nav-item">
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
            <div class="card-body box-profile">
              <div id="progress-container">
                <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  </div>
                </div>
                <h5 class="bg-success text-center" id="progress-text">0% Complete (success)</h6>
              </div>
              <h5 class="bg-success text-center" id="scan-status" style="display: none;">Scan Success</h6>
              <form id="upload-form" class="mt-10">
                <div class="" style="display: flex;justify-content: space-between;">
                  <input type="file" id="file-input" style="width: 200px;" accept="image/*" required>
                  <button class="bg-dark " style="width: 100px;">Re Scan</button>
                </div>
              </form>
              <iframe id="pdf-iframe" src="{{asset('project-ocr/myread/made-project/Faktur_pajak12.pdf')}}" width="100%" height="800"></iframe>

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
                  <form id="data-form" class="form-horizontal">
                    <div class="form-group row">
                        <label for="inputInvoiceNo" class="col-sm-4 col-form-label">Invoice No</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control" id="NoFakturPajak" name="NoFakturPajak" value=""
                          placeholder="no faktur pajak...">
                        </div>
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPONo" class="col-sm-4 col-form-label">Tanggal Faktur</label>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control" id="TanggalFakturPajak" name="TanggalFakturPajak" value="" placeholder="tanggal faktur pajak...">
                        </div>
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Alamat Penjual</label>
                        <textarea class="form-control" id="AlamatPenjual" name="AlamatPenjual" value="" placeholder="alamat penjual..."></textarea>
                        
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Alamat Lawan Transaksi</label>
                      <textarea class="form-control" id="AlamatLawanTransaksi" name="AlamatLawanTransaksi" placeholder="alamat lawan transaksi..."></textarea>
                        
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTotal" class="col-sm-4 col-form-label">Harga Total</label>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="number" class="form-control" id="hargaTotal" name="hargaTotal" value="" placeholder="harga total...">
                        </div>
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
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
                        <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Referensi</label>
                      <textarea class="form-control" id="referensi" name="referensi" value="" placeholder="referensi..."></textarea>
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSalesPerson" class="col-sm-4 col-form-label">URL</label>
                      
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                        </div>
                        <input type="text" class="form-control" id="url" name="url" value="" placeholder="url...">
                      </div>
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputCustomerAddress" class="col-sm-4 col-form-label">Deskripsi Item</label>
                      <textarea class="form-control" id="desckripsiItem" name="desckripsiItem" value="" placeholder="deskripsi item..."></textarea>
                      <div class=" " style="display: flex;justify-content: space-between;">
                          <div class="text-danger" hidden>
                            Please insert data
                          </div>
                          <div class="text-success" position="right">
                            Validation score : 100
                          </div>
                      </div>
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
  document.addEventListener("DOMContentLoaded", function () {
      // Simulasi data JSON
      const data = {
          "NoFakturPajak": "030.013-23.12261715",
          "TanggalFakturPajak": "27 Desember 2023",
          "NPWPpenjual": "81.152.936.1-423.000",
          "NamaPenjual": "PT TRIMSATI BAKSYA SOLUSI",
          "AlamatPenjual": "JL. PHH MUSTOPA GG. SETIA III NO 6 RT 005 RW 014, PADASUKA, KOTA BANDUNG",
          "NoNPWPlawanTransaksi": "01.000.013.1-093.000",
          "NamaLawanTransaksi": "PT. TELKOM INDONESIA (PERSERO), TBK",
          "AlamatLawanTransaksi": "JL. JAPATI NO.1 Kel. SADANGSERANG Kec. COBLONG KOTA BANDUNG JAWA BARAT 40133",
          "hargaTotal": "78.600.000,00",
          "diskon": "0,00",
          "dpp": "78.600.000,00",
          "ppn": "8.646.000,00",
          "ppnbm": "0,00",
          "referensi": "",
          "url": "",
          "desckripsiItem": "" // Assuming 'Deskripsi item' should be the field name
      };

      startLoadingProgress();

      // Fungsi untuk mengupdate progress bar
      function updateProgressBar(percent) {
          const progressBar = document.querySelector(".progress-bar");
          const progressText = document.getElementById("progress-text");

          progressBar.style.width = percent + "%";
          progressText.textContent = percent + "% Complete";

          if (percent >= 100) {
              setTimeout(() => {
                  // Hide the progress bar
                  document.getElementById("progress-container").style.display = "none";
                  // Show the success message
                  document.getElementById("scan-status").style.display = "block";
                  // Show the form
                  document.getElementById("data-form").style.display = "block";

                  // Fill the form with JSON data
                  document.getElementById("NoFakturPajak").value = data.NoFakturPajak || '';
                  document.getElementById("TanggalFakturPajak").value = data.TanggalFakturPajak || '';
                  document.getElementById("NPWPpenjual").value = data.NPWPpenjual || '';
                  document.getElementById("NamaPenjual").value = data.NamaPenjual || '';
                  document.getElementById("AlamatPenjual").value = data.AlamatPenjual || '';
                  document.getElementById("NoNPWPlawanTransaksi").value = data.NoNPWPlawanTransaksi || '';
                  document.getElementById("NamaLawanTransaksi").value = data.NamaLawanTransaksi || ''; // Ensure this ID exists
                  document.getElementById("AlamatLawanTransaksi").value = data.AlamatLawanTransaksi  || '' ;
                  document.getElementById("hargaTotal").value = data.hargaTotal || '';
                  document.getElementById("diskon").value = data.diskon || '';
                  document.getElementById("dpp").value = data.dpp || '';
                  document.getElementById("ppn").value = data.ppn || '';
                  document.getElementById("ppnbm").value = data.ppnbm || '';
                  document.getElementById("referensi").value = data.referensi || '';
                  document.getElementById("url").value = data.url || '';
                  document.getElementById("desckripsiItem").value = data.desckripsiItem || '';
              }, 500);
          }
      }

      function clearForm() {
          document.getElementById("NoFakturPajak").value = '';
          document.getElementById("TanggalFakturPajak").value = '';
          document.getElementById("NPWPpenjual").value = '';
          document.getElementById("NamaPenjual").value = '';
          document.getElementById("AlamatPenjual").value = '';
          document.getElementById("NoNPWPlawanTransaksi").value = '';
          document.getElementById("NamaLawanTransaksi").value = ''; // Ensure this ID exists
          document.getElementById("AlamatLawanTransaksi").value = '';
          document.getElementById("hargaTotal").value = '';
          document.getElementById("diskon").value = '';
          document.getElementById("dpp").value = '';
          document.getElementById("ppn").value = '';
          document.getElementById("ppnbm").value = '';
          document.getElementById("referensi").value = '';
          document.getElementById("url").value = '';
          document.getElementById("desckripsiItem").value = '';
      }

      // Fungsi untuk memulai loading progress
      function startLoadingProgress() {
          let progress = 0;
          const interval = setInterval(() => {
              progress += 20;
              updateProgressBar(progress);
              if (progress >= 100) {
                  clearInterval(interval);
              }
          }, 1000);
      }

      document.getElementById('file-input').addEventListener('change', function(event) {
          const file = event.target.files[0];
          if (file) {
              // Contoh: Menampilkan pratinjau gambar
              const reader = new FileReader();
              reader.onload = function(e) {
                  const imgPreview = document.getElementById('image-preview');
                  imgPreview.src = e.target.result;
                  imgPreview.style.display = 'block'; // Menampilkan gambar
              };
              reader.readAsDataURL(file);
          }
      });

      function reScan() {
          location.reload(); // Memuat ulang halaman
      }
  });
</script>


  <script>
  document.getElementById('file-input').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('image-preview').src = e.target.result;
          };
          reader.readAsDataURL(file);
      }
  });
</script>


  
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


@endsection