<nav class="sticky navbar navbar-expand-lg custom-nav navbar-light fixed-top">
    <div class="container">
        @php
            $homepage = \App\Models\HomepageSetting::first();
        @endphp
        <a class="pt-0 navbar-brand logo" href="{{route('home')}}">
            <img  src="{{ asset(setting()->website_logo) }}" alt="{{setting()->name}}" class="img-fluid logo-light">
            <img  src="{{ asset(setting()->website_logo) }}" alt="{{setting()->name}}" class="img-fluid logo-dark">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" id="main_nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/#home">Home</a>
                </li>

                @if($homepage->about_section_status == "1")
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                @endif
                @if($homepage->education_section_status == "1")
                <li class="nav-item">
                    <a class="nav-link" href="/#education">Education</a>
                </li>
                @endif
                @if($homepage->experience_section_status == "1")
                <li class="nav-item">
                    <a class="nav-link" href="/#experience">Experience</a>
                </li>
                @endif
                @if($homepage->portfolio_section_status == "1")
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                @endif
                @if($homepage->blog_section_status == "1")
                <li class="nav-item">
                    <a class="nav-link" href="/#blog">Blog</a>
                </li>
                @endif
                @if($homepage->contact_section_status)
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
