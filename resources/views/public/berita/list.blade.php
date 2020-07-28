@foreach ($beritas as $item)
<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-2">
            <img src="{{ $item->image->img_path }}" class="card-img" alt="..." class="d-block m-auto img-fluid" height="163px" style="object-fit: cover">
        </div>
        <div class="col">
            <div class="card-body text-justify">
                <h4 class="card-title">{{ $item->judul }}</h4>
                {!!  Str::limit($item->deskripsi, 250, '... ') !!}
                <a href="{{ route('public.berita.detail', $item->slug) }}" class="stretched-link text-decoration-none text-primary">baca lebih lanjut</a>

                <p><small><i class="text-muted">Dipublikasikan pada tanggal {{ $item->created_at->format('j F Y') }}</i></small></p>
            </div>
        </div>
    </div>
</div>
@endforeach
