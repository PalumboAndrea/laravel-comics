<header class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex m-0 justify-content-center">
                @foreach($headerMenuItems as $item)
                    <li class="ms-2">
                        {{ $item['name'] }}
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>

</header>