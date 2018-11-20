<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}} form-inline">

        @include('admin::form.error')
        <div id="{{ $id }}" {!! $attributes !!}>
            <select class="form-control" name="{{$name['province']}}"></select>
            <select class="form-control" name="{{$name['city']}}"></select>
            <select class="form-control" name="{{$name['district']}}"></select>
        </div>
        @include('admin::form.help-block')

    </div>
</div>