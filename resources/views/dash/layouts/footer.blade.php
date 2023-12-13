        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('public/material/js/material-dashboard.min.js?v=3.0.4') }}"></script>

        <script src="{{ asset('public/assets/js/feather.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
            integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
        </script>
        {{-- icons admin  --}}
        <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
        {{-- icons dark and light --}}
        <script src="{{ asset('public/assets/js/bundle.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
            integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
        </script>
        {{-- <script src="dashboard.js"></script> --}}

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
