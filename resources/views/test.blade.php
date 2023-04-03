@extends('layouts.base')

<div x-data="{ open: false}">
    <button @click="open = !open" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        click me
    </button>
    <div x-show="open" @click.outside="open = false">
        Contents...
    </div>
</div>


