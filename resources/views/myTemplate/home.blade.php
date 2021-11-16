<x-my-app>

    <section class="h-screen flex flex-col">
        <header class="flex flex-col md:flex md:flex-row ">
            <main class="bg-indigo-900 flex justify-between md:justify-center md:w-2/12 p-4">
                <x-logo/>
                <x-menu-icon/>
            </main>
            <section class="bg-indigo-50 flex justify-between md:w-10/12 py-2 px-4 md:px-10 items-center">
                <x-header-menu/>
            </section>
        </header>
        <main class="flex flex-grow overflow-hidden">
            <x-nav-menu/>
            <section class="bg-indigo-100 md:w-10/12 px-4 py-10 md:p-10">
                <x-heading-page/>
                <x-main-content/>
            </section>
        </main>
    </section>

</x-my-app>
