@extends('website.master')
@section('title_meta')
<title>{{ $setting->name }}</title>
<meta name="description" content="Premium Responsive Bootstrap 5.3.3 Personal Template" />
<meta name="keywords" content="bootstrap 5.3.3, premium, cv, personal, Portfolio, multipurpose" />
<meta name="author" content="SRBThemes" />
@endsection

@section('content')

    <!-- Start All Cards -->
    @if($homepage->hero_section_status == "1")
        <!-- START HOME -->
        <section class="section header-bg-img h-100vh align-items-center d-flex" id="home">
            <div class="bg-overlay"></div>
            <div class="container z-2">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mx-auto text-center header-content">
                            <img src="{{asset($homepage->hero_section_image )}}" alt="" class="rounded w-25">
                            <h4 class="mt-1 mb-2 text-white first-title">Welcome</h4>
                            <h1 class="mb-0 text-white header-name text-capitalize">I'M <span class="element fw-bold"></span></h1>
                            <p class="mx-auto mt-4 text-white header-desc">{!! $homepage->hero_section_paragraph  !!}</p>
                            <div class="pt-2 mt-4">
                                <a href="{{$homepage->hero_section_button_link}}" target="_blank" class="btn btn-outline-white rounded-pill">{{$homepage->hero_section_button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll_down">
                <a href="#about" class="scroll">
                    <i class="text-white"></i>
                </a>
            </div>
        </section>
        <!-- END HOME -->
    @endif
    @if($homepage->about_section_status === "1")
        <!-- START ABOUT -->
        <section class="section" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img  src="{{asset($homepage->about_section_image )}}" alt="{{$homepage->about_section_header}}, {{$homepage->about_section_paragraph}}" class="mx-auto img-fluid d-block img-thumbnail w-75">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <h2><span class="fw-bold">{{$homepage->about_section_title }}</span></h2>
                            <h4 class="mt-4">Hello! <span class="text-primary fw-bold">I'M {{$homepage->about_section_header}}</span></h4>
                            <p class="mt-4 text-muted">{{$homepage->about_section_paragraph}} </p>


                            <div>
                                <ul class="mt-4 mb-0 about-social list-inline">
                                    @php
                                        $socialPlatforms = [
                                            'facebook' => 'mdi mdi-facebook',
                                            'whatsapp' => 'mdi mdi-whatsapp',
                                                'linkedin' => 'mdi mdi-linkedin',
                                            'youtube' => 'mdi mdi-youtube-play',
                                            'instagram' => 'mdi mdi-instagram',
                                            'tiktok' => asset('tiktok.png'), // Store full image path
                                            'telegram' => 'mdi mdi-telegram',
                                            'snapchat' => 'mdi mdi-snapchat',
                                            'twitter' => 'mdi mdi-twitter',
                                            'pinterest' => 'mdi mdi-pinterest'
                                        ];
                                    @endphp

                                    @foreach ($socialPlatforms as $platform => $icon)
                                        <li class="list-inline-item">
                                            @if (!empty($social->$platform))
                                                <a href="{{ $social->$platform }}" target="_blank">
                                                    @if ($platform === 'tiktok')
                                                        <img src="{{ $icon }}" alt="TikTok" style="width: 24px; height: 24px;">
                                                    @else
                                                        <i class="{{ $icon }}"></i>
                                                    @endif
                                                </a>

                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT -->
    @endif
    @if($homepage->service_section_status === "1")
        <!-- START SERVICES -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2><span class="fw-bold">{{$homepage->service_section_title}}</span></h2>
                            <p class="mx-auto mt-3 text-muted section-subtitle">{{$homepage->service_section_paragraph}}.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row">
                    @foreach($services as $row)
                        <div class="col-lg-4">
                            <div class="p-4 mt-4 text-center rounded services-boxes">
                                <div class="services-boxes-icon">
                                    <i class="{{$row->icon}} text-primary display-4"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">{{$row->title}}</h5>
                                    <div class="services-title-border"></div>
                                    <p class="mt-3 text-muted">{{\Illuminate\Support\Str::limit($row->description,100)}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-4 text-center">
                        <a href="{{$homepage->service_section_link}}" class="btn btn-primary">Show More</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SERVICES -->
    @endif
    @if($homepage->hire_section_status == "1")
    <!-- START CTA -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">{{$homepage->hire_section_title}}</h2>
                        <p>{{$homepage->hire_section_paragraph}}</p>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{$homepage->hire_section_link}}" target="_blank" class="btn btn-primary">{{$homepage->hire_section_button_text}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->
    @endif

    @if($homepage->review_section_status == "1")
        <!-- START CLIENT -->
        <section class="section bg-light" id="client">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2><span class="fw-bold">{{$homepage->review_section_header}}</span></h2>
                            <p class="mx-auto mt-3 text-muted section-subtitle">{{$homepage->review_section_paragraph}}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 mt-4 row">
                    <div class="col-lg-12">
                        <div id="owl-demo" class="owl-carousel" dir="ltr">
                            @foreach($reviews as $row)
                                <div class="mx-auto text-center testi_boxes">
                                    <div class="tam_testi_icon text-primary">
                                        <i class="mbri-quote-left"></i>
                                    </div>
                                    <div class="mt-2">
                                        <div class="img_testi">
                                            <img src="{{ $row->image ? asset($row->image) : 'https://placehold.co/100' }}" alt="{{ $row->name }}, {{ $row->review }}" class="mx-auto img-thumbnail img-fluid rounded-circle">
                                        </div>
                                        <p class="mt-4 text-center client_review fst-italic text-muted">"{{$row->review}}"</p>
                                        <p class="mt-4 mb-0 text-center client_name">- {{$row->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENT -->
    @endif


    <!-- START WORK -->
    <section class="text-center section" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Works</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row ">
                <ul class="mb-0 col list-unstyled list-inline text-uppercase work_menu" id="menu-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    @foreach($projectCategory as $category)
                        <li class="list-inline-item">
                            <a data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="container">
            <div class="mt-4 row work-filter">
                @foreach($projects as $project)
                    <div class="col-lg-4 work_item {{ Str::slug($project->productCategory->name) }}">
                        <a href="{{ asset($project->image) }}" class="img-zoom">
                            <div class="work_box">
                                <div class="work_img">
                                    <img src="{{ asset($project->image) }}" class="mx-auto rounded img-fluid d-block" alt="{{ $project->title }}">
                                </div>
                                <div class="work_detail">
                                    <p class="mb-2">{{ $project->productCategory->name }}</p>
                                    <h4 class="mb-0">{{ $project->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- END WORK -->

    @if($homepage->blog_section_status == "1")
        <!-- START BLOG -->
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2><span class="fw-bold">{{$homepage->blog_section_title}}</span></h2>
                            <p class="mx-auto mt-3 text-muted section-subtitle">{{$homepage->blog_section_paragraph}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row">
                    @foreach($latestBlogs as $row)
                        <div class="mt-3 col-lg-4">
                            <div class="p-2 border-0 rounded card">
                                <div class="img_blog">
                                    <img  src="{{ asset($row->image) }}" alt="{{$row->name}}" class="mx-auto rounded img-fluid d-block">
                                </div>
                                <div class="p-3 content_blog">
                                    <div>
                                        <h5 class="mb-0 fw-bold"><a href="javascript:void(0)" class="text-body">{{$row->name}}</a></h5>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-0 h6 text-muted date_blog">{{$row->created_at->format('d M Y')}} <a href="javascript:void(0)" class="text-primary fw-bold">By
                                            {{$row->user->name}}</a></p>
                                        <p class="mt-3 desc_blog text-muted">{{\Illuminate\Support\Str::limit($row->description,110)}}</p>
                                        <p class="mb-0 h6"><a href="javascript:void(0)" class="text-muted fw-bold">Read More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END BLOG -->
    @endif

    @if($homepage->contact_section_status == "1")
        <!-- START CONTACT -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2><span class="fw-bold">{{$homepage->contact_section_title}}</span></h2>
                            <p class="mx-auto mt-3 text-muted section-subtitle">{{$homepage->contact_section_paragraph}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div>
                                <i class="mbri-mobile2 text-primary h1"></i>
                            </div>
                            <div class="mt-3">
                                <h5 class="mb-0 contact_detail-title fw-bold">{{$homepage->phone_title}}</h5>
                                <p class="text-muted">{{$homepage->phone}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div>
                                <i class="mbri-letter text-primary h1"></i>
                            </div>
                            <div class="mt-3">
                                <h5 class="mb-0 contact_detail-title fw-bold">{{$homepage->email_title}}</h5>
                                <p class="text-muted">{{$homepage->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div>
                                <i class="mbri-pin text-primary h1"></i>
                            </div>
                            <div class="mt-3">
                                <h5 class="mb-0 contact_detail-title fw-bold">{{$homepage->address_title}}</h5>
                                <p class="text-muted">{{$homepage->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row">
                    <div class="col-lg-12">
                        <div class="form-kerri contact_form">
                            <div id="message"></div>
                            <form method="post" action="{{route('contact.save')}}" name="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mt-2 form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-2 form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-2 form-group">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject.." required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mt-2 form-group">
                                            <textarea name="description" id="comments" rows="4" class="form-control" placeholder="Your message..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                                    {!! app('mathcaptcha')->input(['class' => 'form-control', 'id' => 'mathgroup']) !!}
                                    @if ($errors->has('mathcaptcha'))
                                        <span class="help-block">
            <strong>{{ $errors->first('mathcaptcha') }}</strong>
        </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="mt-2 col-lg-12 text-end">
                                        <button type="submit" id="submit" class="submitBnt btn btn-primary">Send Massage</button>
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->
    @endif


@endsection
@section('script')
<script>
    var typed = new Typed('.element', {
        strings: {!! json_encode(json_decode($homepage->hero_section_all_designation_title, true)) !!},
        typeSpeed: 120,
        backSpeed: 60,
        backDelay: 3000,
        loop: true
    });
</script>
@endsection
