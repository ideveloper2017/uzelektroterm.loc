@if (!BaseHelper::isHomepage($page->id))
    @php
        Theme::set('section-name', SeoHelper::getTitle());
        $page->loadMissing('metadata');

        $bannerImage = $page->getMetaData('banner_image', true);

        if ($bannerImage) {
            Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
        }
    @endphp

                            @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($page)))
                                {!! render_object_gallery($galleries) !!}
                            @endif
                            {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}


@else
    @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($page)))
        {!! render_object_gallery($galleries) !!}
    @endif
    {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}
@endif
