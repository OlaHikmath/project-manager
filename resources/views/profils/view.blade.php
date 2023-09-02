@extends('master')

@section('title')
    Voir son profile
@endsection

@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
        <div class="bg-black-50">
        <div class="content content-full text-center">
            <div class="my-3">
            <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar13.jpg" alt="">
            </div>
            <h1 class="h2 text-white mb-0">John Parker</h1>
            <span class="text-white-75">UI Designer</span>
        </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Stats -->
    <div class="bg-body-extra-light">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-6">
                    <div class="fs-sm fw-semibold text-muted text-uppercase">Projets sur lesquel vous avez participer</div>
                    <a class="link-fx fs-3" href="javascript:void(0)">17980</a>
                </div>
                <div class="col-6 col-md-6">
                    <div class="fs-sm fw-semibold text-muted text-uppercase">Projets terminés sur lesquel vous avez participer</div>
                    <a class="link-fx fs-3" href="javascript:void(0)">27</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Stats -->

    <!-- Page Content -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-4">
            <form action="be_blocks_forms.html" method="POST">
            <div class="block block-rounded">
                <div class="block-header block-header-default block-header-rtl">
                    <h3 class="block-title">Informations Personnelles</h3>
                </div>
                <div class="block-content">
                <div class="row justify-content-center py-sm-3 py-md-5">
                    <div class="col-sm-10 col-md-8">
                        <div class="mb-4">
                            <label class="form-label" for="block-form6-username">Username</label>
                            <input type="text" class="form-control" id="block-form6-username" name="block-form6-username" placeholder="Enter your username..">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="block-form6-password">Password</label>
                            <input type="password" class="form-control" id="block-form6-password" name="block-form6-password" placeholder="Enter your password..">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            </form>
        </div>
    </div>
    <!-- END Page Content -->
</main>
@endsection