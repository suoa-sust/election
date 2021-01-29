<div>



    <form wire:submit.prevent="save">

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="card-body">

            <div class="form-group row">
                <label for="caption" class="col-sm-2 col-form-label">Caption*</label>
                <div class="col-sm-10">
                    <input type="text" wire:model="caption" name="caption" class="form-control" placeholder="Parts of Officers at SUST Club" required>
                    @error('caption') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tag" class="col-sm-2 col-form-label">Tag*</label>
                <div class="col-sm-10">
                    <input type="text" wire:model="tag" name="tag" class="form-control" placeholder="2018" required>
                    @error('tag') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="photo" class="col-sm-2 col-form-label">Image*</label>
                <div class="col-sm-10">
                    @if ($photo)
                        Photo Preview:
                        <img src="{{ $photo->temporaryUrl() }}" width="300px">
                    @endif
                    <input type="file" wire:model="photo" name="caption" class="form-control" placeholder="2018" required>
                        <div wire:loading wire:target="photo">Uploading...</div>
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Submit</button>
        </div>


    </form>

</div>
