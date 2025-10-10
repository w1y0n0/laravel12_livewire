<div>
    <flux:modal name="edit-catatan" class="md:w-900">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Edit Catatan</flux:heading>
                <flux:text class="mt-2">Make changes to your catatan details.</flux:text>
            </div>

            <flux:input label="Judul" wire:model="judul" placeholder="Masukkan judul catatan" />
            <flux:textarea label="Isi" wire:model="isi" placeholder="Masukkan isi catatan" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click="update">Update changes</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
