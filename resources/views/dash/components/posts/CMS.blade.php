<body>
    <textarea name="content" id="textarea" rows="25">
        {{ old('content') }}
  </textarea>
    <script>
        tinymce.init({
            selector: '#textarea',
            language: 'ar',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <small id="helpId" class="form-text text-muted">هنا محتوى المقاله </small>
</body>
