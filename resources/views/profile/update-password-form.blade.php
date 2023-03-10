<x-jet-form-section submit="updatePassword">
    <x-slot name="form">
        <div class="col-span-12 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Contraseña anterior') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-12 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Nueva contraseña') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-12 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirma la contraseña') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
        <br>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardando.') }}
        </x-jet-action-message>

        <x-jet-button class="float-right">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
