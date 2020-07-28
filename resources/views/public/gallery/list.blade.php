<div class="row row-cols-1 row-cols-md-3">
    @foreach ($galleries as $item)
    <div class="col mb-4">
        <div class="card shadow p-1">
            <img src="{{ $item->img_path }}" class="card-img-top img-thumbnail img-fluid" alt="{{ $item->judul }}" style="object-fit: cover; max-height: 200px">
            <a href="#galleryModal" class="stretched-link" data-toggle="modal" data-target="#galleryModal"></a>
        </div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryLabel">Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ $item->img_path }}" alt="..." class="d-block h-75 m-auto img-fluid" style="object-fit: contain">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
