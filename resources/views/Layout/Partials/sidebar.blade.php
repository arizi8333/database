<div id="sidenav">
  <a href="{{ route('Penduduk.index') }}"><b>Data Penduduk</b></a>
  <a href="{{ route('KartuKeluarga.index') }}"><b>Data Kartu Keluarga</b></a>
    <a class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Laporan</b></a>
    <div class="dropdown-menu" style="background-color : #111">
      <a class="dropdown" href="{{ route('Laporan.umur') }}">Berdasarkan Umur</a>
      <a class="dropdown" href="{{ route('Laporan.nagari') }}">Berdasarkan Nagari</a>
      <a class="dropdown" href="{{ route('Laporan.pendidikan') }}">Berdasarkan Pendidikan</a>
    </div>
</div>