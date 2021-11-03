<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Hello <?= $model['user']['name'] ?? '' ?></h1>
            <p class="col-lg-10 fs-4">by <a target="_blank" href="https://www.programmerzamannow.com/">Programmer Zaman
                    Now</a></p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <div class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                    <a href="/users/profile" class="w-100 btn btn-lg btn-primary">Profile</a>
                </div>
                <div class="form-floating mb-3">
                    <a href="/users/password" class="w-100 btn btn-lg btn-primary">Password</a>
                </div>
                <div class="form-floating mb-3">
                    <a href="/users/logout" class="w-100 btn btn-lg btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>