{{-- Modal button --}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallery">
    Galeri
</button>

<!-- Modal -->
<div class="modal fade" id="gallery" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="gallery-carousels" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" data-touch="true">
                            <img src="{{ asset('assets/frontend/img/slider1.jpg') }}" alt="...">
                        </div>
                        <div class="carousel-item" data-touch="true">
                            <img src="{{ asset('assets/frontend/img/slider2.jpg') }}" alt="...">
                        </div>
                        <div class="carousel-item" data-touch="true">
                            <img src="{{ asset('assets/frontend/img/slider3.jpg') }}" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#gallery-carousels" role="button" data-slide="prev" style="max-width: 7rem;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#gallery-carousels" role="button" data-slide="next" style="max-width: 7rem;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
