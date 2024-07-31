<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div id="search" class="col-10 p-2 mx-auto">
    
    <p>Kết quả tìm kiếm cho {{$keyword}}</p>

    {{-- kết quả tìm kiếm --}}
    <div id="ketquatim">
        <div class="list-group">
            @if (empty($listsp))
                <h1>Không tìm thấy sản phẩm nào</h1>
            @else
                @foreach ($listsp as $sp)
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $sp->name }}</h5>
                            <small>{{ $sp->price }}</small>
                        </div>
                        <p class="mb-1">{{ $sp->description }}</p>
                    </a>
                @endforeach
            @endif
        </div>

        {{-- phần phân trang --}}
        <div class="d-flex justify-content-center mt-3">
            {{-- {{ $listsp->withQueryString()->links() }} --}}
        </div>

    </div>
</div>
