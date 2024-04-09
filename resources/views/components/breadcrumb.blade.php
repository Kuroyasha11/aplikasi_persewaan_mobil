<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light pt-0 pb-0 mt-0">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        @foreach($breadcrumb as $item)
            <li class="breadcrumb-item {{Request::fullUrl() == $item['url'] ? "active" : ""}}">
                <a href="{{$item['url']}}">{{$item['name']}}</a>
            </li>
        @endforeach
    </ol>
</nav>
