<x-auth-app>

    <section class="bg-indigo-900 min-h-screen mx-auto pt-6 pb-6">
        <main class="mx-auto max-w-md">
            {{-- logo auth--}}
            <x-auth-logo/>
            <form class="bg-indigo-50 rounded-lg  mt-6 p-8 " action="#">
                {{-- title auth --}}
                <x-title-auth>
                    Register Page!
                </x-title-auth>
                <div class="border-b-2 border-gray-400 w-16 opacity-50 mx-auto mt-6"></div>
                {{-- input email --}}
                <div class="mt-6">
                    <x-label >
                        <x-slot name="for">
                            email
                        </x-slot>
                        email:
                    </x-label>
                    <x-input>
                        <x-slot name="placeholder">
                            example@gmail.com
                        </x-slot>
                        <x-slot name="id">
                            email
                        </x-slot>
                        <x-slot name="type">
                            text
                        </x-slot>
                    </x-input>
                </div>
                {{-- input password --}}
                <div class="mt-6">
                    <x-label>
                        <x-slot name="for">
                            password
                        </x-slot>
                        password:
                    </x-label>
                    <x-input>
                        <x-slot name="placeholder"></x-slot>
                        <x-slot name="id">
                            password
                        </x-slot>
                        <x-slot name="type">
                            password
                        </x-slot>
                    </x-input>
                </div>
                {{-- input confirm password --}}
                <div class="mt-6">
                    <x-label>
                        <x-slot name="for">
                            confirmPassword
                        </x-slot>
                        confirm password:
                    </x-label>
                    <x-input>
                        <x-slot name="placeholder"></x-slot>
                        <x-slot name="id">
                            confirmPassword
                        </x-slot>
                        <x-slot name="type">
                            password
                        </x-slot>
                    </x-input>
                </div>
                <div class="mt-6">
                    <x-label>
                        <x-slot name="for"></x-slot>
                        ready an account?
                        <a class="text-indigo-500 hover:text-indigo-600 text-xs" href="{{route('login')}}">login</a>
                    </x-label>
                </div>
                {{-- button login --}}
                <div class="flex justify-end">
                    <x-button-auth>
                        Register
                    </x-button-auth>
                </div>
            </form>
        </main>
    </section>

</x-auth-app>
