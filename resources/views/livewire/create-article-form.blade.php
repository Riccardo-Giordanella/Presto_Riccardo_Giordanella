<form class="bg-body-tertiary shadow rounded p-5 my-5" wire:submit="store">
    @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">{{__("ui.title")}}</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">{{__("ui.description")}}</label>
        <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">{{__("ui.price")}}</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.blur="price">
        @error('price')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <select id="category" wire:model="category" class="form-control @error('category') is-invalid @enderror">
            <option label selected>{{__("ui.catChoice")}}</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{__("ui.$category->name")}}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="d-flex justify content-center">
        <button type="submit" class="btn btn-dark">{{__("ui.create")}}</button>
    </div>
</form>