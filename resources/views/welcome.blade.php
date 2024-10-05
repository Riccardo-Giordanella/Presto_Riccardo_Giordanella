<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center flex-column height-custom">
                <h1 class="display-4">Presto.it</h1>
                <div class="my-3">
                    @auth
                    <a href="{{route('create.article')}}" class="btn btn-dark">Pubblica un articolo</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layout>