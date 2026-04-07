<x-layouts::app :title="__('Applicant')">

    <div class="container mx-auto mt-10 mb-10 px-10">
        <div class="grid grid-cols-8 gap-4 mb-4 p-5">
            <div class="col-span-4 mt-2">
                <h1 class="text-3xl font-bold">
                    Daftar Pangajuan
                </h1>
            </div>
            <div class="bg-black p-5 rounded shadow-sm">
                <form action="{{ route('applicant.create') }}" method="POST">
                    @csrf

                    <div class="py-2">
                        <flux:input type="text" label="nama Usaha" />
                        <flux:input type="number" label="NIB" />
                        <flux:input type="number" label="NPWP" />
                        <flux:input type="number" label="Omset/bulan" />
                        <flux:input type="number" label="Jumlah Karyawan" />
                        <flux:input type="number" label="Jumlah usaha" />
                    </div>
            </div>
            <div class="mt-3">
                <flux:button type=submit variant="primary">Tambahkan</flux:button>
                <flux:button variant="danger">kembali</flux:button>
            </div>

</x-layouts::app>
