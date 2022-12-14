@php
    Theme::set('section-name', $post->name);
    $post->loadMissing('metadata');

    $bannerImage = $post->getMetaData('banner_image', true);

    if ($bannerImage) {
        Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
    }
@endphp


            <div class="col-md-8 single-post">
                <div class="post-wrapper post-standard">
                    @if ($post->image)
                    <div class="image-wrapper">
                        <img class="img-responsive" src="{!! RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage()) !!}" alt="blog image 01">
                    </div> <!-- .image-wrapper -->
                    @endif
                    <div class="post-content">
                        <h2 class="entry-title">{{ $post->name }}</h2>
                        <ul class="post-meta">
                            <li><i class="fa fa-clock-o"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</li>
                        </ul>
                        <div class="entry-content">
                            {!! clean($post->content) !!}
                        </div> <!-- .entry-content -->
                    </div> <!-- .post-content -->
                </div> <!-- .post-wrapper post-overlay -->

            </div> <!-- .col-md-8 -->


<section id="body-content" class="blog-section blog-post-01 page-content" style="display: none">

        <div class="container">
            <div class="row pad-top">
                <div class="col-md-12 col-lg-8">
                    <div class="sidebar-padding-right">
                        <div class="blog-list">
                            <div class="blog-img">
                                <img src="{!! RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage()) !!}" alt="{{ $post->name }}">
                            </div>
                            <div class="blog-text d-sm-flex">

                                <div class="blog-details">
                                    <div class="meta-box-wrap col-auto pl-0 mb-3">
                                        <a href="#" class="post-date"><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</a>
                                    </div>
                                    <h2 class="h2-xl txt-orange mb-3">{{ $post->name }}</h2>
                                    <p>{!! clean($post->content) !!}</p>
                                    @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                                        {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!$post->tags->isEmpty())
                        @php
                            if (is_plugin_active('language-advanced')) {
                                $post->tags->loadMissing('translations');
                            }
                        @endphp
                        <span class="post__tags"><i class="ion-pricetags"></i>
                    @foreach ($post->tags as $tag)
                                <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                            @endforeach
                </span>
                    @endif
                </div>
                <!-- Sidebar Left Start -->
                <div class="col-md-12 col-lg-4 sidebar-left single-right">
                    <aside class="sidebar-spacer row">
                        {!! dynamic_sidebar('primary_sidebar') !!}
                    </aside>
                </div><!-- Sidebar Left End -->
            </div>
        </div>


</section>
