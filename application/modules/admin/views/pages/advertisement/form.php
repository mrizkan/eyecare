<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Advertisement</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/advertisement') ?>"> Advertisement</a></li>
                            <li class="active"> Advertisement <?= empty($obj->AddId) ? "Create" : "Edit" ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php'); ?>

            <div class="row">
                <div class="col-sm-12">
                    <?= form_open() ?>
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">General Information</h4>
                        <div class="alert alert-danger" role="alert">
                            <strong>Importance!</strong> check your image resolution for correct location
                            <br/>
                            <dl class="dl-horizontal row">
                                <dt class="col-sm-3">Home Page Location 01</dt>
                                <dd class="col-sm-9">590px * 120px</dd>

                                <dt class="col-sm-3">Home Page Location 02</dt>
                                <dd class="col-sm-9">290px * 120px</dd>

                                <dt class="col-sm-3">Home Page Location 03</dt>
                                <dd class="col-sm-9">290px * 120px</dd>

                                <dt class="col-sm-3 text-truncate">Home Page Location 04</dt>
                                <dd class="col-sm-9">270px * 250px</dd>

                                <dt class="col-sm-3 text-truncate">Home Page Location 05</dt>
                                <dd class="col-sm-9">270px * 270px</dd>
								
								<!--<dt class="col-sm-3 text-truncate">Home Page Location 06</dt>
                                <dd class="col-sm-9">270px * 250px</dd>-->

<!--                                <dt class="col-sm-3">Packages Page Advertisement</dt>-->
<!--                                <dd class="col-sm-9">270px * 250px</dd>-->

<!--                                <dt class="col-sm-3 text-truncate">Package-Details page Advertisement</dt>-->
<!--                                <dd class="col-sm-9">270px * 250px</dd>-->

<!--                                <dt class="col-sm-3 text-truncate">IP Tv page Advertisement</dt>-->
<!--                                <dd class="col-sm-9">270px * 250px</dd>-->
                            </dl>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Advertisement Title </label>
                                                <input type="text" id="ModelNumber" name="form[AddTitle]"
                                                       value="<?= set_value('form[AddTitle]', $obj->AddTitle) ?>"
                                                       class="form-control">
                                                <?= form_error('form[AddTitle]') ?>
                                            </div>
                                        </div>




                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Advertisement Location</label>
                                                <select class="form-control" name="form[LocationId]">.
                                                    <option value=""> Select Advertisement Location</option>
                                                    <?php foreach ($locations as $location): $location = (object)$location; ?>
                                                        <option
                                                            value="<?= $location->index ?>" <?= set_value('form[LocationId]', $obj->LocationId) == $location->index ? "selected" : "" ?> > <?= $location->value ?> </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('form[LocationId]') ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="name">Advertisement URL </label>
                                                <input type="text" id="ModelNumber" name="form[AddURL]"
                                                       value="<?= set_value('form[AddURL]', $obj->AddURL) ?>"
                                                       class="form-control">
                                                <?= form_error('form[AddURL]') ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Advertisement Image
                                                    <small> image size ( Check above note )</small>
                                                </label>
                                            </div>
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span> Add file </span>
                                                <input class="image_upload" data-for="#default_img_grid_upload"
                                                       data-name="Image" type="file" name="userfile">
                                            </div>
                                            <input type="hidden" name="form[Image]" value="">
                                            <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                                                <?php if ($obj->Image): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= UP . $obj->Image ?>"
                                                                 class="thumbnail img-responsive" alt=""/>

                                                            <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                <a style="color: white"
                                                                   href="<?= UP . $obj->Image ?>"
                                                                   class="fa fa-search-plus pull-right btn  btn-success">
                                                                </a>
                                                                <input
                                                                    type="hidden" name="form[Image]"
                                                                    value="<?= $obj->Image ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>

                                            <?= form_error('form[Image]') ?>

                                        </div>


                                        <div class="col-lg-6" style="display:none ">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="description">Short Description</label>
                                                    <textarea rows="5" name="form[ShortDescription]"
                                                              class="form-control"><?= $obj->ShortDescription ?></textarea>
                                                    <?= form_error('form[ShortDescription]') ?>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="col-lg-12" style="display:none ">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" name="form[Description]"
                                                          class="form-control"><?= $obj->Description ?></textarea>
                                                <?= form_error('form[Description]') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>



                    <button class="btn btn-success pull-right"> Save</button>

                    <?= form_close() ?>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container -->

</div>
<!-- content -->

</div>
<!-- End content-page -->

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->view('includes/footer_start.php') ?>
<!-- extra js start -->
<!-- multiupload -->
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
<!-- magnific popup -->

<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>

<script>

    $(function () {
        CKEDITOR.replace('description');
        image_upload.init();
        image_upload.default_image();
    });

    image_upload = {
        init: function () {
            if ($("#image_upload").length) {
                var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
                    var a = $(this), i = a.data();
                    a.off("click").text("Abort").on("click", function () {
                        a.remove(), i.abort()
                    }), i.submit().always(function () {
                        a.remove()
                    }), e.preventDefault()
                });
                $("#image_upload").fileupload({
                    url: URL.base + CONTROLLER + "/do_upload_adz/",
                    dataType: "json",
                    autoUpload: !1,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5e6,
                    disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: !0
                }).on("fileuploadsubmit", function (e, a) {
                    var i = $("#image_upload");
                    return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
                }).on("fileuploadadd", function (a, i) {
                    i.context = $("<li/>").appendTo("#img_grid_upload"), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(i.files, function (a, o) {
                        var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  '), n = $('<div class="upload_img_single thumbnail" />').append(t);
                        a || t.append(e.clone(!0).data(i)), n.appendTo(i.context)
                    })
                }).on("fileuploadprocessalways", function (e, a) {
                    var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
                    o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
                }).on("fileuploadprogressall", function (e, a) {
                    $("#upload_progress").addClass("show_progress");
                    var i = parseInt(a.loaded / a.total * 100, 10);
                    $("#upload_progress div").width(i + "%").html(i + "%");
                    100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).on("fileuploaddone", function (e, a) {
                    $.each(a.result.files, function (e, i) {
                        i.url ? $(a.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success">  Upload success <input type="hidden" name="image[]" value="' + i.name + '" > </div>') : i.error && $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(i.error))
                    })
                }).on("fileuploadfail", function (e, a) {
                    $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
                        $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                    }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
            }
        }, remove: function (e) {
            confirm("Do you want to remove this file ") && e.closest("li").remove()
        },
        default_image: function () {
            var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
                var a = $(this), i = a.data();
                a.off("click").text("Abort").on("click", function () {
                    a.remove(), i.abort()
                }), i.submit().always(function () {
                    a.remove()
                }), e.preventDefault()
            }), a = null;
            $(".image_upload").click(function () {
                a = $(this)
            }).fileupload({
                url: URL.base + CONTROLLER + "/do_upload_adz/",
                dataType: "json",
                autoUpload: !1,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5e6,
                disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                previewMaxWidth: 220,
                previewMaxHeight: 220,
                previewCrop: !0
            }).on("fileuploadsubmit", function (e, a) {
                var i = $(".image_upload");
                return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
            }).on("fileuploadadd", function (i, o) {
                $(a.data("for")).html(" "), o.context = $("<li/>").appendTo(a.data("for")), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(o.files, function (a, i) {
                    var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> '), n = $('<div class="upload_img_single thumbnail" />').append(t);
                    a || t.append(e.clone(!0).data(o)), n.appendTo(o.context)
                })
            }).on("fileuploadprocessalways", function (e, a) {
                var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
                o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
            }).on("fileuploadprogressall", function (e, a) {
                $("#upload_progress").addClass("show_progress");
                var i = parseInt(a.loaded / a.total * 100, 10);
                $("#upload_progress div").width(i + "%").html(i + "%");
                100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).on("fileuploaddone", function (e, i) {
                $.each(i.result.files, function (e, o) {
                    o.url ? $(i.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success">Upload success <br/><input type="hidden" name="form[' + a.data("name") + ']" value="' + o.name + '" > </div>') : o.error && $(i.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error))
                })
            }).on("fileuploadfail", function (e, a) {
                $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
                    $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
        }
    }
</script>

<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>