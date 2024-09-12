@extends('layout/template')
@section('konten')
      <!-- START DATA -->

        <div class="overlay"></div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url("mahasiswa/create") }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item) 
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                                <a href='{{ url("mahasiswa/" .$item->nim. "/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                                
                                <form class="d-inline" onsubmit="return confirm('Apakah anda yakin akan menghapus data?')" action="{{ url('mahasiswa/'.$item->nim) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>

                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach

                    </tbody>
                </table>
                {{$data->withQueryString()->links() }}
               
          </div>

          <div id="btn-set-bg">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
        </div>
        <div id="set-bg">
            <div class="top-set-bg">
                <span>Klik pada Gambar</span>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
            </div>
            <div class="main-set-bg">
                <div id="img-1" class="img-set">
                    <img src="{{asset('assets/thumb-forest.jpg')}}" alt="thumb-forest.jpg" data-bg="{{ asset('assets/ori-forest.jpg') }}">
                </div>
                <div id="img-2" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-3" class="img-set">
                    <img src="{{asset('assets/thumb-forest.jpg')}}" alt="thumb-forest.jpg" data-bg="{{ asset('assets/ori-forest.jpg') }}">
                </div>
                <div id="img-4" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-5" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-6" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-7" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-8" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-9" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
                <div id="img-4" class="img-set">
                    <img src="{{asset('assets/thumb-sea.jpg')}}" alt="thumb-sea.jpg" data-bg="{{ asset('assets/ori-sea.jpg') }}">
                </div>
            </div>
        </div>
          <!-- AKHIR DATA -->
          <!-- SCRIPT SEMENTARA -->

        <script>
           const openMenu = document.getElementById('btn-set-bg');
           const menu = document.getElementById('set-bg');
           const images = document.querySelectorAll('.img-set img');
           const closeMenu = document.querySelector('.top-set-bg svg');

           openMenu.addEventListener('click', () => {
            menu.style.display = 'block';
           })

           closeMenu.addEventListener('click', () =>{
            menu.style.display= 'none';
           })

           images.forEach(image => {
            image.addEventListener('click', () => {
                const bgImage = image.getAttribute('data-bg');
                document.body.style.backgroundImage = `url('${bgImage}')`;
            })
           })
        </script>

@endsection
