@extends('admin.theme.index')

@section('content')
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('admin.dashboard.header')
        @include('admin.dashboard.side')


        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title" Listar Categoria</h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">List Category</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo</th>
                                                <th>Titulo</th>
                                                <th>Artigo</th>
                                                <th>Short Description</th>
                                                <th>Full</th>
                                                <th>Image</th>
                                                <th>Created date</th>
                                                <th>Updated date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($noticias as $noticia)
                                                <tr>
                                                    <td>{{ $noticia->noticia_id }}</td>
                                                    <td>{{ $noticia->noticiatipo_id_tipo }}</td>
                                                    <td>{{ $noticia->titulo }}</td>
                                                    <td>{{ $noticia->artigo }}</td>
                                                    <td>{{ $noticia->news_short_description }}</td>
                                                    <td>{{ $noticia->news_full_content }}</td>
                                                    <td>

                                                        <img src="{{ asset('images') }}/{{ $noticia->image_noticia }}" alt="Image News" class="" style="max-width: 2.5rem; height: auto;">
                                                    </td>
                                                    <td>{{ $noticia->created_at }}</td>
                                                    <td>{{ $noticia->updated_at }}</td>
                                                    <td>
                                                        <a href="/admin/dashboard/editarNoticia/{{ $noticia->noticia_id  }}" class="btn btn-success">Editar</a>

                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                All Rights Reserved by Pubs Mídia Mais. Designed and Developed by <a href="#">Mídia Mais</a>.
            </footer>
        </div>
    </div>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/css/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/css/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/css/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="/dist/js/pages/mask/mask.init.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
@endsection
