@props(['name','type' => 'text' , 'attributes' , 'class'])
<div class="mail row" style="margin-top: 10px">
    <div class="one">
        <i class="{{ $class }}"></i>
        <input
            type="{{ $type }}"
            class="form-control"
            required
            name="{{ $name }}"
            value="{{ old($name) }}"
            {{ $attributes }}
        >
    </div>
    <x-form.erorr name='{{$name}}'/>
</div>
