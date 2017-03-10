@if($goods->count())
<div class="certificates-description container-row">
    <h2 class="certificates section-subtitle">Новинки искусственных декоративных камней</h2>
</div>
<div class="catalog certificates container-row">
    @foreach($goods as $good)
    <div class="certificates item">
        <a class="item-image-link w-inline-block" href="{{route('goods.item', $good->sysname)}}">
            <img class="item-image" src="/{{$good->getImgPreviewPath().$good->img}}">
        </a>
    </div>
    @endforeach
</div>
@endif