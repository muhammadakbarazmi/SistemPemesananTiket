    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html " class="logo">
                            Wisata Bukit Tinggi
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}" class=>Home</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/#testimonials') }}"class=>Pemesanan</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/Pembayaran') }}"class=>Pembayaran</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/Tiket') }}"class=>Cetak Tiket</a></li>
                            @if (Session::get('loginPelanggan') == True)
                                <li class="submenu"><a href="javascript:;">&emsp;&emsp;{{Session::get('nama_pelanggan')}}</a>
                                    <ul>
                                        <li><a href="{{url('/Profil')}}">Profil</a></li>
                                        <li><a href="{{url('/Logout')}}">Logout</a></li>
                                    </ul>
                                </li>   
                            @else
                                <li class="scroll-to-section"> <a href="{{ url('/Login') }}"> Masuk</a></li>
                                <li class="scroll-to-section "><a href="{{ url('/admin/LoginAdmin')}}"> Admin</a></li>
                            @endif
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

