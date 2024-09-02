@extends('layouts/master')

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
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                </div>
                <div class="card-body box-profile">
                <h6>Upload image here</h6>
                <img id="image-preview" style="max-width: 300px;" class="img-preview" src="{{asset('project-ocr/dist/img/no-image-ktp.png')}}" alt="Preview Gambar">
                <!-- <form id="upload-form" class="mt-10"> -->
                <form action="ktp_scanned.html" id="upload-form" class="mt-10">
                    <div class="" style="display: flex; justify-content: space-between;">
                    <input type="file" id="file-input" accept="image/*" style="width: 200px;" required>
                    <a href="ktp_scanned.html" class="btn bg-dark " style="width: 100px;">Scan</a>
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
                        <input type="text" class="form-control" id="inputName" placeholder="Nama...">
                        <div class="col-sm-10">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNIK" class="col-sm-4 col-form-label">NIK</label>
                            <input type="text" class="form-control" id="inputNIK" placeholder="NIK...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTanggalLahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Golongan Darah</label>
                            <input type="text" class="form-control" id="inputGolonganDarah" placeholder="Golongan Darah...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
                            <textarea class="form-control" id="inputAlamat" placeholder="Alamat..."></textarea>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-4 col-form-label">RT/RW</label>
                            <textarea class="form-control" id="inputRTRW" placeholder="RT/RW..."></textarea>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKelurahan" class="col-sm-4 col-form-label">Kel/Desa</label>
                            <input type="text" class="form-control" id="inputKelurahan" placeholder="Kelurahan...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="inputKecamatan" placeholder="Kecamatan...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                            <input type="text" class="form-control" id="inputKabupaten" placeholder="Kabupaten...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputProvinsi" class="col-sm-4 col-form-label">Provinsi</label>
                            <input type="text" class="form-control" id="inputProvinsi" placeholder="Provinsi...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Agama</label>
                            <input type="text" class="form-control" id="inputAgama" placeholder="Agama...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Status Perkawinan</label>
                            <input type="text" class="form-control" id="inputStatusPerkawinan" placeholder="Status Perkawinan...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <input type="text" class="form-control" id="inputPekerjaan" placeholder="Pekerjaan...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                            <input type="text" class="form-control" id="inputKewarganegaraan" placeholder="Kewarganegaraan...">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKecamatan" class="col-sm-4 col-form-label">Berlaku Hingga</label>
                            <input type="text" class="form-control" id="inputBerlakuHingga" placeholder="Berlaku Hingga...">
                            <div class="col-sm-10">
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
@endsection