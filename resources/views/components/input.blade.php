@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-rojo-light focus:ring focus:ring-rojo-light focus:ring-opacity-50']) !!}>
