@extends('dash.layouts.header')
@section('title')
    تعديل المقالة
@endsection
@section('content')

    <head>
        <!-- يمكنك ترك العناصر الرأسية كما هي -->
        <!-- ... -->
        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>

    </head>
    <!-- يمكنك ترك أي أنماط CSS أو أي عناصر HTML كما هي -->

    <div class="row">
        <div class="col-12">
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body col-12">
                    <div class="row">

                        <form class="needs-validation" novalidate action="{{ route('pages.update', $edit->id) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- يُستخدم لتحديد طريقة الطلب -->
                            <!-- ... إدخال الحقول الحالية مع القيم الحالية لكل حقل -->
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">العنوان</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="firstName" name="title" value="{{ $edit->title }}" required>
                                    <!-- ... -->
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">الوصف</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                        id="lastName" name="description" placeholder="" value="{{ $edit->description }}">
                                    <!-- ... -->
                                </div>

                                <hr class="my-4">

                                <div class="form-control @error('content') is-invalid @enderror" >
                                    <textarea name="content" id="editor" rows="25" class="form-control @error('content') is-invalid @enderror">{{ $edit->content }}</textarea>
                                    <!-- ... -->
                                </div>

                                <script>
                                    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                                        toolbar: {
                                            items: [
                                                '|',
                                                'findAndReplace', '|',
                                                'heading', '|',
                                                'bold', '|',
                                                'bulletedList', 'numberedList', 'todoList', '|',
                                                '|',
                                                'undo', 'redo',
                                                'fontSize', 'fontColor', 'highlight', '|',
                                                'alignment', '|',
                                                'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', '|', 'sourceEditing'
                                            ],
                                            shouldNotGroupWhenFull: true
                                        },
                                        // Changing the language of the interface requires loading the language file using the <script> tag.
                                        // language: 'es',
                                        list: {
                                            properties: {
                                                styles: true,
                                                startIndex: true,
                                                reversed: true
                                            }
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                                        heading: {
                                            options: [{
                                                    model: 'paragraph',
                                                    title: 'Paragraph',
                                                    class: 'ck-heading_paragraph'
                                                },
                                                {
                                                    model: 'heading1',
                                                    view: 'h1',
                                                    title: 'Heading 1',
                                                    class: 'ck-heading_heading1'
                                                },
                                                {
                                                    model: 'heading2',
                                                    view: 'h2',
                                                    title: 'Heading 2',
                                                    class: 'ck-heading_heading2'
                                                },
                                                {
                                                    model: 'heading3',
                                                    view: 'h3',
                                                    title: 'Heading 3',
                                                    class: 'ck-heading_heading3'
                                                },
                                                {
                                                    model: 'heading4',
                                                    view: 'h4',
                                                    title: 'Heading 4',
                                                    class: 'ck-heading_heading4'
                                                },
                                                {
                                                    model: 'heading5',
                                                    view: 'h5',
                                                    title: 'Heading 5',
                                                    class: 'ck-heading_heading5'
                                                },
                                                {
                                                    model: 'heading6',
                                                    view: 'h6',
                                                    title: 'Heading 6',
                                                    class: 'ck-heading_heading6'
                                                }
                                            ]
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                                        placeholder: 'Welcome to meshcah',
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                                        fontFamily: {
                                            options: [
                                                'default',
                                                'Arial, Helvetica, sans-serif',
                                                'Courier New, Courier, monospace',
                                                'Georgia, serif',
                                                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                                'Tahoma, Geneva, sans-serif',
                                                'Times New Roman, Times, serif',
                                                'Trebuchet MS, Helvetica, sans-serif',
                                                'Verdana, Geneva, sans-serif'
                                            ],
                                            supportAllValues: true
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                                        fontSize: {
                                            options: [10, 12, 14, 'default', 18, 20, 22],
                                            supportAllValues: true
                                        },
                                        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                                        htmlSupport: {
                                            allow: [{
                                                name: /.*/,
                                                attributes: true,
                                                classes: true,
                                                styles: true
                                            }]
                                        },
                                        // Be careful with enabling previews
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                                        htmlEmbed: {
                                            showPreviews: true
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                                        link: {
                                            decorators: {
                                                addTargetToExternalLinks: true,
                                                defaultProtocol: 'https://',
                                                toggleDownloadable: {
                                                    mode: 'manual',
                                                    label: 'Downloadable',
                                                    attributes: {
                                                        download: 'file'
                                                    }
                                                }
                                            }
                                        },
                                        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                                        mention: {
                                            feeds: [{
                                                marker: '@',
                                                feed: [
                                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                                                    '@chocolate', '@cookie', '@cotton', '@cream',
                                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                                                    '@gummi', '@ice', '@jelly-o',
                                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                                                    '@sesame', '@snaps', '@soufflé',
                                                    '@sugar', '@sweet', '@topping', '@wafer'
                                                ],
                                                minimumCharacters: 1
                                            }]
                                        },
                                        // The "super-build" contains more premium features that require additional configuration, disable them below.
                                        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                                        removePlugins: [
                                            // These two are commercial, but you can try them out without registering to a trial.
                                            // 'ExportPdf',
                                            // 'ExportWord',
                                            'AIAssistant',
                                            'CKBox',
                                            'CKFinder',
                                            'EasyImage',
                                            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                                            // Storing images as Base64 is usually a very bad idea.
                                            // Replace it on production website with other solutions:
                                            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                                            // 'Base64UploadAdapter',
                                            'RealTimeCollaborativeComments',
                                            'RealTimeCollaborativeTrackChanges',
                                            'RealTimeCollaborativeRevisionHistory',
                                            'PresenceList',
                                            'Comments',
                                            'TrackChanges',
                                            'TrackChangesData',
                                            'RevisionHistory',
                                            'Pagination',
                                            'WProofreader',
                                            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                                            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                                            'MathType',
                                            // The following features are part of the Productivity Pack and require additional license.
                                            'SlashCommand',
                                            'Template',
                                            'DocumentOutline',
                                            'FormatPainter',
                                            'TableOfContents',
                                            'PasteFromOfficeEnhanced'
                                        ]
                                    });
                                </script>
                                <button class="w-100 btn btn-primary btn-lg" type="submit">حفظ التغييرات</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
