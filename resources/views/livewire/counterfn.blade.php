<?php
use function Livewire\Volt\{state};
//state
state(['count' => 0]);
//functions to update state
$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;
?>
<div>
    <div>
        <button wire:click="decrement">&nbsp;-&nbsp;</button>
        &nbsp;&nbsp; Hello count : {{ $this->count }} &nbsp;&nbsp;
        <button wire:click="increment">&nbsp;+&nbsp;</button>
    </div>
</div>
