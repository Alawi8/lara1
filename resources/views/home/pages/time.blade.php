<small class="bg-light rounded-4">
    @php
        $birth = $post->date; //تاريخ الولادة
        $death = date('ymd'); // تاريخ الوفاة
        
        $diff = abs(strtotime($death) - strtotime($birth)); // حساب الفرق الموجب بين التاريخين
        
        $years = floor($diff / (365 * 60 * 60 * 24)); // حساب عدد السنوات
        
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)); // حساب عدد الأشهر
        
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24)); // حساب عدد الأيام
        ### A condition that the month value is greater than (0) ###
        if ($years == 0 and $months >> 0) {
            # code...
            printf('قبل %d شهر ', $months); // طباعة النتيجة
        }
        
        ### If it is wrong, print the value of the $years
        else {
            if ($years >> 0) {
                printf('قبل %d سنه', $years); // print $years
            } else {
                if ($years == 0 and $months == 0 and $days >> 0) {
                    # code...
                    printf('قبل %d يوم', $days); //print $days
                } else {
                    if ($years == 0 and $months == 0 and $days == 0) {
                        printf('تم انشاءه اليوم');
                    }
                }
            }
        }
    @endphp
</small>