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

          <form action="{{ route('tax-invoice.store') }}" id="upload-form" class="mt-10" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-md-6">
    
                <!-- Profile Image -->
                <div class="card card-dark card-outline">
                  <div class="nav-item">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  </div>
                  <div class="card-body box-profile">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="tax-is-compare" value="" checked>
                      <label for="tax-is-compare" class="custom-control-label">
                          <h6>Is Compare ?</h6>
                      </label>
                    </div>
                    <div id="progress-container">
                      <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        </div>
                      </div>
                      <h5 class="bg-success text-center" id="progress-text">0% Complete (success)</h6>
                    </div>
                    <h5 class="bg-success text-center" id="scan-status" style="display: none;">Scan Success</h6>
                      <iframe id="pdf-iframe" src="{{ asset($taxes->image) }}" width="100%" height="600"></iframe>
                        <div class="" style="display: flex;justify-content: space-between;">
                          <input type="file" id="file-input" style="width: 200px" accept="image/*" value="{{ asset($taxes->image) }}"  required>
                          <button class="bg-dark " style="width: 100px;" id="rescan-btn">Re Scan</button>
                        </div>

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
                          <div class="form-group row">
                              <label for="inputInvoiceNo" class="col-sm-4 col-form-label">Nomor Faktur</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                </div>
                                <input type="text" class="form-control" id="" name="NoFakturPajak" value="{{ $taxes->no_faktur_pajak  }}"
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
                                <input type="date" class="form-control" id="" name="TanggalFakturPajak" value="{{ $taxes->tanggal_faktur_pajak  }}" placeholder="tanggal faktur pajak...">
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
                                <input type="text" class="form-control" id="" name="NPWPpenjual" value="{{ $taxes->npwp_penjual  }}" placeholder="NPWP penjual...">
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
                              <input type="text" class="form-control" id="NamaPenjualCompare" name="NamaPenjual" value="{{ $taxes->nama_penjual }}" placeholder="nama penjual...">
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
                              <textarea class="form-control" id="AlamatPenjualCompare" name="AlamatPenjual"  placeholder="alamat penjual...">{{ $taxes->alamat_penjual }}</textarea>
                             
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
                              <input type="text" class="form-control" id="NoNPWPlawanTransaksiCompare" name="NoNPWPlawanTransaksi" value="{{ $taxes->no_npwp_lawan_transaksi }}" placeholder="no NPWP lawan transaksi...">
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
                            <label for="inputSalesPerson" class="col-sm-4 col-form-label">NPWP Lawan Transaksi</label>
                            
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control" id="NPWPlawanTransaksiCompare" name="NPWPlawanTransaksi" value="{{ $taxes->no_npwp_lawan_transaksi }}" placeholder="NPWP lawan transaksi...">
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
                            <textarea class="form-control" id="AlamatLawanTransaksiCompare" name="AlamatLawanTransaksi" placeholder="alamat lawan transaksi...">{{ $taxes->alamat_lawan_transaksi }}</textarea>
                             
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
                                <input type="number" class="form-control" id="hargaTotalCompare" name="hargaTotal" value="{{ $taxes->harga_total }}" placeholder="harga total...">
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
                                <input type="text" class="form-control" id="diskonCompare" name="diskon" value="{{ $taxes->diskon }}" placeholder="diskon...">
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
                                <input type="text" class="form-control" id="dppCompare" name="dpp" value="{{ $taxes->dpp }}" placeholder="dpp...">
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
                                <input type="text" class="form-control" id="ppnCompare" name="ppn" value="{{ $taxes->ppn }}" placeholder="ppn...">
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
                                <input type="text" class="form-control" id="PPnBMCompare" name="ppnbm" value="{{ $taxes->ppnbm }}" placeholder="ppnbm...">
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
                            <textarea class="form-control" id="referensiCompare" name="referensi"  placeholder="referensi...">{{ $taxes->referensi }}</textarea>
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
                              <div class="">
                                  <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                          </div>
                      
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
          </form>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

  
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
  document.addEventListener("DOMContentLoaded", function () {
      // Simulasi data JSON
      // const data = {
      //   "NoFakturPajak": "030.007-23.23344282",
      //   "TanggalFakturPajak": "07 Juli 2023",
      //   "NPWPpenjual": "70.535.497.5-424.000",
      //   "NamaPenjual": "PT RAD UTAMA RISET",
      //   "AlamatPenjual": "RUKO PASAR MODERN BATUNUNGGAL BLOK RA NO 26 RT 000 RW 000, MENGGER , KOTA BANDUNG",
      //   "NoNPWPlawanTransaksi": "01.000.013.1-093.000",
      //   "NPWPlawanTransaksi": "PT. TELKOM INDONESIA (PERSERO) TBK",
      //   "AlamatLawanTransaksi": "JL. JAPATI NO. 1 RT.000 RW.000 SADANG SERANG COBLONG KOTA BANDUNG JAWA BARAT",
      //   "hargaTotal": "1.600.000.000,00",
      //   "diskon": "0,00",
      //   "dpp": "1.600.000.000,00",
      //   "ppn": "176.000.000,00",
      //   "PPnBM": "0,00",
      //   "referensi": "Pembayaran Pengadaan Jasa Survey Net Promoter Score (NPS) Top Down CFU Consumer/Indihome dan DFU Digital Business Tahun 2023 Tahap I"
      // };

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

                  // Fungsi untuk mengubah format mata uang menjadi angka
                  function formatCurrencyToNumber(value) {
                      return parseFloat(value.replace(/\./g, '').replace(',', '.'));
                  }

                  document.getElementById("NoFakturPajak").value = data.NoFakturPajak || '';
                  document.getElementById("TanggalFakturPajak").value = data.TanggalFakturPajak || '';
                  document.getElementById("NPWPpenjual").value = data.NPWPpenjual || '';
                  document.getElementById("NamaPenjual").value = data.NamaPenjual || '';
                  document.getElementById("AlamatPenjual").value = data.AlamatPenjual || '';
                  document.getElementById("NoNPWPlawanTransaksi").value = data.NoNPWPlawanTransaksi || '';
                  document.getElementById("NPWPlawanTransaksi").value = data.NPWPlawanTransaksi || ''; // Ensure this ID exists
                  document.getElementById("AlamatLawanTransaksi").value = data.AlamatLawanTransaksi  || '' ;
                  document.getElementById("hargaTotal").value = formatCurrencyToNumber(data.hargaTotal) || '';
                  document.getElementById("diskon").value = formatCurrencyToNumber(data.diskon) || '';
                  document.getElementById("dpp").value = formatCurrencyToNumber(data.dpp) || '';
                  document.getElementById("ppn").value = formatCurrencyToNumber(data.ppn) || '';
                  document.getElementById("PPnBM").value = formatCurrencyToNumber(data.PPnBM) || '';
                  document.getElementById("referensi").value = data.referensi || '';
                  document.getElementById("NoFakturPajakCompare").value = data.NoFakturPajak || '';
                  document.getElementById("TanggalFakturPajakCompare").value = data.TanggalFakturPajak || '';
                  document.getElementById("NPWPpenjualCompare").value = data.NPWPpenjual || '';
                  document.getElementById("NamaPenjualCompare").value = data.NamaPenjual || '';
                  document.getElementById("AlamatPenjualCompare").value = data.AlamatPenjual || '';
                  document.getElementById("NoNPWPlawanTransaksiCompare").value = data.NoNPWPlawanTransaksi || '';
                  document.getElementById("NPWPlawanTransaksiCompare").value = data.NPWPlawanTransaksi || ''; // Ensure this ID exists
                  document.getElementById("AlamatLawanTransaksiCompare").value = data.AlamatLawanTransaksi  || '' ;
                  document.getElementById("hargaTotalCompare").value = formatCurrencyToNumber(data.hargaTotal) || '';
                  document.getElementById("diskonCompare").value = formatCurrencyToNumber(data.diskon) || '';
                  document.getElementById("dppCompare").value = formatCurrencyToNumber(data.dpp) || '';
                  document.getElementById("ppnCompare").value = formatCurrencyToNumber(data.ppn) || '';
                  document.getElementById("PPnBMCompare").value = formatCurrencyToNumber(data.PPnBM) || '';
                  document.getElementById("referensiCompare").value = data.referensi || '';
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
  document.addEventListener('DOMContentLoaded', function() {
      const checkbox = document.getElementById('tax-is-compare');
      const card = document.getElementById('tax-is-compare-card');

      // Check if there's a saved checkbox state in localStorage
      const savedState = localStorage.getItem('tax-is-compare');

      // Determine if checkbox should be checked based on localStorage or default HTML checked state
      const isChecked = savedState !== null ? savedState === 'true' : checkbox.checked;
      
      // Set the checkbox state and card visibility based on the saved or default state
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      // Update localStorage and card display on checkbox change
      checkbox.addEventListener('change', function() {
          const isChecked = checkbox.checked;
          localStorage.setItem('tax-is-compare', isChecked);
          card.style.display = isChecked ? 'block' : 'none';
      });
  });
</script>



<script>
  document.getElementById('file-input').addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
      const imageUrl = e.target.result;

      // Menampilkan gambar di iframe
      const iframe = document.getElementById('pdf-iframe');
      iframe.src = imageUrl;

      // Menyimpan URL gambar ke input hidden
      const hiddenInput = document.getElementById('image-url');
      hiddenInput.value = imageUrl;
    };

    reader.readAsDataURL(file); // Membaca file sebagai Data URL
  }
});

// Tombol "Re Scan" untuk mengulang pemilihan file
document.getElementById('rescan-btn').addEventListener('click', function() {
  document.getElementById('file-input').click();
});

</script>

@endsection