@php
    use App\Models\SocialMediaLinks;
    $setting = setting();
       $social = SocialMediaLinks::find(1);
@endphp
<footer class="footer bg-light">
    <div class="container">
        <div class="text-center row justify-content-center">
            <div class="col-md-12">
                <div class="text-center text-white footer-alt">
                    <ul class="mt-4 mb-0 about-social list-inline">
                        @php
                            $socialPlatforms = [
                                'facebook' => 'mdi mdi-facebook',
                                'whatsapp' => 'mdi mdi-whatsapp',
                                    'linkedin' => 'mdi mdi-linkedin',
                                'youtube' => 'mdi mdi-youtube-play',
                                'instagram' => 'mdi mdi-instagram',
                                'tiktok' => asset('tiktok.png'), // Store full image path
                                'flickr' => asset('flickr.png'), // Store full image path
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
                                        @elseif ($platform === 'flickr')
                                            <img src="{{ $icon }}" alt="flickr" style="width: 24px; height: 24px;">
                                        @else
                                            <i class="{{ $icon }}"></i>
                                        @endif
                                    </a>

                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-3 mb-0 copyright_content">
                        {{$setting->footer}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
