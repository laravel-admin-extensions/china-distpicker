<div {!! admin_attrs($group_attrs) !!}>

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}} form-inline">

        <div id="{{ $id }}" {!! $attributes !!}>
            <select class="form-control" name="{{$name['province']}}"></select>&nbsp;
            <select class="form-control" name="{{$name['city']}}"></select>&nbsp;
            <select class="form-control" name="{{$name['district']}}"></select>&nbsp;
        </div>
        @include('admin::form.error')
        @include('admin::form.help-block')

    </div>
</div>

<script require="distpicker">
    $("#{{ $id }}").distpicker({
        province: '{{ $province }}',
        city: '{{ $city }}',
        district: '{{ $district }}'
    });
</script>
