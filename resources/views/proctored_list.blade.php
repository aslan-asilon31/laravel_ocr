
@extends('layouts.master')

@section('title', 'Proctored Data')

@section('content')

    <div class="container ">
        


        <div class="row">
            <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                <h3 class="card-title">
                    Data Json Proctored
                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">


                    @if (isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @elseif (isset($data))

                            <textarea id="codeMirrorDemo" class="p-3">
                                {{ json_encode($data, JSON_PRETTY_PRINT) }}
                            </textarea>

                    @else
                        <div class="alert alert-info">
                            No data available.
                        </div>
                    @endif


                </div>
                <div class="card-footer">
                </div>
            </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->

   
    </div>




@endsection


@push('styles')



@endpush


@push('scripts')
<!-- CodeMirror -->
<script src="{{asset('project-ocr/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('project-ocr/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('project-ocr/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('project-ocr/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<script>
    $(function () {

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
</script>
@endpush
