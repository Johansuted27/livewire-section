<div>

    <div class="mb-5">
        <button wire:click="cardDetail" class="btn btn-primary">Data Pribadi</button>
        <button wire:click="cardJob" class="btn btn-primary">Riwayat Pekerjaan</button>
        <button wire:click="cardPassword" class="btn btn-primary">Ubah Password</button>
    </div>

    @if ($show_detail == false)
    @else
        <livewire:card-detail></livewire:card-detail>
    @endif

    @if ($show_job == false)
    @else
        <livewire:card-job></livewire:card-job>
    @endif

    @if ($show_password == false)
    @else
        <livewire:card-password></livewire:card-password>
    @endif


    {{-- <button wire:click.prefetch="toggleContent">Show Content</button>

    @if ($contentIsVisible)
        <span>Some Content...</span>
    @endif --}}
</div>
