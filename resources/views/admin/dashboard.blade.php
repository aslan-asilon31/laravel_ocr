@extends('../layouts/master')

@section('title','Dashboard')
@section('content')

<style>
    #content-header-first{
        display:none;
    }
    #processing-option{
        display:none;
    }
</style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- Overall Performance Metric -->
            <div class="col-lg-3 col-5">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$ktps->count()}}</h3>
                        <p>KTP</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                </div>
            </div>
            <!-- Demographics (Ijasah) -->
            <div class="col-lg-2 col-5">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$certificates->count()}}</h3>
                        <p>Ijasah</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <!-- Tax Invoices (Faktur Pajak) -->
            <div class="col-lg-3 col-5 text-white">
                <div class="small-box bg-warning text-white">
                    <div class="inner text-white">
                        <h3 class="text-white">{{$academics->count()}}</h3>
                        <p>Transcript Nilai</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
            <!-- Certificates Issued (Ijazah) -->
            <div class="col-lg-2 col-5">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$taxes->count()}}</h3>
                        <p>Tax PPN</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                </div>
            </div>
            <!-- Purchase Order -->
            <div class="col-lg-2 col-5">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>{{$purchases->count()}}</h3>
                        <p>Purchase Order</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                </div>
            </div>
        </div>

      
        <!-- /.row -->
        <!-- Main row -->
         
        <div class="row ">
            <section class="col-lg-12 ">
                <div class="d-flex" style="justify-content: space-between;">
    
                <div class="form-group mr-5">
                <div class="input-group">
                    <input type="date" class="form-control float-right" id="reservation" value="2024-07-01"> <span class="ml-2 mr-2 mt-1 ">To</span>
                    <input type="date" class="form-control float-right" id="" value="2024-07-30">
                </div>
                </div>
    
                <div class="form-group">
                <select class="form-control">
                    <option selected>Day</option>
                    <option>Week</option>
                    <option>Month</option>
                    <option>Year</option>
                </select>
                </div> 
                </div>
            </section>
        </div>


        <div class="row">

          <section class="col-lg-12 connectedSortable">
            <div class="card" style="overflow-x: auto; overflow-y: auto; width: 100%;">
              <div class="card-header">
                <h3 class="card-title">KTP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example3" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>File</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Golongan Darah</th>
                        <th>Alamat</th>
                        <th>RT/RW</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Provinsi</th>
                        <th>Agama</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Kewarganegaraan</th>
                        <th>Berlaku Hingga</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @forelse($ktps as $ktp) 
                  <tr>
                  <td>
                            <!-- Link to download the PDF file -->
                            <a href="{{ asset('scan/ktp/' . $ktp->image) }}" target="_blank">
                                Download / lihat file
                            </a>
                        </td>
                        <td>{{ $ktp->nama }}</td>
                        <td>{{ $ktp->nik }}</td>
                        <td>{{ $ktp->tempat_lahir }}</td>
                        <td>{{ \Carbon\Carbon::parse($ktp->tanggal_lahir)->isoFormat('dddd, D MMMM YYYY') }} </td>
                        <td>{{ $ktp->golongan_darah }}</td>
                        <td>{{ $ktp->alamat }}</td>
                        <td>{{ $ktp->rt_rw }}</td>
                        <td>{{ $ktp->kelurahan }}</td>
                        <td>{{ $ktp->kecamatan }}</td>
                        <td>{{ $ktp->kabupaten }}</td>
                        <td>{{ $ktp->provinsi }}</td>
                        <td>{{ $ktp->agama }}</td>
                        <td>{{ $ktp->status_perkawinan }}</td>
                        <td>{{ $ktp->pekerjaan }}</td>
                        <td>{{ $ktp->kewarganegaraan }}</td>
                        <td>{{ $ktp->berlaku_hingga }} </td>
                        <td>{{ \Carbon\Carbon::parse($ktp->created_at)->isoFormat('dddd, D MMMM YYYY') }}</td>

                  </tr>
                  @empty
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  @endforelse()

                  </tbody>
                  <tfoot>
                  <tr>
                        <th>File</th>

                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Golongan Darah</th>
                        <th>Alamat</th>
                        <th>RT/RW</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Provinsi</th>
                        <th>Agama</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Kewarganegaraan</th>
                        <th>Berlaku Hingga</th>
                        <th>Tanggal Scan</th>

                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-12 connectedSortable">
            <div class="card" style="overflow-x: auto; overflow-y: auto; width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Ijasah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example4" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>File</th>

                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Nama Universitas</th>
                        <th>Gelar</th>
                        <th>Jurusan</th>
                        <th>Status</th>
                        <th>Ijasah / SKL</th>
                        <th>Jabatan Penandatanganan</th>
                        <th>Tanggal</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($certificates as $certificate)
                  <tr>
                  <td>
                            <!-- Link to download the PDF file -->
                            <a href="{{ asset('scan/certificate/' . $certificate->image) }}" target="_blank">
                                Download / lihat file
                            </a>
                        </td>
                        <td>{{ $certificate->nama }}</td>
                        <td>{{ $certificate->nim }}</td>
                        <td>{{ $certificate->nama_universitas }}</td>
                        <td>{{ $certificate->gelar }}</td>
                        <td>{{ $certificate->jurusan }}</td>
                        <td>{{ $certificate->status }}</td>
                        <td>{{ $certificate->ijazah_atau_skl }}</td>
                        <td>{{ $certificate->jabatan_penandatangan }}</td>
                        <td>{{ \Carbon\Carbon::parse($certificate->tanggal_tahun_lulus)->isoFormat('dddd, D MMMM YYYY') }}</td>
                        <td>{{ \Carbon\Carbon::parse($certificate->created_at)->isoFormat('dddd, D MMMM YYYY') }}</td>

                    </tr>
                  @empty 
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>File</th>

                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Nama Universitas</th>
                        <th>Gelar</th>
                        <th>Jurusan</th>
                        <th>Status</th>
                        <th>Ijasah / SKL</th>
                        <th>Jabatan Penandatanganan</th>
                        <th>Tanggal</th>
                        <th>Tanggal Scan</th>

                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-12 connectedSortable">
            <div class="card" style="overflow-x: auto; overflow-y: auto; width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Transcript Nilai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example5" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>File</th>

                        <th>Nama Universitas</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Gelar</th>
                        <th>IPK</th>
                        <th>Nama Fakultas</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($academics as $academic)
                    <tr>
                    <td>
                            <!-- Link to download the PDF file -->
                            <a href="{{ asset('scan/academic-transcript/' . $academic->image) }}" target="_blank">
                                Download / lihat file
                            </a>
                        </td>
                        <td>{{ $academic->universitas }}</td>
                        <td>{{ $academic->nim }}</td>
                        <td>{{ $academic->nama }}</td>
                        <td>{{ $academic->jurusan_studi }}</td>
                        <td>{{ $academic->jenjang_gelar }}</td>
                        <td>{{ $academic->ipk !== null ? number_format($academic->ipk, 2) : '-' }}</td>
                        <td>{{ $academic->fakultas }}</td>
                        <td>{{ \Carbon\Carbon::parse($academic->created_at)->isoFormat('dddd, D MMMM YYYY') }}</td>

                    </tr>
                  @empty 
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>File</th>

                        <th>Nama Universitas</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Gelar</th>
                        <th>IPK</th>
                        <th>Nama Fakultas</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-12 connectedSortable">
            <div class="card" style="overflow-x: auto; overflow-y: auto; width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Tax PPN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example6" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>File</th>

                        <th>Nomor Faktur</th>
                        <th>Tanggal Faktur</th>
                        <th>NPWP Penjual</th>
                        <th>Nama Penjual</th>
                        <th>Alamat Penjual</th>
                        <th>No NPWP Lawan Transaksi</th>
                        <th>Alamat Lawan Transaksi</th>
                        <th>Harga Total</th>
                        <th>Diskon</th>
                        <th>DPP</th>
                        <th>PPN</th>
                        <th>PPnBM</th>
                        <th>Referensi</th>
                        <th>URL</th>
                        <th>Deskripsi Item</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($taxes as $tax)
                  <tr>
                  <td>
                            <!-- Link to download the PDF file -->
                            <a href="{{ asset('scan/tax/' . $tax->image) }}" target="_blank">
                                Download / lihat file
                            </a>
                        </td>
                        <td>{{ $tax->no_faktur_pajak }}</td>
                        <td>{{ \Carbon\Carbon::parse($tax->tanggal_faktur_pajak)->isoFormat('dddd, D MMMM YYYY') }}</td>
                        <td>{{ $tax->npwp_penjual }}</td>
                        <td>{{ $tax->nama_penjual }}</td>
                        <td>{{ $tax->alamat_penjual }}</td>
                        <td>{{ $tax->no_npwp_lawan_transaksi }}</td>
                        <td>{{ $tax->alamat_lawan_transaksi }}</td>
                        <td>{{ $tax->harga_total !== null ? number_format($tax->harga_total, 2) : '-' }}</td>
                        <td>{{ $tax->diskon !== null ? number_format($tax->diskon, 2) : '-' }}</td>
                        <td>{{ $tax->dpp !== null ? number_format($tax->dpp, 2) : '-' }}</td>
                        <td>{{ $tax->ppn !== null ? number_format($tax->ppn, 2) : '-' }}</td>
                        <td>{{ $tax->ppnbm !== null ? number_format($tax->ppnbm, 2) : '-' }}</td>
                        <td>{{ $tax->referensi }}</td>
                        <td>{{ $tax->url }}</td>
                        <td>{{ $tax->deskripsi_item }}</td>
                        <td>{{ \Carbon\Carbon::parse($tax->created_at)->isoFormat('dddd, D MMMM YYYY') }}</td>

                    </tr>
                  @empty 
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>File</th>

                        <th>Nomor Faktur</th>
                        <th>Tanggal Faktur</th>
                        <th>NPWP Penjual</th>
                        <th>Nama Penjual</th>
                        <th>Alamat Penjual</th>
                        <th>No NPWP Lawan Transaksi</th>
                        <th>Alamat Lawan Transaksi</th>
                        <th>Harga Total</th>
                        <th>Diskon</th>
                        <th>DPP</th>
                        <th>PPN</th>
                        <th>PPnBM</th>
                        <th>Referensi</th>
                        <th>URL</th>
                        <th>Deskripsi Item</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-12 connectedSortable">
            <div class="card" style="overflow-x: auto; overflow-y: auto; width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Purchase Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example7" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>File</th>

                            <th>Nama Vendor</th>
                            <th>No Invoice</th>
                            <th>Tanggal Invoice</th>
                            <th>Periode</th>
                            <th>No Kontrak</th>
                            <th>DPP</th>
                            <th>Tax</th>
                            <th>Total</th>
                            <th>Type Tax</th>
                            <th>No Rek</th>
                            <th>Nama Rek</th>
                            <th>Nama Bank</th>
                            <th>Type Transaksi</th>
                            <th>Meterai</th>
                            <th>Nilai Meterai</th>
                            <th>Tanggal Scan</th>

                        </tr>
                  </thead>
                  <tbody>
                  @forelse($purchases as $purchase)
                  <tr>
                        <td>
                            <!-- Link to download the PDF file -->
                            <a href="{{ asset('scan/po/' . $purchase->image) }}" target="_blank">
                                Download / lihat file
                            </a>
                        </td>
                        <td>{{ $purchase->nama_vendor }}</td>
                        <td>{{ $purchase->no_invoice }}</td>
                        <td>{{ \Carbon\Carbon::parse($purchase->tanggal_invoice)->isoFormat('dddd, D MMMM YYYY') }}</td>
                        <td>{{ $purchase->periode }}</td>
                        <td>{{ $purchase->no_kontrak }}</td>
                        <td>{{ $purchase->dpp !== null ? number_format($purchase->dpp, 2) : '-' }}</td>
                        <td>{{ $purchase->tax !== null ? number_format($purchase->tax, 2) : '-' }}</td>
                        <td>{{ $purchase->total !== null ? number_format($purchase->total, 2) : '-' }}</td>
                        <td>{{ $purchase->type_tax }}</td>
                        <td>{{ $purchase->no_rek }}</td>
                        <td>{{ $purchase->nama_rek }}</td>
                        <td>{{ $purchase->nama_bank }}</td>
                        <td>{{ $purchase->type_transaksi }}</td>
                        <td>{{ $purchase->meterai }}</td>
                        <td>{{ $purchase->nilai_meterai !== null ? number_format($purchase->nilai_meterai, 2) : '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($purchase->created_at)->isoFormat('dddd, D MMMM YYYY') }}</td>

                    </tr>
                  @empty 
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>File</th>

                        <th>Nama Vendor</th>
                        <th>No Invoice</th>
                        <th>Tanggal Invoice</th>
                        <th>Periode</th>
                        <th>No Kontrak</th>
                        <th>DPP</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Type Tax</th>
                        <th>No Rek</th>
                        <th>Nama Rek</th>
                        <th>Nama Bank</th>
                        <th>Type Transaksi</th>
                        <th>Meterai</th>
                        <th>Nilai Meterai</th>
                        <th>Tanggal Scan</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

        </div>
       
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection