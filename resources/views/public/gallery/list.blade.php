<div class="row row-cols-1 row-cols-md-5">
    @foreach ($galleries as $item)
    <div class="col mb-3">
        <div class="card shadow-sm">
            <img src="{{ $item->img_path }}" class="card-img-top d-block img-fluid pb-2" alt="{{ $item->judul }}" style="max-height: 8rem; object-fit: cover">
            <p class="text-center">{{ $item->judul }}</p>
        </div>
    </div>
    @endforeach
</div>
