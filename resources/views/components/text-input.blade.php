@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' appearance-none block w-full bg-gray text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white ']) !!}>
