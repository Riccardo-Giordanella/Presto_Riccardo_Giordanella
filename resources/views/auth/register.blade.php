<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5 mb-5">
                    Registrati
                </h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center height-custom">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}" class="bg-secondary-subtle shadow rounded p-5">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Indirizzo e-mail</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Registrati</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>