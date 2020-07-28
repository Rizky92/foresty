@foreach ($herbaria as $item)
<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-2">
            @if (!is_null($item->image))
            <img src="{{ $item->image->img_path }}" class="card-img" alt="No Image found" class="img-fluid img-thumbnail" height="154px" style="object-fit: cover">
            @endif
        </div>
        <div class="col">
            <div class="card-body">
                <h4 class="card-title">{{ $item->flora->nama }} (<i>{{ $item->latin }}</i>)</h4>
                <p class="card-text">Lokasi: {{  $item->gazetteer->nama }}, {{ $item->minoreArea->nama }}, {{ $item->majoreArea->nama }}</p>
            </div>
            <div class="card-footer mt-sm-n2">
                <a href="{{ route('public.herbarium.detail', $item->slug) }}" class="stretched-link text-decoration-none text-muted">detail</a>
            </div>
        </div>
    </div>
</div>
@endforeach
