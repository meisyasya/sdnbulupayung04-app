<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header text-center">
            <h5>Cari Artikel</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('search') }}" class="d-flex justify-content-between" method='GET'>
                <div class="input-group">
                    <input class="form-control" name="keyword" type="text" placeholder="Cari Artikel..." value="{{ request('keyword') }}">
                    <button class="btn btn-primary" id="button-search" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="d-flex flex-wrap">
                @foreach ($categories as $item)
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-primary text-white m-1">{{ $item->name }}</a>
                    </li>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>
