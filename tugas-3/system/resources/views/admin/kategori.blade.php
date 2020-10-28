@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">


			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">JAM TANGAN ALEXANDRE CHRISTIE AC 9205 / 9205MC ORIGINAL & BERGARANSI</h5>
			        <p class="card-text text-muted"> Jam tangan yang cocok untuk melengkapi fashionmu tidak cuma itu juga jam tangan ini 100% Original.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lihat Semua Barang</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">THRASHER FLAME LOGO TEE BLACK ORIGINAL </h5>
			        <p class="card-text text-muted">Baju ini cocok untuk melengkapi style fashion kamu lho. Yuk buruan mampir dan yang terpenting Original 100%</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lihat Semua Barang</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Bag MICHAEL KORS Tote Black Original</h5>
			        <p class="card-text text-muted">Tas lucu yang melengkapi fashionmu dan tas yang mewah ini cukup banyak digemari karena barangnya Original. Yuk buruan sebelum kehabisan.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lihat Semua Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Sepatu Ventela High</h5>
			        <p class="card-text text-muted">Sepatu yang lagu trend di masa sekarang dan harga bersahabat dong yuk buruan diborong. </p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lihat Semua Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection