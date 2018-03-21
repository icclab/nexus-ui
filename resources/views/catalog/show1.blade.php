@extends('layouts.default')
@section('content')
<h2>Wordpress Service</h2>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon" data-header-animation="true">
                <div class="card-icon">
                    <h2>Tiny</h2>
                </div>

            </div>

            <div class="card-body card-body-plan">
                <div class="card-actions-plan ">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card" rel="tooltip" data-placement="bottom" title="Fix Header">
                        <i class="material-icons">build</i>
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Launch Service">
                        <i class="material-icons">launch</i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Edit Plan">
                        <i class="material-icons">edit</i>
                    </button>
                </div>
                <h3 class="card-title card-title-plan">2 Cores <br> 2 GB RAM</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> plan created 2 days ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon" data-header-animation="true">
                <div class="card-icon">
                    <h2>Small</h2>
                </div>

            </div>

            <div class="card-body card-body-plan">
                <div class="card-actions-plan ">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card" rel="tooltip" data-placement="bottom" title="Fix Header">
                        <i class="material-icons">build</i>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Launch Service">
                        <i class="material-icons">launch</i>
                    </button>

                </div>
                <h3 class="card-title card-title-plan">4 Cores <br> 4 GB RAM</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> plan created 2 days ago
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon" data-header-animation="true">
                <div class="card-icon">
                    <h2>Medium</h2>
                </div>

            </div>

            <div class="card-body card-body-plan">
                <div class="card-actions-plan ">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card" rel="tooltip" data-placement="bottom" title="Fix Header">
                        <i class="material-icons">build</i>
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Launch Service">
                        <i class="material-icons">launch</i>
                    </button>

                </div>
                <h3 class="card-title card-title-plan">8 Cores <br> 8 GB RAM</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> plan created 2 days ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon" data-header-animation="true">
                <div class="card-icon">
                    <h2>Big</h2>
                </div>

            </div>

            <div class="card-body card-body-plan">
                <div class="card-actions-plan ">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card" rel="tooltip" data-placement="bottom" title="Fix Header">
                        <i class="material-icons">build</i>
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Launch Service">
                        <i class="material-icons">launch</i>
                    </button>

                </div>
                <h3 class="card-title card-title-plan">16 Cores <br> 16 GB RAM</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> plan created 2 days ago
                </div>
            </div>
        </div>
    </div>
</div>
@stop

<!--<div class="card-body ">-->
<!--    <div class="row">-->
<!--        <div class="col-md-6">-->
<!--            <div class="table-responsive">-->
<!--                <table class="table">-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <div class="flag">-->
<!--                                <i class="material-icons">dashboard</i>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>Wordpress Service</td>-->
<!--                        <td class="text-right"> Small</td>-->
<!--                        <td class="text-right"> 2 Cores</td>-->
<!--                        <td class="text-right action">-->
<!--                            <a class="nav-link" href="/catalog/1">-->
<!--                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Modify Service">-->
<!--                                    <i class="material-icons">edit</i>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <div class="flag">-->
<!--                                <i class="material-icons">dashboard</i>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>Wordpress Service</td>-->
<!--                        <td class="text-right"> Medium</td>-->
<!--                        <td class="text-right"> 4 Cores</td>-->
<!--                        <td class="text-right action">-->
<!--                            <a class="nav-link" href="/catalog/2">-->
<!--                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Modify Service">-->
<!--                                    <i class="material-icons">edit</i>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <div class="flag">-->
<!--                                <i class="material-icons">dashboard</i>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>Wordpress Service</td>-->
<!--                        <td class="text-right"> Big</td>-->
<!--                        <td class="text-right"> 8 Cores</td>-->
<!--                        <td class="text-right action">-->
<!--                            <a class="nav-link" href="/catalog/3">-->
<!--                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Modify Service">-->
<!--                                    <i class="material-icons">edit</i>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->