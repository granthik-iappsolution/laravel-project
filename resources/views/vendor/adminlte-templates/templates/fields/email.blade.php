<!-- {{ $fieldTitle }} Field -->
<div class="form-group col-sm-6">
    @if($config->options->localized)
        @{!! html()->label(
            __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'))->for('{{ $fieldName }}') !!}
    @else
        @{!! html()->label('{{ $fieldTitle }}')->for('{{ $fieldName }}') !!}
    @endif
        @{!! html()->email('{{ $fieldName }}', null)->class('form-control') !!}
</div>