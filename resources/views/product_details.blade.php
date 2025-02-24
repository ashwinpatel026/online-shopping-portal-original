@extends('layouts.app')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li>Electronics</li>
				<li>Mobiles</li>
				<li class="active">Apple iPhone 6 (Silver, 16 GB)</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>
<div class="container m-t-20">
    <div class="row single-product outer-bottom-sm ">
        <div class="col-md-3 sidebar">
            <div class="sidebar-module-container">
                <div class="sidebar-widget outer-bottom-xs wow fadeInUp animated">
                    <h3 class="section-title">Category</h3>
                    <div class="sidebar-widget-body m-t-10">
                        
                        <div class="accordion">
                            @if($categories)
                                @foreach ($categories as $category )
                                
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                           <a href="{{ route('category.show', ['categoryId' => $category->id]) }}" class="accordion-toggle collapsed">
                                            {{ $category->category_name }}	                </a>
                                        </div>
                                     </div>
                                @endforeach
                            @endif
                        </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
