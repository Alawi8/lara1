

@if(@isset($posts))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                @foreach($posts as $post)
                    var deleteForm{{$loop->index}} = document.getElementById('deleteForm{{$loop->index}}');
        
                    deleteForm{{$loop->index}}.addEventListener('submit', function (event) {
                        event.preventDefault(); // تجنب إرسال النموذج مباشرة
        
                        // استخدام confirm لعرض رسالة تأكيد
                        var isConfirmed = confirm('هل أنت متأكد أنك تريد حذف المقال؟');
        
                        if (isConfirmed) {
                            // إذا تم تأكيد الحذف، قم بإرسال النموذج
                            deleteForm{{$loop->index}}.submit();
                        } else {
                            // إذا تم إلغاء الحذف، لا تقم بفعل أي شيء
                        }
                    });
                @endforeach
            });

        </script>
        
@endif
