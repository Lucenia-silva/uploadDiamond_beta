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
                        <h4 class="page-title">Cadastro Notícia</h4>
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
                            <form class="form-horizontal" action="{{ route('editarNoticiaPost') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $noticias->noticia_id }}">
                                <div class="card-body">
                                    <h4 class="card-title">Data News</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Titulo News" name="title" value="{{ $noticias->titulo }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Short
                                            Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname"
                                                placeholder="Short Description News" name="short" value="{{ $noticias->news_short_description }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Artigo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname"
                                                placeholder="Short Description News" name="artigo" value="{{ $noticias->artigo }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="catNoticia" value="{{ $noticias->categoria}}">
                                                @foreach($categorias as $categoria)
                                                    <option value="{{ $categoria->cat_id }}">{{ $categoria->titulo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Type
                                            News</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="tipoNoticia" value="{{ $noticias->noticiatipo_id_tipo}}">
                                                @foreach($tipos as $tipo)
                                                    <option value="{{ $tipo->id_tipo }}">{{ $tipo->nome_tipo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="imageNoticia" id="validatedCustomFile" value="{{ $noticias->image_noticia}}" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose File...</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Full Text News</h4>
                                                <!-- Create the editor container -->
                                                <textarea id="editor" style="height: 300px; width:100%;" name="fulltexto">
                                                    {{$noticias->news_full_content}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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