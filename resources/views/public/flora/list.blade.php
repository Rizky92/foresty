<ol>
    @foreach ($floras as $item)
    <li class="pb-3">
        <h3>
            <a href="{{ route('public.flora.images.find', $item->slug) }}" class="text-decoration-none text-dark"><b>{{ $item->nama }}</b></a>
            @if ($item->latin != null || $item->latin != '')
                (<i>{{ $item->latin }}</i>)
            @endif
        </h3>

        @if ($item->image->img_path != null || $item->image->img_path != '')
            @if (str_contains($item->deskripsi, '[kiri]'))
                <img src="{{ $item->image->img_path }}" class="d-block img-fluid w-35 pr-3 pb-2 float-left" alt="{{ $item->judul }}">
            @endif
            @if (str_contains($item->deskripsi, '[kanan]'))
                <img src="{{ $item->image->img_path }}" class="d-block img-fluid w-35 pl-3 pb-2 float-right" alt="{{ $item->judul }}">
            @endif
            {!! str_replace(['[kiri]', '[kanan]'], '', $item->deskripsi) !!}
        @endif
    </li>
    @endforeach
</ol>
