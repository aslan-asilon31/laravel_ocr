@extends('../layouts/master')

@section('title','KTP')
@section('content')
<div id="upload-section">
              <!-- The original row with the form -->
              <div class="row upload-row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-6">
                      <form method="POST" action="{{ route('ktp.scan') }}" id="upload-form"  class="mt-10"  enctype="multipart/form-data">
                        @csrf
                        <div class="card card-danger card-outline" >
                          <div class="card-header p-2">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                            class="fas fa-expand"></i></button>
                            <ul class="nav nav-pills">
                            </ul>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="active tab-pane" id="activity">
                                <form id="data-form" class="form-horizontal">
                                  <div>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ktp-is-compare" value="">
                                        <label for="ktp-is-compare" class="custom-control-label">
                                            <h6>Is Compare ?</h6>
                                        </label>
                                      </div>
                                      <h6 class="">Upload a PDF or image file (JPEG, PNG, GIF, WebP, BMP, SVG) </h6>
                                  
                                      <!-- Iframe to display PDF/image -->
                                      <iframe id="pdf-preview" style="outline: none !important; border: none;" src="" width="100%" height="800"></iframe>  
                                      <img id="image-preview" alt="Image Preview">

                                      <!-- Form Upload -->
                                      <!-- <form action="{{ route('ktp.scan') }}" id="upload-form" class="mt-10"> -->

                                      <div style="display: flex; justify-content: space-between;">
                                        <input type="text" name="is_url" value="0" hidden>
                                        <input type="text" name="is_compare" value="0" hidden>
                                        <input type="text" name="doc_ktp_url" value="https://oss.neucloud.id/rekrutbumn4/pelamar/1040085/.jpeg" hidden>
                                        <input type="text" name="tenant_id" value="1" hidden>
                                        <input type="text" name="method" value="original" hidden>
                                        
                                        <input type="file" id="file-input" name="doc_ktp_img" style="width: 200px;" accept=".pdf, image/*" required onchange="handleFile()">
                                      </div>

                                  </div>

                                  <div id="ktp-is-compare-card" >

                                    <div class="form-group row">
                                      <label for="inputName" class="col-sm-4 col-form-label">Nama</label>
                                                                      
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputName"  name="inputName" value=""
                                        placeholder="Nama...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputNIK" class="col-sm-4 col-form-label">NIK</label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputNIK"  name="inputNIK" value=""
                                        placeholder="NIK...">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputTempatLahir" name="inputTempatLahir" value=""
                                        placeholder="Tempat Lahir...">
                                      </div>
                                      <div class="col-sm-10">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputTanggalLahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="date" class="form-control" id="inputTanggalLahir" name="inputTanggalLahir" value=""
                                        placeholder="Tanggal Lahir...">
                                      </div>
                                      <div class="col-sm-10">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Golongan Darah</label>
  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputGolonganDarah" name="inputGolonganDarah" value=""
                                        placeholder="Golongan Darah...">
                                      </div>
                                      
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
                                      <textarea class="form-control" id="inputAlamat" name="inputAlamat" placeholder="Alamat..."></textarea>
                                    
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputAlamat" class="col-sm-4 col-form-label">RT/RW</label>
                                      <textarea class="form-control" id="inputRTRW" name="inputRTRW" placeholder="RT/RW..."></textarea>
                                    
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKelurahan" class="col-sm-4 col-form-label">Kel/Desa</label>
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputKelurahan" name="inputKelurahan" value=""
                                        placeholder="Kelurahan...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputKecamatan" name="inputKecamatan" value=""
                                        placeholder="Kecamatan...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputKabupaten" name="inputKabupaten" value=""
                                        placeholder="Kabupaten...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputProvinsi" class="col-sm-4 col-form-label">Provinsi</label>
  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputProvinsi" name="inputProvinsi" value=""
                                        placeholder="Provinsi...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Agama</label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputAgama" name="inputAgama" value=""
                                        placeholder="Agama...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputStatusPerkawinan" name="inputStatusPerkawinan" value=""
                                        placeholder="Status Perkawinan...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                    
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputPekerjaan" name="inputPekerjaan" value=""
                                        placeholder="Pekerjaan...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                      
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputKewarganegaraan" name="inputKewarganegaraan" value=""
                                        placeholder="Kewarganegaraan...">
                                      </div>
  
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputKecamatan" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                                  
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="inputBerlakuHingga" name="inputBerlakuHingga" value=""
                                        placeholder="Berlaku Hingga...">
                                      </div>
  
                                    </div>
                                  </div>


                                  <!-- Add other form fields here -->
                                  <div class="form-group row " style="margin-top:12px !important;">
                                    <div class="" style="display: flex; justify-content: space-between;">
                                      <button type="submit" class="btn btn-primary ">Scan</button>
                                      <button class="btn btn-danger " onclick="clearForm()">Clear Form</button>
                                    </div>
                                    <div class="offset-sm-4 col-sm-10">

                                    </div>
                                  </div>
                                <!-- /.post -->
                              </div>
                            </div>
                            <!-- /.tab-content -->
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </form>

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
                                  <label for="inputName" class="col-sm-4 col-form-label">Nama</label>
                                                                   
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputName" value=""
                                    placeholder="Nama...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">NIK</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputNIK" value=""
                                    placeholder="NIK...">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                 
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputTempatLahir" value=""
                                    placeholder="Tempat Lahir...">
                                  </div>
                                  <div class="col-sm-10">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputTanggalLahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="inputTanggalLahir" value=""
                                    placeholder="Tanggal Lahir...">
                                  </div>
                                  <div class="col-sm-10">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Golongan Darah</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputGolonganDarah" value=""
                                    placeholder="Golongan Darah...">
                                  </div>
                                  
                                </div>
                                <div class="form-group row">
                                  <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
                                  <textarea class="form-control" id="inputAlamat" placeholder="Alamat..."></textarea>
                                
                                </div>
                                <div class="form-group row">
                                  <label for="inputAlamat" class="col-sm-4 col-form-label">RT/RW</label>
                                  <textarea class="form-control" id="inputRTRW" placeholder="RT/RW..."></textarea>
                                
                                </div>
                                <div class="form-group row">
                                  <label for="inputKelurahan" class="col-sm-4 col-form-label">Kel/Desa</label>
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputKelurahan" value=""
                                    placeholder="Kelurahan...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputKecamatan" value=""
                                    placeholder="Kecamatan...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputKabupaten" value=""
                                    placeholder="Kabupaten...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputProvinsi" class="col-sm-4 col-form-label">Provinsi</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputProvinsi" value=""
                                    placeholder="Provinsi...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Agama</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputAgama" value=""
                                    placeholder="Agama...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Status Perkawinan</label>
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputStatusPerkawinan" value=""
                                    placeholder="Status Perkawinan...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputPekerjaan" value=""
                                    placeholder="Pekerjaan...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                  
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputKewarganegaraan" value=""
                                    placeholder="Kewarganegaraan...">
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="inputKecamatan" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                               
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputBerlakuHingga" value=""
                                    placeholder="Berlaku Hingga...">
                                  </div>

                                </div>
                                <!-- Add other form fields here -->
                                <div class="form-group row">
                                  <div class="" style="display: flex; justify-content: space-between;">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-danger" onclick="clearForm()">Clear Form</button>
                                  </div>
                                  <div class="offset-sm-4 col-sm-10">

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
  document.addEventListener('DOMContentLoaded', function() {
      const checkbox = document.getElementById('ktp-is-compare');
      const card = document.getElementById('ktp-is-compare-card');

      // Load the saved checkbox state from localStorage
      const isChecked = localStorage.getItem('ktp-is-compare') === 'true';
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      checkbox.addEventListener('change', function() {
          const isChecked = checkbox.checked;
          localStorage.setItem('ktp-is-compare', isChecked);
          card.style.display = isChecked ? 'block' : 'none';
      });
  });
</script>

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
@endsection