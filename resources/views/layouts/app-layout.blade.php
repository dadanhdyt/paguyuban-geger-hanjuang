@props(['title'])
<x-base-layout :title="$title">
    <!-- start:header -->
    <x-header></x-header>
    <!-- end:header -->
    {{ $slot ?? '' }}
</x-base-layout>