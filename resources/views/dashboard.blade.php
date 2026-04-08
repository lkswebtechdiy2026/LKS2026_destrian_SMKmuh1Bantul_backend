<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-4">
                    <flux:text class="text-base" variant="strong">Total pengajuan</flux:text>
                    <flux:text class="text-xs">3 Pengajuan dari user</flux:text>
                </div>
                <x-placeholder-pattern class="absolute inset-0 size-full dark-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-4">
                    <flux:text class="text-base" variant="strong">Total dana yang di ajukan</flux:text>
                    <flux:text class="text-xs">Rp 19000000</flux:text>
                </div>
                <x-placeholder-pattern class="absolute inset-0 size-full dark-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                    <flux:text class="text-base" variant="strong">Total diterima</flux:text>
                    <flux:text class="text-xs">48 pengajuan telah di terima</flux:text>
                <x-placeholder-pattern class="absolute inset-0 size-full dark-100/20" />
            </div>
        </div>
</x-layouts::app>
