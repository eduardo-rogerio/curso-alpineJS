@extends('layouts.base')

<div x-data="{open:true}" class="ml-3 mt-4">
    <button type="button" x-on:click="open = !open">Abre/Fecha</button>
    <p x-show="open">
        Paragrafo...
    </p>
</div>
