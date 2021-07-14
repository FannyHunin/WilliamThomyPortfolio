<section id="portfolioDigi" class="mt-5">
    <div class="container-fluid">
        <div class="row">
            @foreach($items as $item)
                <div class="col-3 mb-4">
                    <a class="thumbnail-link" target="_blank" href="/portfolio/traditionnel/{{$item->id}}"><img class="thumbnail" src="{{asset($item->imgSrc)}}" alt=""></a>
                    @if ($loop->iteration % 4 == 0)
                        </div>
                        <div class="row">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>