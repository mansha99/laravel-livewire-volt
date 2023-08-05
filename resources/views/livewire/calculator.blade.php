<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Rule;
new class extends Component {
    #[Rule(['required', 'numeric'])]
    public $inputvalue = 0;
    public $result = null;

    public function updateResult()
    {
        $this->result = null;
        $this->validate();
        $this->result = $this->inputvalue * $this->inputvalue;
    }
};
?>
<div>
    <div>
        <form wire:submit="updateResult">
            <input type="text" wire:model="inputvalue" />
            <div style="color:red">
                @error('inputvalue')
                    {{ $message }}
                @enderror
            </div>
            <br />
            <button>Submit</button>
        </form>
        Square is {{ $result }}
    </div>
</div>
