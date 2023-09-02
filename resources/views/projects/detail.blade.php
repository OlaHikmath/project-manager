@extends('master')

@section('title')
    Détail d'un projet
@endsection

@section('content')
<main id="main-container">
    <div class="content">
        <!-- Basic -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Les informations concernant le projet </h3>
          </div>
          <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
              <div class="row push">
                <div class="col-lg-4">
                  <p class="fs-sm text-muted">
                    
                  </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                  <div class="mb-4">
                    <label class="form-label" for="example-text-input">Text</label>
                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="example-email-input">Email</label>
                    <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="example-password-input">Password</label>
                    <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="example-textarea-input">Textarea</label>
                    <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Basic -->
    </div>
</main>
@endsection