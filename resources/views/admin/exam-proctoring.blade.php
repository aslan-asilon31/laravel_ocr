@extends('../layouts/master_proctoring')

@section('title','Exam Proctoring')
@section('content')

    <div class="row">
        <div class="col-12">

        <div class="row">
            <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-dark card-outline " id="profile-card">
                <div class="nav-item " >
                </div>
                <div class="card-body box-profile">

                <div class="row">
                    <div class="d-flex mb-2" hidden>
                    <button hidden class="btn btn-sm btn-primary" id="startButton"><i class="fa fa-video"></i></button>
                    <button hidden class="btn btn-sm btn-danger" id="stopButton"><i class="fa fa-video-slash"></i></button>
                    </div>
                </div>

                <div class="row">
                    <video id="video" autoplay></video>
                    <img id="image-preview" class="img-preview" src="{{asset('project-ocr')}}/dist/img/no-image-no-camera-found.png" alt="Preview Gambar">
                </div>
                
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-6" >
            <div class="card card-danger card-outline" id="content-card" class="card maximized-card" >
                <div class="card-header p-2">
                <a hidden href="javascript:history.back()" type="button" class="btn btn-tool bg-primary text-white">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <button hidden type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="browser-container">
                    <iframe src="https://quizizz.com/admin" title="" width="100%" ></iframe>
                    </div>
                <!-- /.tab-content -->
                </div><!-- /.card-body -->
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
@endsection