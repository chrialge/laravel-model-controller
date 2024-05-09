@extends('layout.app')

@section('content')
    <div class="p-5 mb-4 bg-dark text-light">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Example button
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-2">

            <div class="col">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="nameHelper" placeholder="name" />
                        <small id="nameHelper" class="form-text text-muted">Insert your name</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                        <small id="emailHelpId" class="form-text text-muted">Insert your email</small>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button class=" border-0">
                        <a class="btn btn-primary btn-sm " href="#" role="button">Submit </a>
                    </button>
                </form>
            </div>

            <div class="col py-3">
                <img src="https://www.altrasoluzione.com/images/blog/siti-per-scaricare-immagini-gratis-legalmente/immagini-gratis-big.jpg"
                    class="w-100" alt="">
            </div>
        </div>


    </div>
@endsection
