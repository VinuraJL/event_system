@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
]) !!}>
    <option value="">Select</option>
    @foreach (config('countries') as $key => $name)
        <option value="{{ $key }}">{{ $name }}</option>
    @endforeach
</select>
