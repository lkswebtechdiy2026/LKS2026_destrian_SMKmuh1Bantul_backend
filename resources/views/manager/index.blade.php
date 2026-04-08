<x-layouts::app :title="__('Dashboard')">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>

    <body>

        <div class="container mx-auto mt-10 mb-10 px-10">
            <div class="grid grid-cols-8 gap-4 mb-4 p-5">
                <div class="col-span-4 mt-2">
                    <h1 class="text-3xl font-bold">
                        Daftar manager
                    </h1>
                </div>
            </div>
        </div>

        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nama Usaha</flux:table.column>
                <flux:table.column>Status</flux:table.column>
                <flux:table.column>Pinjaman</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                <flux:table.row>
                    <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Verif</flux:badge>
                        <flux:badge color="green" size="sm" inset="top bottom">analisis</flux:badge>
                    </flux:table.cell>
                    <flux:table.cell>2000000</flux:table.cell>
                    <flux:table.cell>
                        <flux:button variant="primary">lanjut</flux:button>
                        <flux:button variant="danger">Tolak</flux:button>
                    </flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        </flux:table>

        </div>
</x-layouts::app>
