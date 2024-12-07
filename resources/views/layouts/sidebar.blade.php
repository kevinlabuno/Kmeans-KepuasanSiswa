<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
            <!--<li class="nav-heading" style="color: black;">Perhitungan K-Means</li>-->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('beranda')}}">
          <i class="bi bi-card-heading"></i>
          <span>Beranda</span>
        </a>
      </li>
      
            @if (Auth::user()->jabatan == 'Staf');


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('input')}}">
          <i class="bi bi-arrow-down-up"></i>
          <span>Input Data Siswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('hasil')}}">
          <i class="bi bi-arrow-down-up"></i>
          <span>Hasil Input Data Siswa</span>
        </a>
      </li>
      
            @endif
      
      @if (Auth::user()->jabatan == 'Staf');
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dataguru')}}">
          <i class="bi bi-calendar3-fill"></i>
          <span>Data Guru</span>
        </a>
      </li>
      @endif
      
       @if (Auth::user()->jabatan == 'Staf' || Auth::user()->jabatan == 'Guru');
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('datasiswa')}}">
          <i class="bi bi-calendar2"></i>
          <span>Data Siswa</span>
        </a>
      </li>
      @endif
      
      @if (Auth::user()->jabatan == 'Staf' || Auth::user()->jabatan == 'Guru');
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('kelas.index')}}">
          <i class="bi bi-file"></i>
          <span>Daftar Kelas</span>
        </a>
      </li>
      @endif
      
      
      @if (Auth::user()->jabatan == 'Staf');

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('algoritma')}}">
          <i class="bi bi-book"></i>
          <span>Algoritma</span>
        </a>
      </li>
      
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('upload')}}">
          <i class="bi bi-union"></i>
          <span>Unggah Dataset</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dataset')}}">
          <i class="bi bi-gear"></i>
          <span>Perhitungan</span>
        </a>
      </li>
      @endif
    </ul>

  </aside>