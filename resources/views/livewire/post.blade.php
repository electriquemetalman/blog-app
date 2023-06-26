<div class="contact-form">
	<form id="fruitkha-contact" >
		<p>
			<input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="title" wire:model="title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" wire:model="image" hidden/>
            <label class="label" for="file">selectioner une image</label>
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
		</p>
		<p>
            <textarea class="form-control @error('paragraph1') is-invalid @enderror" id="paragraph1" cols="30" rows="10" placeholder="paragraph 1" wire:model="paragraph1"></textarea>
            @error('paragraph1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </p>
        <p>
            <textarea class="form-control @error('paragraph2') is-invalid @enderror" id="paragraph2" cols="30" rows="10" placeholder="paragraph 2" wire:model="paragraph2"></textarea>
            @error('paragraph2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </p>
        <p>
            <textarea class="form-control @error('paragraph3') is-invalid @enderror" id="paragraph3" cols="30" rows="10" placeholder="paragraph 3" wire:model="paragraph3"></textarea>
            @error('paragraph3')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </p>
        <p>
            <textarea class="form-control @error('paragraph4') is-invalid @enderror" id="paragraph4" cols="30" rows="10" placeholder="paragraph 4" wire:model="paragraph4"></textarea>
            @error('paragraph4')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </p>
		<p>
            <input type="submit" value="Valider" wire:click.prevent="storePost()">
            <input type="submit" value="Annuler" wire:click.prevent="cancelPost()">
            <div class="col-md-8 mb-2">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </p>
	</form>
</div>
