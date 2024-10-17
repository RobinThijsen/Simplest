@teleport('body')
<dialog id="modal-{{ $name }}" class="modal"
        wire:modal="{{ $name }}"
        x-modal-open="0"
        x-modal-display="{{ $display }}"
        x-clock
        wire:ignore.self>
    <button type="button" wire:modal-trigger="{{ $name }}" class="modal__close">
        {{-- TODO close icon --}}
    </button>

    <div class="modal__main">
        {{ $slot }}
    </div>
</dialog>
@endteleport
