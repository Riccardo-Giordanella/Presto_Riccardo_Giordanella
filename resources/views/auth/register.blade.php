<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5 mb-5">
                    {{__("ui.register")}}
                </h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center height-custom">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}" class="bg-secondary-subtle shadow rounded p-5">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{__("ui.name")}}</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{__("ui.confirm")}} password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">{{__("ui.register")}}</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>