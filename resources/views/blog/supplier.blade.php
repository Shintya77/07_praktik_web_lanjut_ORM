@extends('layouts.master')
@section('content')
<!-- search area -->
<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


	<!-- tabel daftar Supplier -->
	
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Daftar <span class="orange-text">Supplier</span></h3>
						<p>Berikut merupakan daftar supplier tetap</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="daftar suplier">
      <div class="container">
        <div class="row">
          <table class="table table-bordered">
		        <thead>
			        <tr>
              		  <th>id</th>
					  <th>Nomor</th>
				      <th>Nama</th>
				      <th>Alamat</th>
					  <th>Telepon</th>		
			        </tr>
		        </thead>
		        <tbody>
            @foreach($isi as $s)
			        <tr>
					  <td>{{ $s->id }}</td>
					  <td>{{ $s->Nomor }}</td>
				      <td>{{ $s->Nama }}</td>
              		  <td>{{ $s->Alamat }}</td>
              		  <td>{{ $s->Telepon }}</td>
			        </tr>
            @endforeach
		        </tbody>
	        </table>
        </div>
    </div>
</div>
<!-- end tabel daftar Supplier -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection