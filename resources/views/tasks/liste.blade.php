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
</main>
@endsection