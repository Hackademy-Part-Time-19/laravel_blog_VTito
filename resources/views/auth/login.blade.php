<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="mb-5">Accedi</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email') <span class=" small text-danger">{{$message}}</span> @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password') <span class=" small text-danger">{{$message}}</span> @enderror
                   <div class="mt-2" ><button type="submit" class="btn btn-primary">Login</button></div> 
                </form>
            </div>
        </div>
    </div>

</x-layout>
