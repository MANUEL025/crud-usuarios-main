<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Add / Edit Product</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add / Edit Product</h4>
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
                                            <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" id="product-name" class="form-control" placeholder="e.g : Apple iMac">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-reference" class="form-label">Reference <span class="text-danger">*</span></label>
                                            <input type="text" id="product-reference" class="form-control" placeholder="e.g : Apple iMac">
                                        </div>

                                        

                                        <div class="mb-3">
                                            <label for="product-summary" class="form-label">Product Summary</label>
                                            <textarea class="form-control" id="product-summary" rows="3" placeholder="Please enter summary"></textarea>
                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="product-price">Price <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="product-price" placeholder="Enter amount">
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Status <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="d-flex flex-wrap">
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option1" id="inlineRadio1" checked="">
                                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option2" id="inlineRadio2">
                                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option3" id="inlineRadio3">
                                                    <label class="form-check-label" for="inlineRadio3">Draft</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">Comment</label>
                                            <textarea class="form-control" rows="3" placeholder="Please enter comment"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                        <form action="/" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                            

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                                        <div class="mb-3">
                                            <label for="product-meta-title" class="form-label">Meta title</label>
                                            <input type="text" class="form-control" id="product-meta-title" placeholder="Enter title">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-meta-keywords" class="form-label">Meta Keywords</label>
                                            <input type="text" class="form-control" id="product-meta-keywords" placeholder="Enter keywords">
                                        </div>

                                        <div>
                                            <label for="product-meta-description" class="form-label">Meta Description </label>
                                            <textarea class="form-control" rows="5" id="product-meta-description" placeholder="Please enter description"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                    <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                                    <button type="button" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                    <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail="" src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                                            <p class="mb-0" data-dz-size=""></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->

                </div>