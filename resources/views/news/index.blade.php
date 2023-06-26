@extends('layouts.main')

@section('title', 'News Page')

@section('content')    

    <div role="main" class="main">

				<section class="page-header page-header-modern bg-color-dark-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-light font-weight-bold text-8">Grid 3 Columns</h1>
								<span class="sub-title text-light">Check out our Latest News!</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

                <div class="container">
                    <form action="{{ route('news.index') }}" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <select name="category" class="form-select form-control border-color-quaternary mb-3">
                                    <option value="general">General</option>
                                    <option value="business">Business</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="health">Health</option>
                                    <option value="science">Science</option>
                                    <option value="sports">Sports</option>
                                    <option value="technology">Technology</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="country" class="form-select form-control border-color-quaternary">
                                    <option disabled="disabled" selected label="United States"></option>
                                    <option value="ar">Argentina </option>
                                    <option value="au">Australia</option>
                                    <option value="at">Austria</option>
                                    <option value="be">Belgium</option>
                                    <option value="br">Brazil</option>
                                    <option value="bg">Bulgaria</option>
                                    <option value="ca">Canada</option>
                                    <option value="cn">China</option>
                                    <option value="co">Colombia</option>
                                    <option value="cz">Czech Republic</option>
                                    <option value="eg">Egypt</option>
                                    <option value="fr">France</option>
                                    <option value="de">Germany</option>
                                    <option value="gr">Greece</option>
                                    <option value="hk">Hong Kong</option>
                                    <option value="hu">Hungary</option>
                                    <option value="in">India</option>
                                    <option value="id">Indonesia</option>
                                    <option value="ie">Ireland</option>
                                    <option value="il">Israel</option>
                                    <option value="it">Italy</option>
                                    <option value="lv">Latvia</option>
                                    <option value="lt">Lithuania</option>
                                    <option value="my">Malaysia</option>
                                    <option value="mx">Mexico</option>
                                    <option value="ma">Morocco</option>
                                    <option value="nl">Netherlands</option>
                                    <option value="nz">New Zealand</option>
                                    <option value="ng">Nigeria</option>
                                    <option value="no">Norway</option>
                                    <option value="ph">Philippines</option>
                                    <option value="pl">Poland</option>
                                    <option value="pt">Portugal</option>
                                    <option value="ro">Romania</option>
                                    <option value="ru">Russia</option>
                                    <option value="sa">Saudi Arabia</option>
                                    <option value="rs">Serbia</option>
                                    <option value="sg">Singapore</option>
                                    <option value="sk">Slovakia</option>
                                    <option value="si">Slovenia</option>
                                    <option value="za">South Africa</option>
                                    <option value="kr">South Korea</option>
                                    <option value="se">Sweden</option>
                                    <option value="ch">Switzerland</option>
                                    <option value="tw">Taiwan</option>
                                    <option value="th">Thailand</option>
                                    <option value="tr">Turkey</option>
                                    <option value="ua">Ukrain</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="us">United States</option>
                                    <option value="ve">Venezuela</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>

                

				<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row">

                                    @foreach ($articles->articles as $article)

                                        <div class="col-md-4">
                                            <article class="post post-medium border-0 pb-0 mb-5">
                                                <div class="post-image">
                                                    @php
                                                        $cekImage = $article->urlToImage;
                                                    @endphp
                                                    <!-- is_null($cekImage) bisa dengan pemanggilan seperti ini -->
                                                    <a href="{{ $article->url }}"> 
                                                        @if($cekImage == null)
                                                        <img src="{{ asset('img/new/imgnotfound.png') }}" class="img-fluid rounded-0" alt="No Image Found" />
                                                        @else
                                                        <img src="{{ $article->urlToImage }}" class="img-fluid rounded-0" alt="No Image Found" />
                                                        @endif
                                                    </a>
                                                </div>

                                                <div class="post-content">

                                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ $article->url }}">{{ substr($article->title, 0, 100) }}</a></h2>
                                                    <p>{{ substr($article->description, 0, 100) }}...</p>

                                                    <div class="post-meta">
                                                        <span><i class="far fa-user"></i><a href="#">{{ $article->author }}</a> </span>
                                                        <span><i class="far fa-folder"></i><a href="#">{{$category}}</a> </span>
                                                        <span><i class="far fa-calendar"></i> <a href="#">{{ substr($article->publishedAt, 0, 10) }}</a></span>
                                                        <span class="d-block mt-2"><a href="{{ $article->url }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                                    </div>

                                                </div>
                                            </article>
                                        </div>
                                    @endforeach

								</div>

								<div class="row">
									<div class="col">
										<ul class="pagination float-end">
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div>

			</div>

@endsection



