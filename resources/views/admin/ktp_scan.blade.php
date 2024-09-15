@extends('../layouts/master')

@section('title','KTP Scan')
@section('content')
  <div id="upload-section">
    <!-- The original row with the form -->
    <div class="row upload-row">
      <div class="col-12">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('ktp.store') }}" id="upload-form"  class="form-horizontal mt-10" method="POST" enctype="multipart/form-data">
            @csrf
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
                      src="{{ asset($fileUrl) }}" alt="Preview Gambar">
                    <form action="{{route('ktp.index')}}" id="upload-form" class="mt-10">
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
                        <div class="form-group row">
                          <label for="KTP_NAMA" class="col-sm-4 col-form-label">Nama</label>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                            </div>
                            <input type="text" class="form-control is-valid" name="KTP_NAMA" id="KTP_NAMACompare" value=""
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

                            <input type="text" class="form-control is-valid" name="KTP_NIK" id="KTP_NIKCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_TEMPAT_LAHIR" id="KTP_TEMPAT_LAHIRCompare" value=""
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
                            <input type="date" class="form-control is-valid" name="KTP_TGL_LAHIR" id="KTP_TGL_LAHIRCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_GOL_DARAH" id="KTP_GOL_DARAHCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_KELURAHAN" id="KTP_KELURAHANCompare" value=""
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
                              <input type="text" class="form-control is-valid" name="KTP_KECAMATAN" id="KTP_KECAMATANCompare" value=""
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
                              <input type="text" class="form-control is-valid" name="KTP_KABUPATEN_MADYA" id="KTP_KABUPATEN_MADYACompare" value=""
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
                              <input type="text" class="form-control is-valid" name="KTP_PROVINSI" id="KTP_PROVINSICompare" value=""
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
                              <input type="text" class="form-control is-valid" name="KTP_AGAMA" id="KTP_AGAMACompare" value=""
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
                              <input type="text" class="form-control is-valid" name="KTP_STATUS_PERKAWINAN" id="KTP_STATUS_PERKAWINANCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_PEKERJAAN" id="KTP_PEKERJAANCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_KEWARGANEGARAAN" id="KTP_KEWARGANEGARAANCompare" value=""
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
                            <input type="text" class="form-control is-valid" name="KTP_BERLAKU_HINGGA" id="KTP_BERLAKU_HINGGACompare" value=""
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
                            <button type="submit" class="btn btn-primary">Scan</button>
                            <button class="btn btn-danger" onclick="clearForm()">Clear Form</button>
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
                    <form action="{{ route('ktp.store') }}" id="upload-form"  class="form-horizontal mt-10" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label for="KTP_NAMA" class="col-sm-4 col-form-label">Nama</label>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                          </div>
                          <input type="text" class="form-control is-valid" name="KTP_NAMA" id="KTP_NAMA" value="{{ $ktps['data']['KTP_NAMA'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="image_ktp" id="" value="{{ $fileNameImage }}"
                          placeholder="" hidden>
                          <input type="text" class="form-control is-valid" name="KTP_NIK" id="KTP_NIK" value="{{ $ktps['data']['KTP_NIK'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_TEMPAT_LAHIR" id="KTP_TEMPAT_LAHIR" value="{{ $ktps['data']['KTP_TEMPAT_LAHIR'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_TGL_LAHIR" id="KTP_TGL_LAHIR" value="{{ $ktps['data']['KTP_TGL_LAHIR'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_GOL_DARAH" id="KTP_GOL_DARAH" value="{{ $ktps['data']['KTP_GOL_DARAH'] ?? '' }}"
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
                            placeholder="Alamat...">{{ $ktps['data']['KTP_ALAMAT'] ?? '' }}</textarea>
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
                        <textarea class="form-control is-valid" name="KTP_RT_RW" id="KTP_RT_RW" 
                          placeholder="RT/RW...">{{ $ktps['data']['KTP_RT_RW'] ?? '' }}</textarea>
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
                          <input type="text" class="form-control is-valid" name="KTP_KELURAHAN" id="KTP_KELURAHAN" value="{{ $ktps['data']['KTP_KELURAHAN'] ?? '' }}"
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
                            <input type="text" class="form-control is-valid" name="KTP_KECAMATAN" id="KTP_KECAMATAN" value="{{ $ktps['data']['KTP_KECAMATAN'] ?? '' }}"
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
                            <input type="text" class="form-control is-valid" name="KTP_KABUPATEN_MADYA" id="KTP_KABUPATEN_MADYA" value="{{ $ktps['data']['KTP_KABUPATEN_MADYA'] ?? '' }}"
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
                            <input type="text" class="form-control is-valid" name="KTP_PROVINSI" id="KTP_PROVINSI" value="{{ $ktps['data']['KTP_PROVINSI'] ?? '' }}"
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
                            <input type="text" class="form-control is-valid" name="KTP_AGAMA" id="KTP_AGAMA" value="{{ $ktps['data']['KTP_AGAMA'] ?? '' }}"
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
                            <input type="text" class="form-control is-valid" name="KTP_STATUS_PERKAWINAN" id="KTP_STATUS_PERKAWINAN" value="{{ $ktps['data']['KTP_STATUS_PERKAWINAN'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_PEKERJAAN" id="KTP_PEKERJAAN" value="{{ $ktps['data']['KTP_PEKERJAAN'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_KEWARGANEGARAAN" id="KTP_KEWARGANEGARAAN" value="{{ $ktps['data']['KTP_KEWARGANEGARAAN'] ?? '' }}"
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
                          <input type="text" class="form-control is-valid" name="KTP_BERLAKU_HINGGA" id="KTP_BERLAKU_HINGGA" value="{{ $ktps['data']['KTP_BERLAKU_HINGGA'] ?? '' }}"
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