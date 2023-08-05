<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="?c=dashboard&m=dashboard">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="?c=products&m=index">Productos</a></li>
                            <li class="breadcrumb-item"><a href="?c=products&m=edit">Agregar / Editar producto</a></li>

                        </ol>
                    </div>
                    <h4 class="page-title">Agregar / Editar Producto</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Nombre del Producto <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="product-name" class="form-control" placeholder="ejem : Ceramicos">
                        </div>

                        <div class="mb-3">
                            <label for="product-reference" class="form-label">Referencia <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="product-reference" class="form-control" placeholder="ejem : SP049">
                        </div>



                        <div class="mb-3">
                            <label for="product-summary" class="form-label">Descripcion del Producto</label>
                            <textarea class="form-control" id="product-summary" rows="3"
                                placeholder="ingrese una descripcion"></textarea>
                        </div>


                        <div class="mb-3">
                            <label for="product-price">Precio <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="product-price" placeholder="Ingrese un precio">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Status <span class="text-danger">*</span></label>
                            <br>
                            <div class="d-flex flex-wrap">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="radioInline" value="option1"
                                        id="inlineRadio1" checked="">
                                    <label class="form-check-label" for="inlineRadio1">en stock</label>
                                </div>
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="radioInline" value="option2"
                                        id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">no disponible</label>
                                </div>

                            </div>
                        </div>


                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Imagenes del Producto</h5>

                        <form action="/" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone"
                            data-plugin="dropzone" data-previews-container="#file-previews"
                            data-upload-preview-template="#uploadPreviewTemplate">


                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Drop files here or click to upload.</h3>
                                <input type="file" id="imagen" name="imagen" accept="image/*">

                            </div>
                        </form>

                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                    </div>
                </div> <!-- end col-->



            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <a href="?c=products&m=index" class="btn w-sm btn-light waves-effect">cancelar</a>
                    <a href="?c=products&m=index" class="btn w-sm btn-success waves-effect waves-light">guardar</a>
                    <a href="?c=products&m=index" class="btn w-sm btn-danger waves-effect waves-light">eliminar</a>



                </div>
            </div> <!-- end col -->
        </div>



        <!-- file preview template -->



    </div> <!-- container -->

</div>