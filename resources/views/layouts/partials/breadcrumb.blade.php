<!--====== Section Content ======-->
<div class="section__content">
    <div class="container">
        <div class="breadcrumb">
            <div class="breadcrumb__wrap">
                <ul class="breadcrumb__list">
                    @if (isset($routes) && !empty($routes))
                        @foreach ($routes as $item)
                            <li class="has-separator"><a href="{{ $item['link'] ?? '#' }}">{{ $item['name'] }}</a></li>
                        @endforeach
                    @endif
                    <li class="is-marked"><a href="#">{{ $currentTitlePage }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!--====== End - Section 1 ======-->