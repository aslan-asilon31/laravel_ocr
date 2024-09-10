@extends('../layouts/master')

@section('title','Transkrip Nilai')
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
                            <input class="custom-control-input" type="checkbox" id="academic-transcript-is-compare">
                            <label for="academic-transcript-is-compare" class="custom-control-label">
                                <h6>Is Compare ?</h6>
                            </label>
                          </div>
                          <h6 class="">Upload a PDF or image file (JPEG, PNG, GIF, WebP, BMP, SVG) </h6>

                      
                          <!-- Iframe to display PDF/image -->
                          <iframe id="pdf-preview" style="outline: none !important; border: none;" src="" width="100%" height="800"></iframe>  
                          <img id="image-preview" alt="Image Preview">

                          <!-- Form Upload -->
                          <form action="{{ route('transkrip-nilai.scan')}}" id="upload-form" class="mt-10">
                            <div style="display: flex; justify-content: space-between;">
                                <input type="file" id="file-input" style="width: 200px;" accept=".pdf, image/*" required onchange="handleFile()">
                                <button type="submit" class="btn bg-dark" style="width: 100px;">Scan</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                      <div class="card card-danger card-outline" id="academic-transcript-is-compare-card">
                        <div class="card-header p-2">
                        
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                              <form id="data-form" class="form-horizontal">
                                <div class="form-group row">
                                  <label for="inputName" class="col-sm-4 col-form-label">Nama Universitas</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="Universitas" name="Universitas" placeholder="Nama...">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">NIM</label>
                                 
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="NIM" name="NIM" value=""
                                      placeholder="universitas...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Nama" name="Nama" value=""
                                      placeholder="nama...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Jurusan_Studi" name="Jurusan_Studi"
                                      value="" placeholder="jurusan_studi...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Gelar</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Jenjang_Gelar" name="Jenjang_Gelar"
                                      value="" placeholder="jenjang_gelar...">
                                   
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">IPK</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="IPK" name="IPK" value=""
                                      placeholder="ipk...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Nama Fakultas</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Fakultas" name="Fakultas" value=""
                                      placeholder="fakultas...">
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
                                    <input type="text" class="form-control" id="Universitas" name="Universitas" placeholder="Nama...">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">NIM</label>
                                 
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="NIM" name="NIM" value=""
                                      placeholder="universitas...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Nama" name="Nama" value=""
                                      placeholder="nama...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Jurusan</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Jurusan_Studi" name="Jurusan_Studi"
                                      value="" placeholder="jurusan_studi...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Gelar</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Jenjang_Gelar" name="Jenjang_Gelar"
                                      value="" placeholder="jenjang_gelar...">
                                   
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">IPK</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="IPK" name="IPK" value=""
                                      placeholder="ipk...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Nama Fakultas</label>
                                  
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                      </div>
                                      <input type="text" class="form-control" id="Fakultas" name="Fakultas" value=""
                                      placeholder="fakultas...">
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