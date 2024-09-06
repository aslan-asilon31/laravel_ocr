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
                  <input class="custom-control-input" type="checkbox" id="ktp-is-compare" value="">
                  <label for="ktp-is-compare" class="custom-control-label">
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
                    src="{{ asset('9101061710990004_KTP_235818-v1.jpeg') }}" alt="Preview Gambar">
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
              <div class="card card-danger card-outline" id="ktp-is-compare-card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form id="data-form" class="form-horizontal">
                      <div class="form-group row">
                        <label for="KTP_NAMA" class="col-sm-4 col-form-label">Nama</label>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_NAMA" id="KTP_NAMACompare" value="ZAKI ARISAD"
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
                        <label for="KTP_NIK" class="col-sm-4 col-form-label">NIK</label>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_NIK" id="KTP_NIKCompare" value="3515151610740002"
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
                        <label for="KTP_TEMPAT_LAHIR" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_TEMPAT_LAHIR" id="KTP_TEMPAT_LAHIRCompare" value="SURABAYA"
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
                        <label for="KTP_TGL_LAHIR" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="date" class="form-control is-valid" name="KTP_TGL_LAHIR" id="KTP_TGL_LAHIRCompare" value="15-10-1974"
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
                        <label for="KTP_GOL_DARAH" class="col-sm-4 col-form-label">Golongan Darah</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_GOL_DARAH" id="KTP_GOL_DARAHCompare" value="A"
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
                        <label for="KTP_ALAMAT" class="col-sm-4 col-form-label">Alamat</label>
                          <textarea class="form-control is-valid" name="KTP_ALAMAT" id="KTP_ALAMATCompare" 
                            placeholder="Alamat...">JL. H. AL SHOLHUN NO 54 CIBUBUR</textarea>
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
                        <label for="KTP_RT_RW" class="col-sm-4 col-form-label">RT/RW</label>
                        <textarea class="form-control is-valid" name="KTP_RT_RW" id="KTP_RT_RWCompare" value="004/010"
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
                        <label for="KTP_KELURAHAN" class="col-sm-4 col-form-label">Kelurahan/Desa</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_KELURAHAN" id="KTP_KELURAHANCompare" value="CIDURURUK"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Kecamatan</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_KECAMATAN" id="KTP_KECAMATANCompare" value="CIRACAS"
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
                        <label for="KTP_KABUPATEN_MADYA" class="col-sm-4 col-form-label">Kabupaten</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_KABUPATEN_MADYA" id="KTP_KABUPATEN_MADYACompare" value="JAKARTA TIMUR"
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
                        <label for="KTP_PROVINSI" class="col-sm-4 col-form-label">Provinsi</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_PROVINSI" id="KTP_PROVINSICompare" value="PROVINSI DKI JAKARTA"
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
                        <label for="KTP_AGAMA" class="col-sm-4 col-form-label">Agama</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_AGAMA" id="KTP_AGAMACompare" value="ISLAM"
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
                        <label for="KTP_STATUS_PERKAWINAN" class="col-sm-4 col-form-label">Status Perkawinan</label>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_STATUS_PERKAWINAN" id="KTP_STATUS_PERKAWINANCompare" value="KAWIN"
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
                        <label for="KTP_PEKERJAAN" class="col-sm-4 col-form-label">Pekerjaan</label>
                                                            
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_PEKERJAAN" id="KTP_PEKERJAANCompare" value="KARYAWAN SWASTA"
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
                        <label for="KTP_KEWARGANEGARAAN" class="col-sm-4 col-form-label">Kewarganegaraan</label>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_KEWARGANEGARAAN" id="KTP_KEWARGANEGARAANCompare" value="WNI"
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
                        <label for="KTP_BERLAKU_HINGGA" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                          
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_BERLAKU_HINGGA" id="KTP_BERLAKU_HINGGACompare" value="SEUMUR HIDUP"
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
                    <form id="data-form" class="form-horizontal">
                      <div class="form-group row">
                        <label for="KTP_NAMA" class="col-sm-4 col-form-label">Nama</label>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_NAMA" id="KTP_NAMA" value="ZAKI ARISAD"
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
                        <label for="KTP_NIK" class="col-sm-4 col-form-label">NIK</label>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_NIK" id="KTP_NIK" value="3515151610740002"
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
                        <label for="KTP_TEMPAT_LAHIR" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="SURABAYA" id="KTP_TEMPAT_LAHIR" value="SURABAYA"
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
                        <label for="KTP_TGL_LAHIR" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="date" class="form-control is-valid" name="" id="KTP_TGL_LAHIR" value="15-10-1974"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Golongan Darah</label>
                  

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="" id="KTP_GOL_DARAH" value="A"
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
                          <textarea class="form-control is-valid" name="KTP_ALAMAT" id="KTP_ALAMAT" 
                            placeholder="Alamat...">JL. H. AL SHOLHUN NO 54 CIBUBUR</textarea>
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
                        <textarea class="form-control is-valid" name="" id="KTP_RT_RW" value="004/010"
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
                        <label for="KTP_KELURAHAN" class="col-sm-4 col-form-label">Kel/Desa</label>
                      

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="" id="KTP_KELURAHAN" value="CIDURURUK"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Kecamatan</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="" id="KTP_KECAMATAN" value="CIRACAS"
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
                        <label for="KTP_KABUPATEN_MADYA" class="col-sm-4 col-form-label">Kabupaten</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="" id="KTP_KABUPATEN_MADYA" value="JAKARTA TIMUR"
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
                        <label for="KTP_PROVINSI" class="col-sm-4 col-form-label">Provinsi</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="" id="KTP_PROVINSI" value="PROVINSI DKI JAKARTA"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Agama</label>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="" id="KTP_AGAMA" value="ISLAM"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Status Perkawinan</label>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="" id="KTP_STATUS_PERKAWINAN" value="KAWIN"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Pekerjaan</label>
                                                            
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="" id="KTP_PEKERJAAN" value="KARYAWAN SWASTA"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Kewarganegaraan</label>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="" id="KTP_KEWARGANEGARAAN" value="WNI"
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
                        <label for="KTP_KECAMATAN" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                          
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="" id="KTP_BERLAKU_HINGGA" value="SEUMUR HIDUP"
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
  <!-- end add more row  -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Simulasi data JSON
      const data = {
        "KTP_AGAMA": "ISLAM",
        "KTP_ALAMAT": "JL. H. AL SHOLHUN NO 54 CIBUBUR",
        "KTP_BERLAKU_HINGGA": "SEUMUR HIDUP",
        "KTP_DIKELUARKAN_DI": "JAKARTA TIMUR",
        "KTP_DIKELUARKAN_TGL": "43191",
        "KTP_GOL_DARAH": "A",
        "KTP_JENIS_KELAMIN": "LAKI-LAKI",
        "KTP_KABUPATEN_MADYA": "JAKARTA TIMUR",
        "KTP_KECAMATAN": "CIRACAS",
        "KTP_KELURAHAN": "CIDURURUK",
        "KTP_KEWARGANEGARAAN": "WNI",
        "KTP_NAMA": "ZAKI ARISAD",
        "KTP_NIK": "3515151610740002",
        "KTP_PEKERJAAN": "KARYAWAN SWASTA",
        "KTP_PROVINSI": "PROVINSI DKI JAKARTA",
        "KTP_RT_RW": "004/010",
        "KTP_STATUS_PERKAWINAN": "KAWIN",
        "KTP_TEMPAT_LAHIR": "SURABAYA",
        "KTP_TGL_LAHIR": "15-10-1974"
      };


      // Fungsi untuk mengonversi tanggal 
      function convertDateToISO(dateString) {
          // Pisahkan string tanggal menjadi bagian-bagian
          const [day, month, year] = dateString.split('-');

          // Format menjadi YYYY-MM-DD
          return `${year}-${month}-${day}`;
      }


      startLoadingProgress();



      // Fungsi untuk mengupdate progress bar
      function updateProgressBar(percent) {
        const progressBar = document.querySelector(".progress-bar");
        const progressText = document.getElementById("progress-text");

        progressBar.style.width = percent + "%";
        progressText.textContent = percent + "% Complete";

        if (percent >= 100) {

          setTimeout(() => {
            // Menyembunyikan progress bar setelah selesai
            document.getElementById("progress-container").style.display = "none";
            // Menampilkan pesan sukses scan
            document.getElementById("scan-status").style.display = "block";
            // Menampilkan form
            document.getElementById("data-form").style.display = "block";

            // Isi form dengan data JSON
            document.getElementById("KTP_NAMA").value = data.KTP_NAMA;
            document.getElementById("KTP_NIK").value = data.KTP_NIK;
            document.getElementById("KTP_TEMPAT_LAHIR").value = data.KTP_TEMPAT_LAHIR;
            document.getElementById("KTP_TGL_LAHIR").value = convertDateToISO(data.KTP_TGL_LAHIR);
            document.getElementById("KTP_GOL_DARAH").value = data.KTP_GOL_DARAH;
            document.getElementById("KTP_ALAMAT").value = data.KTP_ALAMAT;
            document.getElementById("KTP_RT_RW").value = data.KTP_RT_RW;
            document.getElementById("KTP_KELURAHAN").value = data.KTP_KELURAHAN;
            document.getElementById("KTP_KECAMATAN").value = data.KTP_KECAMATAN;
            document.getElementById("KTP_KABUPATEN_MADYA").value = data.KTP_KABUPATEN_MADYA;
            document.getElementById("KTP_PROVINSI").value = data.KTP_PROVINSI;
            document.getElementById("KTP_AGAMA").value = data.KTP_AGAMA;
            document.getElementById("KTP_STATUS_PERKAWINAN").value = data.KTP_STATUS_PERKAWINAN;
            document.getElementById("KTP_PEKERJAAN").value = data.KTP_PEKERJAAN;
            document.getElementById("KTP_KEWARGANEGARAAN").value = data.KTP_KEWARGANEGARAAN;
            document.getElementById("KTP_BERLAKU_HINGGA").value = data.KTP_BERLAKU_HINGGA;


            document.getElementById("KTP_NAMACompare").value = data.KTP_NAMA;
            document.getElementById("KTP_NIKCompare").value = data.KTP_NIK;
            document.getElementById("KTP_TEMPAT_LAHIRCompare").value = data.KTP_TEMPAT_LAHIR;
            document.getElementById("KTP_TGL_LAHIRCompare").value = convertDateToISO(data.KTP_TGL_LAHIR);
            document.getElementById("KTP_GOL_DARAHCompare").value = data.KTP_GOL_DARAH;
            document.getElementById("KTP_ALAMATCompare").value = data.KTP_ALAMAT;
            document.getElementById("KTP_RT_RWCompare").value = data.KTP_RT_RW;
            document.getElementById("KTP_KELURAHANCompare").value = data.KTP_KELURAHAN;
            document.getElementById("KTP_KECAMATANCompare").value = data.KTP_KECAMATAN;
            document.getElementById("KTP_KABUPATEN_MADYACompare").value = data.KTP_KABUPATEN_MADYA;
            document.getElementById("KTP_PROVINSICompare").value = data.KTP_PROVINSI;
            document.getElementById("KTP_AGAMACompare").value = data.KTP_AGAMA;
            document.getElementById("KTP_STATUS_PERKAWINANCompare").value = data.KTP_STATUS_PERKAWINAN;
            document.getElementById("KTP_PEKERJAANCompare").value = data.KTP_PEKERJAAN;
            document.getElementById("KTP_KEWARGANEGARAANCompare").value = data.KTP_KEWARGANEGARAAN;
            document.getElementById("KTP_BERLAKU_HINGGACompare").value = data.KTP_BERLAKU_HINGGA;
          }, 500);
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

      function clearForm() {
        document.getElementById("KTP_NAMA").value = '';
        document.getElementById("KTP_NIK").value = '';
        document.getElementById("KTP_TEMPAT_LAHIR").value = '';
        document.getElementById("KTP_TGL_LAHIR").value = '';
        document.getElementById("KTP_GOL_DARAH").value = '';
        document.getElementById("KTP_ALAMAT").value = '';
        document.getElementById("KTP_RT_RW").value = '';
        document.getElementById("KTP_KELURAHAN").value = '';
        document.getElementById("KTP_KECAMATAN").value = '';
        document.getElementById("KTP_KABUPATEN_MADYA").value = '';
        document.getElementById("KTP_PROVINSI").value = '';
        document.getElementById("KTP_AGAMA").value = '';
        document.getElementById("KTP_STATUS_PERKAWINAN").value = '';
        document.getElementById("KTP_PEKERJAAN").value = '';
        document.getElementById("KTP_KEWARGANEGARAAN").value = '';
        document.getElementById("KTP_BERLAKU_HINGGA").value = '';
      }


    });


    document.getElementById('file-input').addEventListener('change', function (event) {
      const file = event.target.files[0];
      if (file) {
        // Contoh: Menampilkan pratinjau gambar
        const reader = new FileReader();
        reader.onload = function (e) {
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



  </script>



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

@endsection