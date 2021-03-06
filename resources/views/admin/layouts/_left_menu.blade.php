<ul id="menu" class="page-sidebar-menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Beranda</span>
        </a>
    </li>

    <li {!! (Request::is('home/users') || Request::is('home/users/create') || Request::is('home/users/*') || Request::is('home/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">User Profile</span>
            <span class="fa arrow"></span>
        </a>


        <ul class="sub-menu">

            <li {!! ((Request::is('home/users/*')) && !(Request::is('home/users/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::route('users.show', $iduser ) }}">
                    <i class="fa fa-angle-double-right"></i>
                    Profile Saya
                </a>
            </li>

        @role(['Admin','Guru'])
            <li {!! (Request::is('home/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('home/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Daftar Users
                </a>
            </li>
        
        @endrole
        
    </ul>


    </li>

@role(['Admin','Guru'])
    <li {!! (Request::is('home/siswa') || Request::is('home/kelas') || Request::is('home/siswa/create') || Request::is('home/siswa/*') || Request::is('home/siswa') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="box" data-size="18" "
               data-loop="true"></i>
            <span class="title">Data Siswa</span>
            <span class="fa arrow"></span>
        </a>

        <ul class="sub-menu">
            <li {!! ((Request::is('home/siswa')) && !(Request::is('home/siswa/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ route('listsiswa') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Daftar Siswa
                </a>
            </li>

        
            <li {!! (Request::is('home/kelas') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('home/kelas') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Daftar Kelas
                </a>
            </li>
        </ul>


    </li>

@endrole

    <li {!! (Request::is('home/mapel') || Request::is('home/nilai') || Request::is('home/mapel/create') || Request::is('home/mapel/*') || Request::is('home/mapel') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="inbox" data-size="18" "
               data-loop="true"></i>
            <span class="title">Data Nilai</span>
            <span class="fa arrow"></span>
        </a>


        <ul class="sub-menu">
@role(['Admin','Guru'])
            <li {!! ((Request::is('home/mapel')) && !(Request::is('home/mapel/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ route('listmapel') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Mata Pelajaran
                </a>
            </li>




            <li {!! (Request::is('home/nilai') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ route('lihatnilai') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Nilai Siswa
                </a>
            </li>

@endrole


@role(['Siswa'])
            <li {!! (Request::is('home/nilai') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ route('lihatnilaisiswa') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Lihat Nilai
                </a>
            </li>

@endrole
        </ul>


    </li>




     <li {!! (Request::is('home/info') || Request::is('home/nilai') || Request::is('home/info/create') || Request::is('home/info/*') || Request::is('home/info') ? 'class="active"' : '') !!}>
        <a href="/home">
            <i class="livicon" data-name="paper-plane" data-size="18" "
               data-loop="true"></i>
            <span class="title">Informasi</span>
            <span class="fa arrow"></span>
        </a>
    </li>


    <li {!! (Request::is('home/absen') || Request::is('home/absen') || Request::is('home/absen/create') || Request::is('home/absen/*') || Request::is('home/absen') ? 'class="active"' : '') !!}>
        <a href="{{ route('absen') }} ">
            <i class="livicon" data-name="calendar" data-size="18" "
               data-loop="true"></i>
            <span class="title">Absensi</span>
            <span class="fa arrow"></span>
        </a>
    </li>



@include('admin/layouts/menu')
</ul>