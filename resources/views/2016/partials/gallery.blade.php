@section('css')
<style type="text/css">
    .flex-row {
        display: flex;
        flex-wrap: wrap;
    }
    .flex-row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }

    .flex-row .thumbnail,
    .flex-row .caption {
        flex-direction: column;
        display: flex;
        flex: 1 0 auto;
        height: auto;
        position: relative;
        text-align: center;
    }
    .flex-text {
        flex-grow: 1;
    }
    .flex-row img {
        min-width: 0;
        width: 100%;
    }
</style>
@endsection

<h3>Gallery</h3>

<h4>การอบรมเตรียมความพร้อม</h4>

@foreach ($gallery['prep'] as $idx => $title)
    @if ($idx % 3 === 0)
        <div class="row flex-row">
    @endif

    <div class="col-md-4">
        <div class="thumbnail">
            <img src="{{ asset('img/gallery/2016/th-cen-a/prep/' . ($idx + 1) . '.jpg') }}" alt="{{ $title }}">
            <div class="caption">
                <span><b>ภาพที่ {{ $idx + 1 }}</b><br>{{ $title }}</span>
            </div>
        </div>
    </div>

    @if ($idx % 3 === 2)
        </div>
    @endif
@endforeach

@if (count($gallery['prep']) % 3 !== 0)
    </div>
@endif

<h4>การแข่งขัน</h4>

@foreach ($gallery['contest'] as $idx => $title)
    @if ($idx % 3 === 0)
        <div class="row flex-row">
    @endif

    <div class="col-md-4">
        <div class="thumbnail">
            <img src="{{ asset('img/gallery/2016/th-cen-a/contest/' . ($idx + 1) . '.jpg') }}" alt="{{ $title }}">
            <div class="caption">
                <span><b>ภาพที่ {{ $idx + 1 }}</b><br>{{ $title }}</span>
            </div>
        </div>
    </div>

    @if ($idx % 3 === 2)
        </div>
    @endif
@endforeach

@if (count($gallery['contest']) % 3 !== 0)
    </div>
@endif

@push('script')

@endpush
