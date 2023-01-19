@extends('layouts.site')

@section('content')
    <section>
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <h1>
                    Wiki Jurispruêencia
                </h1>
            </div>

            <div>
                <form action="" method="GET">

                    <div class="input-group flex-nowrap">

                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <input type="text" class="form-control" name="search" placeholder="Pesquise aqui" aria-label="Username" aria-describedby="addon-wrapping">

                        <button class="btn btn-outline-secondary" type="submit">Button</button>

                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection