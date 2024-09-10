@extends('../layouts/master')

@section('title','Ijasah Scan')
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
                    <input class="custom-control-input" type="checkbox" id="certificate-is-compare" value="">
                    <label for="certificate-is-compare" class="custom-control-label">
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

                    <img  style="max-width: 100%;" class="img-preview"
                      src="{{ asset('ijasah.jpg')}}" alt="Preview Gambar">

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
              <!-- card compare  -->
              <div class="card card-danger card-outline" id="certificate-is-compare-card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form id="data-form" class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Nama </label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="namaCompare" name="nama" value="Siti Humaira"
                              placeholder="nama...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">NIM</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="NIMCompare" name="NIM" value="2002110064"
                              placeholder="NIM...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Nama Universitas</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="univCompare" name="univ" value="UNIVERSITAS MUHAMMADIYAH ACEH"
                              placeholder="nama universitas...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Gelar</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="gelarCompare" name="gelar" value="Sarjana Ekonomi (S.E.)"
                              placeholder="gelar...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Jenjang</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jurusanCompare" name="jurusan" value="Sarjana"
                              placeholder="jurusan...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jurusanCompare" name="jurusan" value="Akuntansi"
                              placeholder="jurusan...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Status</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="statusCompare" name="status" value="telah menyelesaikan"
                              placeholder="status...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Ijasah / SKL</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="ijazah_atau_sklCompare"
                              name="ijazah_atau_skl" value="IJAZAH" placeholder="Ijasah /  SKL...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Jabatan
                            Penandatanganan</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jabatan_penandatanganCompare"
                              name="jabatan_penandatangan" value="Rektor" placeholder="jabatan penandatangan...">
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
                          <label for="inputKecamatan" class="col-sm-6 col-form-label">Tanggal</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tanggal_tahun_lulusCompare"
                              name="tanggal_tahun_lulus" value="2023-03-16" placeholder="waktu kelulusan...">
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
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="card card-danger card-outline">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link bg-dark active" href="#activity"
                        data-toggle="tab">Information Detail</a></li>
                  </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Nama </label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nama" name="nama" value="Siti Humaira"
                              placeholder="nama...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">NIM</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="NIM" name="NIM" value="2002110064"
                              placeholder="NIM...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Nama Universitas</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="univ" name="univ" value="UNIVERSITAS MUHAMMADIYAH ACEH"
                              placeholder="nama universitas...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Gelar</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="gelar" name="gelar" value="Sarjana Ekonomi (S.E.)"
                              placeholder="gelar...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Jenjang</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jenjang" name="jenjang" value="Sarjana"
                              placeholder="jenjang...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="Akuntansi"
                              placeholder="jurusan...">
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
                          <label for="inputNIK" class="col-sm-4 col-form-label">Status</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="status" name="status" value="telah menyelesaikan"
                              placeholder="status...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Ijasah / SKL</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="ijazah_atau_skl" name="ijazah_atau_skl"
                              value="IJAZAH" placeholder="Ijasah /  SKL...">
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
                          <label for="inputKecamatan" class="col-sm-4 col-form-label">Jabatan
                            Penandatanganan</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jabatan_penandatangan"
                              name="jabatan_penandatangan" value="Rektor" placeholder="jabatan penandatangan...">
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
                          <label for="inputKecamatan" class="col-sm-6 col-form-label">Tanggal</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tanggal_tahun_lulus"
                              name="tanggal_tahun_lulus" value="2023-03-16" placeholder="waktu kelulusan...">
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
  document.getElementById('file-input').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById('image-preview').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>

  <!-- add more row  -->
  <script>
    document.getElementById('add-more').addEventListener('click', function () {
      // Clone the original upload row
      var originalRow = document.querySelector('.upload-row');
      var clone = originalRow.cloneNode(true);

      // Clear the input fields in the cloned row (if needed)
      var inputs = clone.querySelectorAll('input[type="text"], input[type="file"]');
      inputs.forEach(input => input.value = '');

      // Append the cloned row to the upload section
      document.getElementById('upload-section').appendChild(clone);
    });

  </script>



  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Simulasi data JSON
      const data = {
        "nama": "Siti Humaira",
        "NIM": "2002110064",
        "univ": "UNIVERSITAS MUHAMMADIYAH ACEH",
        "gelar": "Sarjana Ekonomi (S.E.)",
        "jenjang": "Sarjana",
        "jurusan": "Akuntansi",
        "status": "telah menyelesaikan",
        "ijazah_atau_skl": "IJAZAH",
        "jabatan_penandatangan": "Rektor",
        "tanggal_tahun_lulus": "16 Maret 2023 "
      };

      // Fungsi untuk mengonversi tanggal 
      function convertDateToISO(dateString) {
        const months = {
          'Januari': '01', 'Februari': '02', 'Maret': '03', 'April': '04', 'Mei': '05', 'Juni': '06',
          'Juli': '07', 'Agustus': '08', 'September': '09', 'Oktober': '10', 'November': '11', 'Desember': '12'
        };

        // Pisahkan string tanggal menjadi bagian-bagian
        const [day, month, year] = dateString.split(' ');

        // Cek apakah bulan valid
        const monthNumber = months[month];
        if (!monthNumber) return ''; // Jika bulan tidak valid

        // Format menjadi YYYY-MM-DD
        return `${year}-${monthNumber}-${String(day).padStart(2, '0')}`;
      }


      startLoadingProgress();

      // Fungsi untuk mengupdate progress bar
      function updateProgressBar(percent) {
        const progressBar = document.querySelector(".progress-bar");
        const progressText = document.getElementById("progress-text");

        if (progressBar && progressText) {
          progressBar.style.width = percent + "%";
          progressText.textContent = percent + "% Complete";

          if (percent >= 100) {
            setTimeout(() => {
              document.getElementById("progress-container").style.display = "none";
              document.getElementById("scan-status").style.display = "block";
              document.getElementById("data-form").style.display = "block";

              document.getElementById("nama").value = data.nama || '';
              document.getElementById("NIM").value = data.NIM || '';
              document.getElementById("univ").value = data.univ || '';
              document.getElementById("gelar").value = data.gelar || '';
              document.getElementById("jenjang").value = data.jenjang || '';
              document.getElementById("jurusan").value = data.jurusan || '';
              document.getElementById("status").value = data.status || '';
              document.getElementById("ijazah_atau_skl").value = data.ijazah_atau_skl || '';
              document.getElementById("jabatan_penandatangan").value = data.jabatan_penandatangan || '';
              document.getElementById("tanggal_tahun_lulus").value = convertDateToISO(data.tanggal_tahun_lulus) || '';

              document.getElementById("namaCompare").value = data.nama || '';
              document.getElementById("NIMCompare").value = data.NIM || '';
              document.getElementById("univCompare").value = data.univ || '';
              document.getElementById("Compare").value = data.gelar || '';
              document.getElementById("jenjangCompare").value = data.jenjang || '';
              document.getElementById("jurusanCompare").value = data.jurusan || '';
              document.getElementById("statusCompare").value = data.status || '';
              document.getElementById("ijazah_atau_sklCompare").value = data.ijazah_atau_skl || '';
              document.getElementById("jabatan_penandatanganCompare").value = data.jabatan_penandatangan || '';
              document.getElementById("tanggal_tahun_lulusCompare").value = convertDateToISO(data.tanggal_tahun_lulus) || '';

            }, 500);
          }
        }
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

      // Fungsi untuk membersihkan form
      window.clearForm = function () {
        document.getElementById("nama").value = '';
        document.getElementById("NIM").value = '';
        document.getElementById("univ").value = '';
        document.getElementById("gelar").value = '';
        document.getElementById("jenjang").value = '';
        document.getElementById("jurusan").value = '';
        document.getElementById("status").value = '';
        document.getElementById("ijazah_atau_skl").value = '';
        document.getElementById("jabatan_penandatangan").value = '';
        document.getElementById("tanggal_tahun_lulus").value = '';
      }

      // Penanganan perubahan file input
      document.getElementById('file-input').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            const imgPreview = document.getElementById('image-preview');
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block'; // Menampilkan gambar
          };
          reader.readAsDataURL(file);
        }
      });
    });

    // Fungsi untuk memuat ulang halaman
    function reScan() {
      location.reload(); // Memuat ulang halaman
    }
  </script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const checkbox = document.getElementById('certificate-is-compare');
      const card = document.getElementById('certificate-is-compare-card');

      // Check if there's a saved checkbox state in localStorage
      const savedState = localStorage.getItem('certificate-is-compare');

      // Determine if checkbox should be checked based on localStorage or default HTML checked state
      const isChecked = savedState !== null ? savedState === 'true' : checkbox.checked;
      
      // Set the checkbox state and card visibility based on the saved or default state
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      // Update localStorage and card display on checkbox change
      checkbox.addEventListener('change', function() {
          const isChecked = checkbox.checked;
          localStorage.setItem('certificate-is-compare', isChecked);
          card.style.display = isChecked ? 'block' : 'none';
      });
  });
</script>

@endsection