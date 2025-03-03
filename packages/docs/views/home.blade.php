@layout('docs::layout')


@section('sidebar')
    <!-- Sidebar start -->
    <div class="column is-3-desktop is-3-tablet">
        <aside class="menu">
            {!! $sidebar !!}
        </aside>
    </div>
    <!-- Sidebar end -->
@endsection


@section('content')
<!-- Actual contents start -->
<div class="column is-9-desktop is-9-tablet">
    <div class="container">
        <div class="is-pulled-right is-hidden-mobile">
            <a href="https://github.com/esyede/rakit/edit/master/packages/docs/data/{{ $filename }}.md" class="button is-link is-light is-small is-rounded" target="_blank">
                <span class="icon">
                    <svg id="i-github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32" height="32">
                        <path stroke-width="0" fill="currentColor" d="M32 0 C14 0 0 14 0 32 0 53 19 62 22 62 24 62 24 61 24 60 L24 55 C17 57 14 53 13 50 13 50 13 49 11 47 10 46 6 44 10 44 13 44 15 48 15 48 18 52 22 51 24 50 24 48 26 46 26 46 18 45 12 42 12 31 12 27 13 24 15 22 15 22 13 18 15 13 15 13 20 13 24 17 27 15 37 15 40 17 44 13 49 13 49 13 51 20 49 22 49 22 51 24 52 27 52 31 52 42 45 45 38 46 39 47 40 49 40 52 L40 60 C40 61 40 62 42 62 45 62 64 53 64 32 64 14 50 0 32 0 Z" />
                    </svg>
                </span>
                <span>Edit</span></a>
        </div>
        <div class="content">
            {!! $content !!}
        </div>
    </div>
</div>
<!-- Actual contents end -->
@endsection
