<div class="col-lg-3 col-md-6 footer-about">
    <h3 class="widget-title">About Us</h3>
    <p>
        {!! clean($config['about']) !!}
    </p>
    <ul class="list-inline footer-social">
        @for ($i = 1; $i <= 5; $i++)
            @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))
                <li><a style="background: {{ theme_option('social_' . $i . '_color') }}" href="{{ theme_option('social_' . $i . '_url') }}" target="_blank" title="{{ theme_option('social_' . $i . '_name') }}"><i class="elegant-icon {{ theme_option('social_' . $i . '_icon') }}"></i></a></li>
            @endif
        @endfor
    </ul> <!-- .footer-social -->
</div> <!-- col-lg-3 col-md-6 -->
<div class="col" style="display: none">
    <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0  wow animate__animated animate__fadeInUp"  data-wow-delay="0">
        @if (theme_option('logo'))
            <div class="logo mb-30">
                <a href="{{ route('public.index') }}" class="mb-15"><img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}"></a>
                <p class="font-lg text-heading">{!! clean($config['about']) !!}</p>
            </div>
        @endif
        <ul class="contact-infor">
            <li><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M8.00001 16.7564L7.53334 16.3564C6.89001 15.8178 1.27267 10.9664 1.27267 7.41776C1.27267 5.63356 1.98145 3.92244 3.24306 2.66082C4.50468 1.3992 6.21581 0.69043 8.00001 0.69043C9.78421 0.69043 11.4953 1.3992 12.757 2.66082C14.0186 3.92244 14.7273 5.63356 14.7273 7.41776C14.7273 10.9664 9.11001 15.8178 8.46934 16.3591L8.00001 16.7564ZM8.00001 2.1451C6.6021 2.14668 5.2619 2.70271 4.27342 3.69118C3.28495 4.67965 2.72893 6.01985 2.72734 7.41776C2.72734 9.6471 6.18334 13.2084 8.00001 14.8384C9.81667 13.2078 13.2727 9.64443 13.2727 7.41776C13.2711 6.01985 12.7151 4.67965 11.7266 3.69118C10.7381 2.70271 9.39792 2.14668 8.00001 2.1451Z" fill="{{ theme_option('color_brand', '#3BB77E') }}"/>
                        <path d="M8.00001 10.0843C7.47259 10.0843 6.95702 9.92791 6.51849 9.6349C6.07996 9.34188 5.73817 8.9254 5.53633 8.43813C5.3345 7.95086 5.28169 7.41469 5.38458 6.8974C5.48748 6.38012 5.74145 5.90497 6.11439 5.53203C6.48733 5.15909 6.96249 4.90511 7.47977 4.80222C7.99705 4.69932 8.53323 4.75213 9.0205 4.95397C9.50777 5.1558 9.92425 5.49759 10.2173 5.93612C10.5103 6.37465 10.6667 6.89023 10.6667 7.41764C10.6667 8.12489 10.3857 8.80317 9.88563 9.30326C9.38553 9.80336 8.70726 10.0843 8.00001 10.0843ZM8.00001 6.08431C7.7363 6.08431 7.47852 6.16251 7.25925 6.30902C7.03999 6.45553 6.86909 6.66377 6.76817 6.9074C6.66726 7.15103 6.64085 7.41912 6.6923 7.67776C6.74374 7.93641 6.87073 8.17398 7.0572 8.36045C7.24367 8.54692 7.48125 8.67391 7.73989 8.72536C7.99853 8.77681 8.26662 8.7504 8.51026 8.64948C8.75389 8.54857 8.96213 8.37767 9.10864 8.1584C9.25515 7.93914 9.33335 7.68135 9.33335 7.41764C9.33335 7.06402 9.19287 6.72488 8.94282 6.47484C8.69277 6.22479 8.35363 6.08431 8.00001 6.08431Z" fill="{{ theme_option('color_brand', '#3BB77E') }}"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.750977)"/>
                        </clipPath>
                    </defs>
                </svg>
                <strong class="d-inline-block">{{ __('Address') }}:</strong> <span class="d-inline-block">{{ $config['address'] }}</span></li>
            <li><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M14.3333 8.71789V7.76855C14.3333 6.17726 13.7012 4.65113 12.576 3.52591C11.4508 2.4007 9.92463 1.76855 8.33333 1.76855C6.74203 1.76855 5.21591 2.4007 4.09069 3.52591C2.96547 4.65113 2.33333 6.17726 2.33333 7.76855V8.71789C1.6341 9.02578 1.06186 9.56452 0.712412 10.2439C0.362959 10.9233 0.257505 11.7022 0.413703 12.45C0.5699 13.1979 0.978269 13.8694 1.57044 14.3522C2.16262 14.8349 2.90266 15.0996 3.66666 15.1019H5V8.43522H3.66666V7.76855C3.66666 6.53088 4.15833 5.34389 5.0335 4.46872C5.90867 3.59355 7.09565 3.10189 8.33333 3.10189C9.57101 3.10189 10.758 3.59355 11.6332 4.46872C12.5083 5.34389 13 6.53088 13 7.76855V8.43522H11.6667V13.7686H9V15.1019H13C13.764 15.0996 14.504 14.8349 15.0962 14.3522C15.6884 13.8694 16.0968 13.1979 16.253 12.45C16.4092 11.7022 16.3037 10.9233 15.9542 10.2439C15.6048 9.56452 15.0326 9.02578 14.3333 8.71789ZM3.66666 13.7686C3.13623 13.7686 2.62752 13.5578 2.25245 13.1828C1.87738 12.8077 1.66666 12.299 1.66666 11.7686C1.66666 11.2381 1.87738 10.7294 2.25245 10.3543C2.62752 9.97927 3.13623 9.76855 3.66666 9.76855V13.7686ZM13 13.7686V9.76855C13.5304 9.76855 14.0391 9.97927 14.4142 10.3543C14.7893 10.7294 15 11.2381 15 11.7686C15 12.299 14.7893 12.8077 14.4142 13.1828C14.0391 13.5578 13.5304 13.7686 13 13.7686Z" fill="{{ theme_option('color_brand', '#3BB77E') }}"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="translate(0.333344 0.435059)"/>
                        </clipPath>
                    </defs>
                </svg>
                <strong class="d-inline-block">{{ __('Call Us') }}:</strong> <span class="d-inline-block">{{ $config['phone'] }}</span></li>
            <li><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M0.962657 5.08044C0.739429 5.14422 0.536723 5.26518 0.374598 5.43136C0.212473 5.59754 0.0965474 5.80317 0.0382929 6.0279C-0.0199617 6.25264 -0.0185264 6.48869 0.0424566 6.7127C0.10344 6.93671 0.221857 7.14091 0.385991 7.3051L2.66066 9.5771V13.9678H7.05599L9.34599 16.2544C9.46881 16.3785 9.615 16.4771 9.77611 16.5443C9.93722 16.6116 10.1101 16.6463 10.2847 16.6464C10.3994 16.6462 10.5136 16.6314 10.6247 16.6024C10.8493 16.5459 11.0551 16.4311 11.2213 16.2697C11.3874 16.1083 11.5082 15.906 11.5713 15.6831L15.994 0.648438L0.962657 5.08044ZM1.33332 6.36244L12.6853 3.01577L3.99532 11.6918V9.0251L1.33332 6.36244ZM10.2933 15.3118L7.60866 12.6344H4.94199L13.6307 3.9531L10.2933 15.3118Z" fill="{{ theme_option('color_brand', '#3BB77E') }}"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.634277)"/>
                        </clipPath>
                    </defs>
                </svg>
                <strong class="d-inline-block">{{ __('Email') }}:</strong> <span class="d-inline-block">{{ $config['email'] }}</span></li>
            <li><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M7.39402 16.8696H0.727356V15.5363H7.39402V16.8696ZM6.06069 12.8696H0.727356V14.203H6.06069V12.8696ZM4.72736 10.203H0.727356V11.5363H4.72736V10.203ZM8.72736 0.869629C6.60633 0.871923 4.57283 1.71551 3.07304 3.21531C1.57324 4.7151 0.72965 6.7486 0.727356 8.86963H2.06069C2.06069 7.55109 2.45168 6.26216 3.18423 5.16583C3.91677 4.0695 4.95796 3.21502 6.17613 2.71043C7.39431 2.20585 8.73475 2.07383 10.028 2.33106C11.3212 2.5883 12.5091 3.22323 13.4414 4.15558C14.3738 5.08793 15.0087 6.27582 15.2659 7.56903C15.5232 8.86223 15.3911 10.2027 14.8866 11.4209C14.382 12.639 13.5275 13.6802 12.4312 14.4128C11.3348 15.1453 10.0459 15.5363 8.72736 15.5363V16.8696C10.8491 16.8696 12.8839 16.0268 14.3842 14.5265C15.8845 13.0262 16.7274 10.9914 16.7274 8.86963C16.7274 6.7479 15.8845 4.71307 14.3842 3.21277C12.8839 1.71248 10.8491 0.869629 8.72736 0.869629V0.869629ZM8.06069 5.5363V9.14563L10.256 11.341L11.1987 10.3983L9.39402 8.59363V5.5363H8.06069Z" fill="{{ theme_option('color_brand', '#3BB77E') }}"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="translate(0.727356 0.869629)"/>
                        </clipPath>
                    </defs>
                </svg>
                <strong class="d-inline-block">{{ __('Working Hours') }}:</strong> <span class="d-inline-block">{{ $config['working_hours'] }}</span></li>
        </ul>
    </div>
</div>
