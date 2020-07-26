@foreach ($beritas as $item)
<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-2">
            <img src="{{ $item->img_path }}" class="card-img" alt="..." class="d-block m-auto img-fluid" height="163px" style="object-fit: cover">
        </div>
        <div class="col">
            <div class="card-body">
                <h4 class="card-title">{{ $item->judul }}</h4>
                {!!  Str::limit($item->deskripsi, 150, '... ') !!}
                <a href="{{ route('public.berita.detail', $item->slug) }}" class="stretched-link text-decoration-none text-primary">baca lebih lanjut</a>
                <div class="justify-content-end">
                    <small><i class="text-muted">Dipublikasikan pada tanggal {{ $item->created_at->format('j F Y') }}</i></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
