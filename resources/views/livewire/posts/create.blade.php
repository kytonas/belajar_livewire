<div>
   <x-flash-message></x-flash-message>

    <div class="card">
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-2">
                    <textarea name="body" wire:model="form.body" class="form-control" id="body" rows="3" placeholder="What's on your mind?" ></textarea>
                    @error('form.body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-content-end">
                    <button class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
