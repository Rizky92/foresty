<div id="carousels" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        @foreach ($galleries as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-touch="true">
            <img src="{{ $item->img_path }}" alt="..." class="w-100 h-auto">
            <div class="carousel-caption bg-black text-left">
                <h1 class="display-4"><b>KAWASAN HUTAN DENGAN TUJUAN KHUSUS</b></h1>
                <h1>Samboja</h1>
                <br>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousels" role="button" data-slide="prev" style="max-width: 7.5rem;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousels" role="button" data-slide="next" style="max-width: 7.5rem;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
