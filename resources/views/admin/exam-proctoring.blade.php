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



    
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            const video = document.getElementById('video');
            const imagePreview = document.getElementById('image-preview');

            const userId = "12345"; // Contoh ID pengguna
            const userName = "John Doe"; // Contoh nama pengguna

            let stream;
            try {
                stream = await navigator.mediaDevices.getUserMedia({ video: true });
                video.srcObject = stream;
                imagePreview.hidden = true;

                // Data yang akan dikirim ke server
                const data = {
                    user: {
                        id: userId,
                        name: userName
                    },
                    cameraStatus: [
                        {
                            status: 'start',
                            timestamp: new Date().toISOString()
                        }
                    ]
                };

                // Mengirim data ke server
                fetch('/proctoring.json', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => console.log('Success:', data))
                .catch((error) => console.error('Error:', error));

            } catch (error) {
                console.error('Error accessing camera: ', error);
            }
        });
    </script>



<script>
    document.addEventListener('DOMContentLoaded', async function () {
        const video = document.getElementById('video');
        const imagePreview = document.getElementById('image-preview');

        const userId = "aslan12345"; // Contoh ID pengguna
        const userName = "aslan12345 Doe"; // Contoh nama pengguna

        let stream;
        try {
            stream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = stream;
            imagePreview.hidden = true;

            // Data yang akan dikirim ke server
            const data = {
                user: {
                    id: userId,
                    name: userName
                },
                cameraStatus: [
                    {
                        status: 'start',
                        timestamp: new Date().toISOString()
                    },
                    {
                        status: 'stop',
                        timestamp: new Date().toISOString()
                    }
                ]
            };

            // Mengirim data ke server Laravel
            fetch('/send-proctoring-data', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => console.log('Success:', data))
            .catch((error) => console.error('Error:', error));

        } catch (error) {
            console.error('Error accessing camera: ', error);
        }
    });
</script>

@endsection