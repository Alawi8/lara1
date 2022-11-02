<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tiny.cloud/1/o2wqsytvil98ae0qjcry4lnm7zds4uo18ct741ewklyrmta5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body>
    <textarea name="content" id="textarea">
    
  </textarea>
    <script>
        tinymce.init({
            selector: '#textarea',
            language: 'ar',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo  | bold italic underline strikethrough | link image media table mergetags |  code | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
        });
    </script>
    <small id="helpId" class="form-text text-muted">هنا محتوى المقاله </small>
</body>

</html>