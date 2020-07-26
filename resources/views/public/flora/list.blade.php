@foreach ($floras as $item)
<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-2">
            <img src="{{ $item->img_path }}" class="card-img" alt="{{ $item->nama }}" class="d-block m-auto img-fluid" height="163px" style="object-fit: cover">
        </div>
        <div class="col">
            <div class="card-body">
                <h4 class="card-title"><a href="{{ route('public.flora.detail', $item->slug) }}" class="stretched-link text-decoration-none text-dark" style="transform: rotate(0)">{{ $item->nama }}</a></h4>
                <p class="card-text text-justify">{{  Str::limit($item->deskripsi, 250, '...') }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
