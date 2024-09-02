@extends('../layouts/master')

@section('title','KTP')
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
                <h6>Upload image here</h6>
                <img id="image-preview" style="max-width: 300px;" class="img-preview"
                    src="{{asset('no-image-ktp.png')}}" alt="Preview Gambar">
                <!-- <form id="upload-form" class="mt-10"> -->
                <form action="{{ route('ktp.scan')}}" id="upload-form" class="mt-10">
                    <div class="" style="display: flex; justify-content: space-between;">
                    <input type="file" id="file-input" accept="image/*" style="width: 200px;" required>
                    <button type="submit" class="btn bg-dark " style="width: 100px;">Scan</button>
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
@endsection