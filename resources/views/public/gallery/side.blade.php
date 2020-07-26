{{-- Card galleries --}}
<div class="card">
    <a href="#galleryModal" class="btn btn-sm btn-primary text-uppercase" data-toggle="modal" data-target="#galleryModal">Lihat Semua</a>
</div>

<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryLabel">@yield('gallery')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="galleryCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($galleries as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-touch="true">
                            <img src="{{ $item->img_path }}" alt="..." class="d-block h-75 m-auto img-fluid">
                            @section('gallery')
                                {{ $item->judul }}
                            @endsection
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev" style="max-width: 7.5rem;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next" style="max-width: 7.5rem;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
