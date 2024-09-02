@extends('../layouts/master')

@section('title','KTP Scan')
@section('content')
<div id="upload-section">
    <!-- The original row with the form -->
    <div class="row upload-row">
        <div class="col-12">
        <div class="row">
            <div class="col-md-6">
              <!-- Profile Image -->
              <div class="card card-danger card-outline">
                <div class="nav-item">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                      class="fas fa-expand"></i></button>
                </div>
                <div class="card-body box-profile">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                    <label for="" class="custom-control-label"> <h6>Compare ?</h6> </label>
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
                    <img id="image-preview" style="max-width: 100%;" class="img-preview"
                      src="{{asset('project-ocr/myread/made-project/9101061710990004_KTP_235818-v1.jpeg')}}" alt="Preview Gambar">
                    <form id="upload-form" class="mt-10">
                      <div class="" style="display: flex;justify-content: space-between;">
                        <input type="file" id="file-input" accept="image/*" style="width: 200px;" required>
                        <button class="bg-dark " style="width: 200px;" onclick="reScan()">Re scan</button>
                      </div>
                    </form>
                    

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="card">
                <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link bg-dark active" href="#activity" data-toggle="tab">Information Detail</a></li>
                </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form id="data-form" class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Nama</label>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputName" value=""
                            placeholder="Nama...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">NIK</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputNIK" value=""
                            placeholder="NIK...">
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
                          <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                          

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputTempatLahir" value=""
                            placeholder="Tempat Lahir...">
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
                          <label for="inputTanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                              
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="date" class="form-control is-valid" id="inputTanggalLahir" value=""
                            placeholder="Tanggal Lahir...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Golongan Darah</label>
                    

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputGolonganDarah" value=""
                            placeholder="Golongan Darah...">
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
                          <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
                            <textarea class="form-control is-valid" id="inputAlamat" value=""
                              placeholder="Alamat..."></textarea>
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
                          <label for="inputAlamat" class="col-sm-4 col-form-label">RT/RW</label>
                          <textarea class="form-control is-valid" id="inputRTRW" value=""
                            placeholder="RT/RW..."></textarea>
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
                          <label for="inputKelurahan" class="col-sm-4 col-form-label">Kel/Desa</label>
                        

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputKelurahan" value=""
                            placeholder="Kelurahan...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan</label>

                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control is-valid" id="inputKecamatan" value=""
                              placeholder="Kecamatan...">
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
                          <label for="inputKabupaten" class="col-sm-4 col-form-label">Kabupaten</label>

                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control is-valid" id="inputKabupaten" value=""
                              placeholder="Kabupaten...">
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
                          <label for="inputProvinsi" class="col-sm-4 col-form-label">Provinsi</label>

                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control is-valid" id="inputProvinsi" value=""
                              placeholder="Provinsi...">
                            </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Agama</label>

                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control is-valid" id="inputAgama" value=""
                              placeholder="Agama...">
                            </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Status Perkawinan</label>
                            
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                              </div>
                              <input type="text" class="form-control is-valid" id="inputStatusPerkawinan" value=""
                              placeholder="Status Perkawinan...">
                            </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                                              
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputPekerjaan" value=""
                            placeholder="Pekerjaan...">
                          </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Kewarganegaraan</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputKewarganegaraan" value=""
                            placeholder="Kewarganegaraan...">
                          </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                            
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" id="inputBerlakuHingga" value=""
                            placeholder="Berlaku Hingga...">
                          </div>

                          <div class=" " style="display: flex;justify-content: space-between;">
                            <div class="text-danger" hidden>
                              Please insert data
                            </div>
                            <div class="text-success" position="right">
                              Validation score : 100
                            </div>
                          </div>
                          <div class="col-sm-10">
                          </div>
                        </div>
                        <!-- Add other form fields here -->
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button class="btn btn-danger" onclick="clearForm()">Clear Form</button>
                          </div>
                        </div>
                      </form>
                      <!-- /.post -->
                    </div>
                  </div>
                <!-- /.tab-content -->
                </div>
                <!-- /.card-body -->
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
    </div>

    <!-- Add More Button -->
    <div class="row">
        <div class="col-12">
            <button id="add-more" class="btn btn-success mt-3">Add More</button>
        </div>
    </div>






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
            fetch('/data_ktp.json')
                .then(response => response.json())
                .then(data => {
                    // Populate the form fields with data from the JSON
                    document.getElementById('inputName').value = data.data.KTP_NAMA;
                    document.getElementById('inputNIK').value = data.data.KTP_NIK;
                    document.getElementById('inputTempatLahir').value = data.data.KTP_TEMPAT_LAHIR;
                    document.getElementById('inputTanggalLahir').value = formatDateForInput(data.data.KTP_TGL_LAHIR);
                    document.getElementById('inputGolonganDarah').value = data.data.KTP_GOL_DARAH;
                    document.getElementById('inputAlamat').value = data.data.KTP_ALAMAT;
                    document.getElementById('inputRTRW').value = data.data.KTP_RT_RW;
                    document.getElementById('inputKelurahan').value = data.data.KTP_KELURAHAN;
                    document.getElementById('inputKecamatan').value = data.data.KTP_KECAMATAN;
                    document.getElementById('inputKabupaten').value = data.data.KTP_KABUPATEN_MADYA;
                    document.getElementById('inputProvinsi').value = data.data.KTP_PROVINSI;
                    document.getElementById('inputAgama').value = data.data.KTP_AGAMA;
                    document.getElementById('inputStatusPerkawinan').value = data.data.KTP_STATUS_PERKAWINAN;
                    document.getElementById('inputPekerjaan').value = data.data.KTP_PEKERJAAN;
                    document.getElementById('inputKewarganegaraan').value = data.data.KTP_KEWARGANEGARAAN;
                    document.getElementById('inputBerlakuHingga').value = data.data.KTP_BERLAKU_HINGGA;
                })
                .catch(error => console.error('Error fetching JSON data:', error));
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
@endsection