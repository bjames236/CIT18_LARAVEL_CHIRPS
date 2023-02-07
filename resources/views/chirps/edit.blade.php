<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $chirp->message) }}</textarea>
            <textarea
                name="firstName"
                placeholder="{{ __('Enter your first Name') }}"
            >{{ old('firstName', $chirp->firstName) }}</textarea>
            <textarea
                name="lastName"
                placeholder="{{ __('Enter your last Name') }}"
            >{{ old('lastName', $chirp->lastName) }}</textarea>
            <textarea
                name="middleName"
                placeholder="{{ __('Enter your middle Name') }}"
            >{{ old('middleName', $chirp->middleName) }}</textarea>
            <textarea
                name="address"
                placeholder="{{ __('Enter your address') }}"
            >{{ old('address', $chirp->address) }}</textarea>
            <textarea
                name="email"
                placeholder="{{ __('Enter your email') }}"
            >{{ old('email', $chirp->email) }}</textarea>
            <textarea
                name="contactNumber"
                placeholder="{{ __('Enter your contact number') }}"
            >{{ old('contactNumber', $chirp->contactNumber) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>