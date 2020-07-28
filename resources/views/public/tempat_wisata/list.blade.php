<ol>
    @foreach ($tempatWisatas as $item)
    <li class="pb-3">
        <h3>
            <a href="{{ route('public.wisata.images.find', $item->slug) }}" class="text-decoration-none text-dark"><b>{{ $item->nama }}</b></a>
        </h3>

        @if (!is_null($item->image))
            @if (str_contains($item->deskripsi, '[kiri]'))
                <img src="{{ $item->image->img_path }}" class="d-block img-fluid w-35 pr-3 pb-2 float-left" alt="{{ $item->judul }}">
            @endif
            @if (str_contains($item->deskripsi, '[kanan]'))
                <img src="{{ $item->image->img_path }}" class="d-block img-fluid w-35 pl-3 pb-2 float-right" alt="{{ $item->judul }}">
            @endif
        @endif
        {!! str_replace(['[kiri]', '[kanan]'], '', $item->deskripsi) !!}
    </li>
    @endforeach
</ol>
