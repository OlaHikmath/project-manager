@extends('master')

@section('title')
    Liste des utilisateurs
@endsection

@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="block block-rounded mx-5 mt-5">
        <div class="block-header block-header-default">
          <h3 class="block-title">La liste de tous les tâches</h3>
          <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-user">Ajouter un utilisateur</button>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
            <thead>
              <tr>
                <th class="text-center">Nom</th>
                <th>Prénom</th>
                <th class="d-none d-sm-table-cell">Email</th>
                <th class="d-none d-sm-table-cell">Rôle</th>
                <th >Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center fs-sm">1</td>
                <td class="fw-semibold fs-sm">Judy Ford</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client1<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">2</td>
                <td class="fw-semibold fs-sm">Jack Greene</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client2<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">3</td>
                <td class="fw-semibold fs-sm">David Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client3<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">4</td>
                <td class="fw-semibold fs-sm">Justin Hunt</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client4<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">5</td>
                <td class="fw-semibold fs-sm">Adam McCoy</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client5<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">6</td>
                <td class="fw-semibold fs-sm">Adam McCoy</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client6<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">7</td>
                <td class="fw-semibold fs-sm">Albert Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client7<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">8</td>
                <td class="fw-semibold fs-sm">Laura Carr</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client8<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">9</td>
                <td class="fw-semibold fs-sm">Ralph Murray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client9<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">10</td>
                <td class="fw-semibold fs-sm">Susan Day</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client10<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <!-- END Page Content -->

    <!-- Tabs in Modal -->
    <div class="modal fade" id="modal-add-user" tabindex="-1" role="dialog" aria-labelledby="modal-add-user" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
              <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
                <li class="nav-item">
                  <button type="button" class="nav-link active" id="btabs-alt-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-home" role="tab" aria-controls="btabs-alt-static-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" id="btabs-alt-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-profile" role="tab" aria-controls="btabs-alt-static-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item ms-auto">
                  <button type="button" class="nav-link" id="btabs-alt-static-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-settings" role="tab" aria-controls="btabs-alt-static-settings" aria-selected="false">
                    <i class="si si-settings"></i>
                    <span class="visually-hidden">Settings</span>
                  </button>
                </li>
              </ul>
              <div class="block-content tab-content">
                <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel" aria-labelledby="btabs-alt-static-home-tab" tabindex="0">
                  <h4 class="fw-normal">Home Content</h4>
                  <p>...</p>
                </div>
                <div class="tab-pane" id="btabs-alt-static-profile" role="tabpanel" aria-labelledby="btabs-alt-static-profile-tab" tabindex="0">
                  <h4 class="fw-normal">Profile Content</h4>
                  <p>...</p>
                </div>
                <div class="tab-pane" id="btabs-alt-static-settings" role="tabpanel" aria-labelledby="btabs-alt-static-settings-tab" tabindex="0">
                  <h4 class="fw-normal">Settings Content</h4>
                  <p>...</p>
                </div>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Perfect</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- END Tabs in Modal -->
</main>
@endsection