@extends('dash.layouts.header')
@section('title')
    الوسائط
@endsection
@section('content')
    <main>


        <div class="album py-5 bg-light">
            <div class="container">
                @if (isset($arr))
                    @foreach ($arr as $media)
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="py-3" src="{{ $media->image_path }}" alt="">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            {{-- image card --}}
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow-sm">
                                                        <img class="py-3"
                                                            src="https://1.bp.blogspot.com/-I2e71wsJq0s/YOCN1W2i9XI/AAAAAAACIJ4/6aHzpf01Ee0sKN6briOkX3sfiRHtDDG8QCEwYBhgLKtQDABHVOhyKKs7ho0BGsfDH4I5vJ-8cP4pSBpxkJAqfoA2efPpHfWF9rpYxTVtxJNhcVK_ObE6ZabSKH23Jey_wLAqQDb4t-g4qbQcCyU-eUTnwn-pQygrc9PAqpF0PZeYK4jUC6iUQnXx_Kqxv2IcwZfnoEILZo6LUm9Co4_t_XSmU-5RMDNldBPuRjHI9lM-1MTsOEBYf-QuYwDDOJJRw5HruiustfNYXSpbe4GdTpKjd5G14nYJUcnahgw5g8rjztBuvTWSq-0M-T8DfIBC-ErShNx5QUObZx2012_Y1QLZD2L-imRJ8KTsfcTYB-szDR5m_qdaYX_fUPhhWzwEbH1Kum6tXvxyORsauK6W_yf821INc4wtwCNMKBTipnwaHNUcC2VZIH6Qf3VPaEROdJbOAFSPF_EfeXoa3WaK1kU4gaT72hoBe8hRGPqRa69RCW9ZVDMcqGV1B_t7UsFid1tBxNEvmB2W_DPBVo6bgHJsFvU2KyZR-t_obtX35yjDONIMWhDPhg0uua8_WhshbR7dLH_o1wOlgKSbvHBmbAXUNspcasJT2007SsuusbOaSzpQAGEjBWA2__3RkFXRKYdBVtD9OLJhRlMw6kmRM78VbyhJyMLiggocG/s800/00.jpg"
                                                            alt="">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end image card --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-light" role="alert">
                        عذرا لايوجد ملفات
                    </div>
                @endif
            </div>
        </div>

    </main>
@endsection
