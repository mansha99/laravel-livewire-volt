<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Rule;
new class extends Component {
    public $count = 0;
    public function decrement()
    {
        $this->count--;
    }
    public function increment()
    {
        $this->count++;
    }
};
?>
<div>
    <div>
        <button wire:click="decrement">&nbsp;-&nbsp;</button>
        &nbsp;&nbsp; Hello count : {{ $this->count }} &nbsp;&nbsp;
        <button wire:click="increment">&nbsp;+&nbsp;</button>
    </div>
</div>
