@extends('master')
@section('content')
    <section id="crudsiswa">
        <div class="card-head">
            <div class="container text-white">
                <div style="font-size: 15px; padding-top: 14px;" >
                    <i class="fas fa-users pr-2" style="font-size: 15px;"></i> <span>Data Pengguna</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container">
                <a href="{{route('pengguna.createpengguna')}}"><button class="btn mt-4 text-white" style="background-color:#3FC5F0;"><i class="fas fa-user-plus mr-1"></i> Tambah Data</button></a>
                {{-- <a href="{{route('crudsiswa.cetaksiswa')}}"><button class="btn btn-primary mt-4 text-white" ><i class="fas fa-file-pdf mr-1"></i> Print PDF</button></a> --}}
                <div class="table-responsive">
                  <table class="table table-bordered mt-2 table-hover">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">NO</th>
                          <th scope="col">PENGGUNA</th>
                          <th scope="col">EMAIL</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $usr)
                            
                        <tr>
                          <th scope="row" class="text-center">{{$loop->iteration}}</th>
                          <td>{{$usr->name}}</td>
                          <td>{{$usr->email}}</td>
                          {{-- <td>{{$usr->}}</td> --}}
                          <td class="text-center">
                            <form action="{{route('pengguna.delete',$usr->id)}}" method="POST" id="delete-{{ $usr->id }}">
                              @method('DELETE')
                              @csrf
                                {{-- <i class="fas fa-search text-primary"></i>&ensp;  --}}
                                <a href="{{ route('pengguna.editpengguna', [$usr->id]) }}">
                                  <i class="fas fa-edit " style="color: #f39c12"></i>&ensp;     
                                </a>
                                |&ensp;
                                <button type="button" class=" " style="border: none; background-color: transparent;"><i class="fas fa-trash text-danger" onclick="deleteRow( {{ $usr->id }} )"></i></button> 
                              </form>    
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-left">
                    
                        {{ $user->links() }}
                    
                </div>
            </div>
            
        </div>
        
    </section>
    <section id="crudsiswa">
        <div class="card-head">
            <div class="container text-white">
                <div style="font-size: 15px; padding-top: 14px;" >
                    <i class="fas fa-users pr-2" style="font-size: 15px;"></i> <span>Data Toko</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container">
                <a href="{{route('toko.createtoko')}}"><button class="btn mt-4 text-white" style="background-color:#3FC5F0;"><i class="fas fa-user-plus mr-1"></i> Tambah Data</button></a>
                {{-- <a href="{{route('crudsiswa.cetaksiswa')}}"><button class="btn btn-primary mt-4 text-white" ><i class="fas fa-file-pdf mr-1"></i> Print PDF</button></a> --}}
                <div class="table-responsive">
                  <table class="table table-bordered mt-2 table-hover">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">NO</th>
                          <th scope="col">PENGGUNA</th>
                          <th scope="col">EMAIL</th>
                          <th scope="col">ROLE</th>
                          <th scope="col">NAMA OUTLET</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($toko as $item)
                            
                        <tr>
                          <th scope="row" class="text-center">{{$loop->iteration}}</th>
                          <td>{{$item->name}}</td>    
                          <td>{{$item->email}}</td>
                          
                          <td>{{$item->role}}</td>
                          <td>{{ (!empty($item->outlets->nama)) ? $item->outlets->nama  : 'Tidak punya outlet' }}</td>
                         
                          {{-- <td></td> --}}
                          {{-- <td>{{$item->}}</td> --}}
                          <td class="text-center">
                            <form action="{{route('toko.delete',$item->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                                {{-- <i class="fas fa-search text-primary"></i>&ensp;  --}}
                                <a href="{{ route('toko.edittoko', [$item->id]) }}">
                                  <i class="fas fa-edit " style="color: #f39c12"></i>&ensp;     
                                </a>
                                |&ensp;
                                <button type="submit" class=" " style="border: none; background-color: transparent;"><i class="fas fa-trash text-danger"></i></button> 
                            </form>    
                          </td>
                        </tr>
                        @endforeach
                       
                        
                      </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-left">
                    
                        {{ $toko->links() }}
                    
                </div>
            </div>
            
        </div>
        
    </section>
@endsection
@section('confirm')
    <script>
        function deleteRow(id)
        {
            swal({
                title: "Yakin ingin menghapus Data Pengguna " + id + "?",
                type: "question",
                buttons: true,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin',
                cancelmButtonText: 'Batal',
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#delete-'+id).submit();
                    }
                });
        }
    </script>
@endsection