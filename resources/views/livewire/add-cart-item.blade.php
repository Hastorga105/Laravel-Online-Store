<div x-data>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Available stock {{$quantity}}</span>
    </p>
    <div class="flex ">
        <div class="">
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty<=1"
            wire:loading.attr="disable"
            wire:target="decrement"
            wire:click="decrement">
                -
            </x-jet-secondary-button>
            
            <span class="mx-2 text-gray-700">{{$qty}}</span>
            
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty>=$wire.quantity"
            wire:loading.attr="increment"
            wire:target="increment"
            wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button class="w-full" color="orange">
                Add to cart
            </x-button>

        </div>
    </div>
</div>
