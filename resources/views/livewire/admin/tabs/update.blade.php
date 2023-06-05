@section('title','ساخت لیست')
<div>
    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form wire:submit.prevent="update" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">نام مقاله</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input wire:model.lazy="name"
                                                       type="text"
                                                       class="form-control"
                                                       placeholder="نام مقاله را وارد کنید">
                                            </div>
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-control-label">
                                        <label for="email_address_2">دسته بندی</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div wire:ignore class="form-line">
                                                <select wire:model="category">
                                                    <option value="" selected>گزینه خود را انتخاب کنید</option>
                                                    @foreach(\App\Models\Category::all() as $i)
                                                        <option value="{{$i->id}}">{{$i->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('category')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">توضیحات پست</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <div wire:ignore>
                                  <textarea required wire:model.lazy="description"
                                            class="min-h-fit h-48 "
                                            name="editor"
                                            id="myeditorinstance"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">ثبت</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('script')
    <script src="{{asset('admin/js/bundles/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('admin/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('admin/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('admin/tiny/tiny.js')}}" referrerpolicy="origin"></script>
    <script>

        var editor = tinymce.init({
            selector: 'textarea#myeditorinstance',
            language: 'fa',
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload/post-image',
            file_picker_types: 'image',
            file_picker_callback: function (cv, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    render.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {title: file.name});
                    };
                };
                input.click();
            },
            content_style:
                "@import url('fonts/iranyekan/woff/iranyekanwebthin.woff');",
            /* ... */
            font_formats:
                "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde;" +
                " Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier;" +
                " Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol;" +
                " Tahoma=tahoma,arial,yekan,helvetica,sans-serif; Terminal=terminal,monaco;" +
                " Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

            plugins: 'anchor code autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | code | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('description', editor.getContent());
                });
            }
        });
    </script>
@endpush
