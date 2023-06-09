<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- first_name -->
        <div class="col-span-3">
            <x-label for="first_name" value="{{ __('First Name') }}" />
            <x-input id="first_name" type="text" class="mt-1 block w-full"
                wire:model.defer="state.first_name"
                autocomplete="name" />
            <x-input-error for="first_name" class="mt-2" />
        </div>

        <!-- last_name -->
        <div class="col-span-3">
            <x-label for="last_name" value="{{ __('Last Name') }}" />
            <x-input id="last_name" type="text" class="mt-1 block w-full"
                wire:model.defer="state.last_name"
                autocomplete="name" />
            <x-input-error for="last_name" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="col-span-6">
            <x-label for="name" value="{{ __('Full Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-3">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email"
                autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                    !$this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>

        <!-- phone -->
        <div class="col-span-3">
            <x-label for="phone" value="{{ __('Phone') }}" />
            <x-input id="phone" type="text" class="mt-1 block w-full"
                wire:model.defer="state.phone"
                autocomplete="name" />
            <x-input-error for="phone" class="mt-2" />
        </div>

        <div class="py-2 col-span-6">
            <div class="border-t border-gray-200"></div>
        </div>

        <!-- address -->
        <div class="col-span-6">
            <x-label for="address" value="{{ __('Address') }}" />
            <x-textarea id="address" class="mt-1 block w-full"
                wire:model.defer="state.address"
                autocomplete="name" />
            <x-input-error for="address" class="mt-2" />
        </div>

        <!-- city -->
        <div class="col-span-3">
            <x-label for="city" value="{{ __('City') }}" />
            <x-input id="city" type="text" class="mt-1 block w-full"
                wire:model.defer="state.city"
                autocomplete="city" />
            <x-input-error for="city" class="mt-2" />
        </div>

        <!-- state_province -->
        <div class="col-span-3">
            <x-label for="state_province" value="{{ __('State Province') }}" />
            <x-input id="state_province" type="text" class="mt-1 block w-full"
                wire:model.defer="state.state_province"
                autocomplete="state_province" />
            <x-input-error for="state_province" class="mt-2" />
        </div>

        <!-- zip_code -->
        <div class="col-span-2">
            <x-label for="zip_code" value="{{ __('Zip / Postal Code') }}" />
            <x-input id="zip_code" type="text" class="mt-1 block w-full"
                wire:model.defer="state.zip_code"
                autocomplete="zip_code" />
            <x-input-error for="zip_code" class="mt-2" />
        </div>

        <!-- country -->
        <div class="col-span-4">
            <x-label for="country" value="{{ __('Country') }}" />
            <x-input-country id="country" type="text" class="mt-1 block w-full"
                wire:model.defer="state.country"
                autocomplete="country" />
            <x-input-error for="country" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
