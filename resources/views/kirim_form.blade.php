@extends('./layouts/master_proctoring')

@section('title', 'Kirim DataExam Proctoring')

@section('content')
    <div class="container">
        <h1>Exam Proctoring Form</h1>
        

        
        <!-- Menampilkan pesan sukses -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Menampilkan pesan error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="proctoringForm" method="POST" action="{{ url('/send-proctoring-data') }}" hidden>
            @csrf
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="user[id]" value="User456">
            <input type="hidden" name="user[name]" value="Aslan asilonr456">


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const startTimestamp = document.getElementById('startTimestamp');
                const stopTimestamp = document.getElementById('stopTimestamp');

                // Set timestamps on form load
                startTimestamp.value = new Date().toISOString();
                stopTimestamp.value = new Date().toISOString();
            });
        </script>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Form akan disubmit secara otomatis saat halaman dimuat
                document.getElementById('proctoringForm').submit();
            });
        </script>

    </div>

    <script>
        $(function () {
        
            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
            });
        })
    </script>


@endsection
