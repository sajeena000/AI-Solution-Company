@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">{{ $blog->title }}</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="{{ route('frontend.blogs') }}" class="text-white">Blog</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Blog Detail</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<div class="single-blog-item">

							<div class="blog-item-content bg-white p-5">
								<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $blog->category }}</span>
									<span class="text-muted text-capitalize mr-3"><i class="fa fa-user" aria-hidden="true"></i> {{ $blog->author }}</span>
									<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> {{ date('M d, Y', strtotime($blog->created_at)) }}</span>
								</div>

								<div class="mt-4">

									{!! html_entity_decode($blog->content) !!}
								</div>

							</div>
						</div>
					</div>

					<div class="col-lg-12 mb-5">
						<div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
							
							@if($previousBlog)
							<a class="post-prev align-items-center" href="{{ route('frontend.blogs.detail', $previousBlog->id) }}">
								<div class="posts-prev-item mb-4 mb-lg-0">
									<span class="nav-posts-desc text-color">- Previous Post</span>
									<h6 class="nav-posts-title mt-1">
										{{ Str::limit($previousBlog->title, 20) }}
									</h6>
								</div>
							</a>
							@endif


							<div class="border"></div>

							@if($nextBlog)
							<a class="posts-next" href="{{ route('frontend.blogs.detail', $nextBlog->id) }}">
								<div class="posts-next-item pt-4 pt-lg-0">
									<span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
									<h6 class="nav-posts-title mt-1">
										{{ Str::limit($nextBlog->title, 20) }}
									</h6>
								</div>
							</a>
							@endif


						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 mt-5 mt-lg-0">
				<div class="sidebar-wrap">
					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Posts</h5>
						@foreach($latestBlogs as $item)
						<div class="media border-bottom py-3">
							<a href="{{ route('frontend.blogs.detail', $item->id) }}">
								<img src="{{ Storage::url('blogs/' . $item->thumbnail) }}" loading="lazy"  class="mr-4" style="height:60px" />
							</a>
							<div class="media-body">
								<h6 class="my-2"><a href="{{ route('frontend.blogs.detail', $item->id) }}">{{ $item->title }}</a></h6>
								<span class="text-sm text-muted">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection