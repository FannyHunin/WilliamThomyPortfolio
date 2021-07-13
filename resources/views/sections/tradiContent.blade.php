<section id="portfolioTrad" class="mt-5">
    <div class="container-fluid">
        @foreach($items as $item)
            <a class="thumbnail-link" target="_blank" href="/portfolio/traditionnel/{{$item->id}}"><img class="thumbnail" src="{{asset($item->imgSrc)}}" alt=""></a>
        @endforeach
    </div>
</section>