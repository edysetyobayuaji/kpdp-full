
@extends('layouts.app_web')

@section('content')   
		<header class="header-base">
			<div class="container" style="margin-top: 0px; opacity: 1;">
				<h1>{{$halaman}}</h1>
				<ol class="breadcrumb">
					<li><a href="https://www.krakatausteel.com/">Home</a></li>
					<li><a href="#">{{$halaman}}</a></li>
				</ol>
			</div>
		</header>
		<main id="main">
			
			<section class="section-base section-overflow-top" id="section">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="title">
								<p>{{$judul}}</p>
								
								
							</div>
							<p>dsdsds</p>
							@foreach($data as $data)
								<div class="col-lg-12">
									<div class="title-sub">
										<p>{{$data['name']}}</p>
										
										
									</div>
									<div class="isi-sub">
										<img src="{{link_gambar_produk($data['gambar'])}}" class="img-produk">
										<p>{!!$data['isi']!!}</p>
									</div>
								</div>
								
							@endforeach

						</div>
						<div class="col-lg-3 widget">
							<hr class="space visible-md">
							<form class="form-box">
								<div class="input-text-btn">
									<input class="input-text" type="text" placeholder="Search ..."><input type="submit" value="Search" class="btn">
								</div>
							</form>
							<hr class="space-sm">
							<h3>Our Work</h3>
							<hr class="space-xs">
							<div class="menu-inner menu-inner-vertical">
								<ul>
									@foreach(kategori_produk() as $kategori_produk)
									<li>
										<a href="{{url('produk?kategori='.$kategori_produk['id'])}}">{{$kategori_produk['name']}}</a>
									</li>
									@endforeach
									
										
								</ul>
							</div>
							<hr class="space-sm">
							<h3>
							
								Berita Terbaru
													</h3>
							<hr class="space-sm">
							<div class="menu-inner menu-inner-vertical menu-inner-image">
								<ul>
									@foreach(new_lainnya2() as $new_lainnya)
									<li>
										<a href="{{url('news/'.$new_lainnya['link'])}}">
											<img src="https://www.krakatausteel.com/public/images/news/" alt="">
											<span>{{tgl_lainnya($new_lainnya['tanggal'])}}</span>
											{{$new_lainnya['name']}}
										</a>
									</li>
									@endforeach
								</ul>
							</div>
							
						</div>
					</div>
					
				</div>
			</section>
			@include('berita')
			
		</main>
@endsection   