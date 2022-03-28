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
						<p>Get 24/7 Support</p>
						<h1>PEGAWAI</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="section-title">
						<h3>Daftar<span class="orange-text">Pegawai</span></h3>
						<h4>Berikut merupakan daftar Pegawai Kami</h4>
					</div>
				 	

					<table class="table table-bordered">
		        <thead>
			        <tr>
              
				      <th>id</th>
				      <th>NIK</th>
				      <th>Nama</th>	
					  <th>JK</th>
				      <th>Alamat</th>
				      <th>Level</th>
					  <th>Jabatan</th>
				      <th>Status</th>

            
			        </tr>
		        </thead>
		        <tbody>
            @foreach($isi as $s)
			        <tr>
				     
              <td>{{ $s->id }}</td>
			  <td>{{ $s->NIK }}</td>
              <td>{{ $s->Nama }}</td>
              <td>{{ $s->JK }}</td>
              <td>{{ $s->Alamat }}</td>
              <td>{{ $s->Level }}</td>
              <td>{{ $s->Jabatan }}</td>
              <td>{{ $s->Status }}</td>
			        </tr>
            @endforeach
		        </tbody>
	        </table>

				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	
	<!-- end google map section -->
@endsection