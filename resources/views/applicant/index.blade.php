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
                        Daftar Pengajuan
                    </h1>
                </div>
                <div class="col-span-4">
                    <div class="flex justify-end">
                        <a href="{{ route('applicant.create') }}">
                            <flux:button variant="primary">Tambah Pengajuan</flux:button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nama Usaha</flux:table.column>
                <flux:table.column>NIB</flux:table.column>
                <flux:table.column>NPWP</flux:table.column>
                <flux:table.column>Omset/bulan</flux:table.column>
                <flux:table.column>Jumlah Karyawan</flux:table.column>
                <flux:table.column>Jumlah Usaha</flux:table.column>
                <flux:table.column>Pinjaman</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                <flux:table.row>
                    <flux:table.column>Usaha Berkah</flux:table.column>
                    <flux:table.column>47367428</flux:table.column>
                    <flux:table.column>7849327894279</flux:table.column>
                    <flux:table.column>1000000</flux:table.column>
                    <flux:table.column>118</flux:table.column>
                    <flux:table.column>18</flux:table.column>
                    <flux:table.column>19000000</flux:table.column>
                    <flux:table.cell>
                        <flux:button variant="primary">Edit</flux:button>
                        <flux:button variant="danger">Hapus</flux:button>
                    </flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        </flux:table>
        </div>
</x-layouts::app>
