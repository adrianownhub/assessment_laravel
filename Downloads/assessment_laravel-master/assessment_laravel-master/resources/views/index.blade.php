@extends('layouts.master')

@section('title')
    <h1 class="m-0">Dashboard</h1>
@endsection


@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
@endsection


@section('content')
    <!-- Info boxes -->

    <div class="row">
        <div class="col-sm-12">
            <!-- CUSTOM BLOCKQUOTE -->
            <blockquote style="margin: 1.5em 0rem;" class="blockquote blockquote-custom bg-white p-3 shadow rounded">
                <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                <p class="mb-0 mt-2 font-italic">"You miss 100% of the shots you don’t take." <a href="#"
                        class="text-info">@wayne</a>."</p>
                <footer class="blockquote-footer pt-4 mt-4 border-top">
                    <cite title="Source Title">Wayne Gretzky</cite>
                </footer>
            </blockquote><!-- END -->
        </div>
        <div></div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <form id="upload_form" action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" id="uploadFile" name="uploadFile[]" class="form-group" multiple>
                    <button type="submit" class="btn btn-info mb-3">Upload</button>
                </form>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered" id="filelist_tbl" name="filelist_tbl" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>File Name</th>
                            <th>File Path</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="view_file_modal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Medical Certificate</h4>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body text-left">
                    <iframe id="frame" src="" width="100%" style="overflow:hidden;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('js')
@push('scripts')
    <script>
        var filelist_tbl = $('#filelist_tbl').DataTable({
            ajax: "{{ route('dashboard.listData') }}",
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'filename',
                    name: 'filename'
                },
                {
                    data: 'filepath',
                    name: 'filepath',
                    render: function(data, type, row) {
                        return "<a role='button' class='text-primary' onClick='viewFile(\"" + row
                            .filepath +
                            "\");' id='bt_viewcert' >" + row.filepath +
                            "</a>"
                    }
                },
            ]
        });

        function viewFile(path) {
            var extension = path.split('.').pop().toLowerCase();
            if (extension === 'pdf') {
                // Load PDF.js
                var script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js';
                document.head.appendChild(script);
        
                // Set up the PDF.js viewer
                var viewer = document.createElement('div');
                viewer.className = 'pdfjs-viewer';
                var iframe = document.getElementById('frame');
                iframe.contentDocument.body.appendChild(viewer);
        
                // Load the PDF file using PDF.js
                var loadingTask = pdfjsLib.getDocument("{{ url('') }}" + '/' + path);
                loadingTask.promise.then(function(pdf) {
                    // Load the first page of the PDF and render it
                    pdf.getPage(1).then(function(page) {
                        var viewport = page.getViewport({ scale: 1 });
                        var canvas = document.createElement('canvas');
                        var ctx = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;
                        var renderContext = {
                            canvasContext: ctx,
                            viewport: viewport
                        };
                        page.render(renderContext).promise.then(function() {
                            // Add the rendered canvas to the PDF.js viewer
                            viewer.appendChild(canvas);
                            // Show the modal
                            $("#view_file_modal").modal("show");
                        });
                    });
                });
            } else {
                // Use an image viewer
                var img = document.createElement('img');
                img.src = "{{ url('') }}" + '/' + path;
                img.style.maxWidth = '100%';
                img.style.maxHeight = '100%';
                var viewer = document.getElementById('frame').contentDocument.body;
                viewer.innerHTML = '';
                viewer.appendChild(img);
                // Show the modal
                $("#view_file_modal").modal("show");
            }
        }
        
    </script>
@endpush
