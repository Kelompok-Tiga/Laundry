@extends('master')
@section('content')
    <section id="crudsiswa">
        <div class="card-head">
            <div class="container text-white">
                <div style="font-size: 15px; padding-top: 14px;" >
                    <i class="fas fa-file pr-2" style="font-size: 15px;"></i> <span>Laporan</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container">
                <div class="form-group mt-3">
                    <form action="{{ route('laporan.filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="date" name="min" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input type="date" name="max" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Filter</button>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('laporan.pdf') }}" class="btn btn-danger text-white"><i class="fa fa-file-pdf pr-2"></i>Print PDF</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive mt-2">
                  <table class="table table-bordered mt-2 table-hover">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">NO</th>
                          <th scope="col">TANGGAL</th>
                          <th scope="col">TOTAL PESANAN</th>
                          <th scope="col">TOTAL PENDAPATAN</th>
                          {{-- <th scope="col">ACTION</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @for ($i = 0; $i < count($transaksi); $i++)
                            <tr>
                            <td >{{ $i+1 }}</td>
                            <td>{{ Carbon\Carbon::parse($transaksi[$i]['tgl'])->isoFormat("D MMMM Y") }}</td>
                            <td>{{ $transaksi[$i]['jumlah'] }}</td>
                            <td>Rp. {{ number_format($transaksi[$i]['total']) }}</td>
                            
                            </tr>
                        @endfor --}}
                        {{-- {{ dd($transaksi) }} --}}
                        @foreach ($transaksi as $id =>$item)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>{{ Carbon\Carbon::parse($item->tgl)->isoFormat("D MMMM Y")  }}</td> 
                                @foreach ($jumlah as $i)
                                    <td>{{ $i }}</td> 
                                    {{ dd($jumlah[1]) }}
                                @endforeach
                                <td>{{ $item->total }}</td> 
                            </tr>
                        @endforeach
                         <tr>
                            <td colspan="3">Total</td>
                            <td>Rp. {{ number_format($total) }}</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-left">
                    
                        {{-- {{ $outlet->links() }} --}}
                    
                </div>
            </div>
            
        </div>
        
    </section>
@endsection