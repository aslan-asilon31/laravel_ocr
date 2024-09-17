@extends('../layouts/master')

@section('title','Transkrip Nilai Scan')
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
                            <input class="custom-control-input" type="checkbox" id="academic-transcript-is-compare" value="">
                            <label for="academic-transcript-is-compare" class="custom-control-label">
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
                            <form id="upload-form" class="mt-10">
                              <div class="" style="display: flex;justify-content: space-between;">
                                <input value="" type="file" id="file-input" accept="image/*" style="width: 200px;" required>
                                <button class="bg-dark " style="width: 200px;" onclick="reScan()">Re scan</button>
                              </div>
                            </form>
                            <img id="" style="max-width: 100%;" class="img-preview"
                              src="{{ asset($fileUrl) }}" alt="Preview Gambar">

                            

                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                       <!-- card compare  -->
                       <div class="card card-danger card-outline"  id="academic-transcript-is-compare-card">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                          </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                              <form class="form-horizontal">
                                <div class="form-group row">
                                  <label for="inputName" class="col-sm-4 col-form-label">Nama Universitas</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input value="" type="text" class="form-control" id="UniversitasCompare" name="Universitas" placeholder="Nama...">
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
                                      <input value="" type="text" class="form-control" id="NIMCompare" name="NIM" value=""
                                      placeholder="universitas...">
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
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input value="" type="text" class="form-control" id="NamaCompare" name="Nama" value=""
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
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input value="" type="text" class="form-control" id="Jurusan_StudiCompare" name="Jurusan_Studi"
                                      value="" placeholder="jurusan_studi...">
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
                                      <input value="" type="text" class="form-control" id="Jenjang_GelarCompare" name="Jenjang_Gelar"
                                       placeholder="jenjang_gelar...">
                                   
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
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">IPK</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input value="" type="text" class="form-control" id="IPK" name="IPKCompare" value=""
                                      placeholder="ipk...">
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
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Nama Fakultas</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input value="" type="text" class="form-control" id="FakultasCompare" name="Fakultas" value=""
                                      placeholder="fakultas...">
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
                                  <label for="inputName" class="col-sm-4 col-form-label">Nama Universitas</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input value="{{ $transcripts['data']['Universitas'] ?? '' }}" type="text" class="form-control" id="Universitas" name="Universitas" value="" placeholder="Nama Universitas...">
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
                                      <input  type="text" class="form-control" id="NIM" name="NIM" value=""
                                      placeholder="universitas...">
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
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $transcripts['data']['Nama'] ?? '' }}"
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
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input  type="text" class="form-control" id="Jurusan_Studi" name="Jurusan_Studi"
                                      value="{{ $transcripts['data']['Jurusan_Studi'] ?? '' }}" placeholder="jurusan_studi...">
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
                                      <input  type="text" class="form-control" id="Jenjang_Gelar" name="Jenjang_Gelar"
                                      value="{{ $transcripts['data']['Jenjang_Gelar'] ?? '' }}" placeholder="jenjang_gelar...">
                                   
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
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">IPK</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input  type="text" class="form-control" id="IPK" name="IPK" value="{{ $transcripts['data']['IPK'] ?? '' }}"
                                      placeholder="ipk...">
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
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Nama Fakultas</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input  type="text" class="form-control" id="Fakultas" name="Fakultas" value="{{ $transcripts['data']['Fakultas'] ?? '' }}"
                                      placeholder="fakultas...">
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
      "Universitas": "UNIVERSITAS SUMATERA UTARA",
      "NIM": "0105183387",
      "Nama": "Tasya Rahmadina",
      "Jurusan_Studi": "Ilmu Komunikasi",
      "Jenjang_Gelar": "Sarjana",
      "IPK": "3.78",
      "Fakultas": "FAKULTAS ILMU SOSIAL, Ilmu Sosial"
    };

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

            document.getElementById("Universitas").value = data.Universitas || '';
            document.getElementById("NIM").value = data.NIM || '';
            document.getElementById("Nama").value = data.Nama || '';
            document.getElementById("Jurusan_Studi").value = data.Jurusan_Studi || '';
            document.getElementById("Jenjang_Gelar").value = data.Jenjang_Gelar || '';
            document.getElementById("IPK").value = data.IPK || '';
            document.getElementById("Fakultas").value = data.Fakultas || '';
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
    window.clearForm = function() {
      document.getElementById("Universitas").value = '';
      document.getElementById("NIM").value = '';
      document.getElementById("Nama").value = '';
      document.getElementById("Jurusan_Studi").value = '';
      document.getElementById("Jenjang_Gelar").value = '';
      document.getElementById("IPK").value = '';
      document.getElementById("Fakultas").value = '';
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
      const checkbox = document.getElementById('academic-transcript-is-compare');
      const card = document.getElementById('academic-transcript-is-compare-card');

      // Load the saved checkbox state from localStorage
      const isChecked = localStorage.getItem('academic-transcript-is-compare') === 'true';
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      checkbox.addEventListener('change', function() {
          const isChecked = checkbox.checked;
          localStorage.setItem('academic-transcript-is-compare', isChecked);
          card.style.display = isChecked ? 'block' : 'none';
      });
  });
</script>
@endsection