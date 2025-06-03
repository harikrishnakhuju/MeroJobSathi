@props(['size'=> 'base','tag'])

@php
    $classes = "bg-white/10 rounded-xl hover:bg-white/20  transistion-colors duration-300";

    if ($size == 'base'){
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size == 'small') {
        $classes .= " px-2 text-2xs";
    }

@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}" >{{ $tag->name }}</a>
