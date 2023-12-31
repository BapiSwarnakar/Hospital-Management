@extends('frontend.layout.main')
@push('title')
    <title>Blog</title>
@endpush
@section('main-content')

        <!-- Begin Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Blog Grid View</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Column Three</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->

        <!-- Begin Blog Column Three Area -->
        <div class="hiraola-blog_area hiraola-blog_area-2 grid-view_area blog-column-three_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row blog-item_wrap">
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ url('webpage/assets/images/blog/medium-size/4.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">25</span>
                                                <span class="month">April</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Blog Image Post</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hiraola-single-blog_slider">
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">25</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog First Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">12</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Ht wisi enim ad minim veniam..</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/1.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">12</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog Second Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/4.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">15</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog Third Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">15</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog Fourth Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">15</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog Five Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ url('webpage/assets/images/blog/medium-size/4.jpg')}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">15</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog-details-left-sidebar.html">Blog Six Gallery Post</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque
                                                    vel
                                                    lacus
                                                    eget est d...
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="ratio ratio-4x3">
                                        <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/342419243&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Blog Image Post</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="ratio ratio-4x3">
                                        <iframe src="https://www.youtube.com/embed/gvPetTPFsZM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Blog Video Post</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ url('webpage/assets/images/blog/medium-size/1.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">25</span>
                                                <span class="month">April</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Gt wisi enim ad minim veniam.</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ url('webpage/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">25</span>
                                                <span class="month">April</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Ht wisi enim ad minim veniam..</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i
                                                    class="ion-ios-arrow-right"></i></a>
                                                </li>
                                                <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Show</p>
                                                    <select class="myniceselect nice-select">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                    </select>
                                                    <span>Per Page</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Column Three Area End Here -->


@endsection
@section('script')
{{-- script --}}
@endsection
