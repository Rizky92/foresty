<ol>
    @foreach ($faunas as $item)
    <li>
        <h5>
            <b>{{ $item->nama }}</b>
            @if ($item->latin != null || $item->latin != '')
                (<i>{{ $item->latin }}</i>)
            @endif
        </h5>
        @if ($item->img_path != null || $item->img_path != '')
        <figure class="figure float-left pr-5 w-35">
            <img src="{{ $item->img_path }}" alt="{{ $item->nama }}" class="d-block figure-img img-fluid rounded">
            <figcaption class="figure-caption">{{ $item->nama }}.</figcaption>
        </figure>
        @endif
        {!! $item->deskripsi !!}
    </li>
    @endforeach
</ol>
