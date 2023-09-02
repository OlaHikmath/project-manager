@extends('master')

@section('title')
    Liste des tâches
@endsection

@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="block block-rounded mx-5 mt-5">
        <div class="block-header block-header-default">
          <h3 class="block-title">La liste de tous les tâches</h3>
          <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-task">Ajouter une tâche</button>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
            <thead>
              <tr>
                <th class="text-center">Nom tâche</th>
                <th>Nom utilisateur</th>
                <th class="d-none d-sm-table-cell">Statut</th>
                <th class="d-none d-sm-table-cell">Date de creation</th>
                <th >Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center fs-sm">1</td>
                <td class="fw-semibold fs-sm">
                  client1<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell fs-sm">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
                <td>
                  <div class="row px-3">
                    <div class="col-4">
                      <a href="{{ route('tasks-detail') }}"><i class="si si-eye fa-1x"></i></a>
                    </div>
                    <div class="col-4">
                      <a href="" data-bs-toggle="modal" data-bs-target="#modal-update-task"><i class="si si-pencil fa-x1"></i></a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <!-- END Page Content -->

    <!-- Tabs in Modal -->
    <div class="modal fade" id="modal-add-task" tabindex="-1" role="dialog" aria-labelledby="modal-add-task" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block block-rounded block-transparent mb-0">
            <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="btabs-alt-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-home" role="tab" aria-controls="btabs-alt-static-home" aria-selected="true">Ajouter une tâche</button>
              </li>
            </ul>
            <form action="be_blocks_forms.html" method="POST">
              <div class="block-content tab-content">
                  <div class="block block-rounded">
                    <div class="block-content">
                      <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8">
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-username">Nom de la tâche</label>
                            <input type="text" class="form-control form-control-alt" id="block-form2-username" name="name_task" placeholder="Enter your username..">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-password">Preénom</label>
                            <input type="text" class="form-control form-control-alt" id="block-form2-password" name="block-form2-password" placeholder="Enter your password..">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-password">Email</label>
                            <input type="email" class="form-control form-control-alt" id="block-form2-password" name="block-form2-password" placeholder="Enter your password..">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Tabs in Modal -->

    <!-- Tabs in Modal -->
    <div class="modal fade" id="modal-update-task" tabindex="-1" role="dialog" aria-labelledby="modal-update-task" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block block-rounded block-transparent mb-0">
            <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="btabs-alt-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-home" role="tab" aria-controls="btabs-alt-static-home" aria-selected="true">Ajouter un utilisateur</button>
              </li>
            </ul>
            <form action="be_blocks_forms.html" method="POST">
              <div class="block-content tab-content">
                  <div class="block block-rounded">
                    <div class="block-content">
                      <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8">
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-username">Nom</label>
                            <input type="text" class="form-control form-control-alt" id="block-form2-username" name="block-form2-username" placeholder="Enter your username..">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-password">Preénom</label>
                            <input type="text" class="form-control form-control-alt" id="block-form2-password" name="block-form2-password" placeholder="Enter your password..">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="block-form2-password">Email</label>
                            <input type="email" class="form-control form-control-alt" id="block-form2-password" name="block-form2-password" placeholder="Enter your password..">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Mettre à jour</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Tabs in Modal -->
</main>
@endsection