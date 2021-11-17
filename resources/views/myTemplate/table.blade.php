<x-my-app>

    <x-heading-page>
        <x-slot name="title">
            Table
        </x-slot>
    </x-heading-page>
    <section>
        <table class="bg-indigo-50 w-full whitespace-nowrap p-4 rounded-md shadow">
            <x-table-head/>
            <x-table-body/>
        </table>
        <x-pagination/>
    </section>

</x-my-app>
