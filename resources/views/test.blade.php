@extends('layouts.base')

<div
    x-data="{
        search: '',
        items:['foo', 'bar', 'baz'],

        get filteredItems(){
            return this.items.filter(i => i.includes(this.search))
        }
    }"
>
    <input x-model="search" placeholder="Search..."/>

    <ul>
        <template x-for="item" in filteredItems :key="item">
            <li x-text="item"></li>
        </template>
    </ul>
</div>


