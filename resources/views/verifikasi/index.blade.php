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
                        Daftar Verifikasi
                    </h1>
                    <p>Daftar pengajuan yang belum di verifikasi</p>
                </div>
            </div>
        </div>

        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nama Usaha</flux:table.column>
                <flux:table.column>Jumlah Karyawan</flux:table.column>
                <flux:table.column>Jumlah Usaha</flux:table.column>
                <flux:table.column>pinjaman</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                <flux:table.row>
                    <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                    <flux:table.cell>71</flux:table.cell>
                    <flux:table.cell>18</flux:table.cell>
                    <flux:table.cell>10000000K0</flux:table.cell>
                    <flux:table.cell>
                        <flux:button variant="primary">Verif</flux:button>
                        <flux:button variant="danger">Tolak</flux:button>
                    </flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        </flux:table>
        </div>
</x-layouts::app>
