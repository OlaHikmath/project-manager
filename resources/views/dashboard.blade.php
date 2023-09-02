@extends('master')

@section('title')
    Daschboard
@endsection

@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="content">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
        <div class="flex-grow-1 mb-1 mb-md-0">
            <h1 class="h3 fw-bold mb-1">
            Dashboard
            </h1>
            <h2 class="h6 fw-medium fw-medium text-muted mb-0">
            Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything looks great.
            </h2>
        </div>
        <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
            <a class="btn btn-sm btn-alt-secondary space-x-1" href="{{ route('profils-update') }}">
            <i class="fa fa-cogs opacity-50"></i>
            <span>Settings</span>
            </a>
        </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
        <div class="col-sm-6 col-xxl-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                <dt class="fs-3 fw-bold">32</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Nombre de projets</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-gem fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span>Voir tous</span>
                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
            </div>
            <!-- END Pending Orders -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- New Customers -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                <dt class="fs-3 fw-bold">124</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Nombre d'utilisateurs</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-user-circle fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span>Voir tous</span>
                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
            </div>
            <!-- END New Customers -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- Messages -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                <dt class="fs-3 fw-bold">45</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Nombre de projets terminés</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                <i class="far fa-paper-plane fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span>Vor tous</span>
                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
            </div>
            <!-- END Messages -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- Conversion Rate -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                <dt class="fs-3 fw-bold">4.5%</dt>
                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Nobre de tâches</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                <i class="fa fa-chart-bar fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span>Voir tous</span>
                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
            </div>
            <!-- END Conversion Rate-->
        </div>
        </div>
        <!-- END Overview -->

        <!-- Recent Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Projets récents</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- Recent Orders Table -->
                <div class="table-responsive">
                <table class="table table-hover table-vcenter">
                    <thead>
                    <tr>
                        <th>Projets</th>
                        <th class="d-none d-xl-table-cell">Chef projet</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell text-end">Date de création</th>
                    </tr>
                    </thead>
                    <tbody class="fs-sm">
                    <tr>
                        <td>
                        <a class="fw-semibold" href="javascript:void(0)">
                            ORD.00925                  </a>
                        <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                        </td>
                        <td class="d-none d-xl-table-cell">
                        <a class="fw-semibold" href="javascript:void(0)">Adam McCoy</a>
                        <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                        </td>
                        <td>
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">8 min ago</td>
                    </tr>
                    <tr>
                        <td>
                        <a class="fw-semibold" href="javascript:void(0)">
                            ORD.00924                  </a>
                        <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                        </td>
                        <td class="d-none d-xl-table-cell">
                        <a class="fw-semibold" href="javascript:void(0)">Ralph Murray</a>
                        <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                        </td>
                        <td>
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">10 min ago</td>
                    </tr>
                    <tr>
                        <td>
                        <a class="fw-semibold" href="javascript:void(0)">
                            ORD.00923                  </a>
                        <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                        </td>
                        <td class="d-none d-xl-table-cell">
                        <a class="fw-semibold" href="javascript:void(0)">Ralph Murray</a>
                        <p class="fs-sm fw-medium text-muted mb-0">Product Designer</p>
                        </td>
                        <td>
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">13 min ago</td>
                    </tr>
                    <tr>
                        <td>
                        <a class="fw-semibold" href="javascript:void(0)">
                            ORD.00922                  </a>
                        <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                        </td>
                        <td class="d-none d-xl-table-cell">
                        <a class="fw-semibold" href="javascript:void(0)">Barbara Scott</a>
                        <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                        </td>
                        <td>
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">3 min ago</td>
                    </tr>
                    <tr>
                        <td>
                        <a class="fw-semibold" href="javascript:void(0)">
                            ORD.00921                  </a>
                        <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                        </td>
                        <td class="d-none d-xl-table-cell">
                        <a class="fw-semibold" href="javascript:void(0)">Danielle Jones</a>
                        <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                        </td>
                        <td>
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                        </td>
                        <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">15 min ago</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <!-- END Recent Orders Table -->
            </div>
        </div>
        <!-- END Recent Orders -->
    </div>
    <!-- END Page Content -->
</main>
@endsection