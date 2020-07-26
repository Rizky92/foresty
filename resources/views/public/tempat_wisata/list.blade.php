@foreach ($tempatWisatas as $item)
<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-2">
            <img src="{{ $item->img_path }}" class="card-img" alt="..." class="img-fluid img-thumbnail" height="154px" style="object-fit: cover">
        </div>
        <div class="col">
            <div class="card-body">
                <h4 class="card-title">{{ $item->nama }}</h4>
                <p class="card-text">Lokasi: {{ Str::limit($item->gazetteer->name, 250) }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
