
@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <!--/inner-content-->
    <div class="inner-content">
        <!--/typography-->
        <div class="tittle-head">
            <h3 class="tittle">Typography <span class="new">Page</span></h3>
            <div class="clearfix"> </div>
        </div>
        <div class="typography">
            <div class="grid_3 grid_4">
                <h3 class="typo">Headings</h3>
                <div class="bs-example">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1>
                                </td>
                                <td class="type-info">Semibold 36px</td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2>
                                </td>
                                <td class="type-info">Semibold 30px</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3>
                                </td>
                                <td class="type-info">Semibold 24px</td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
                                </td>
                                <td class="type-info">Semibold 18px</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5>
                                </td>
                                <td class="type-info">Semibold 14px</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>h6. Bootstrap heading</h6>
                                </td>
                                <td class="type-info">Semibold 12px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /agileits -->
            <div class="grid_3 grid_5">
                <h3>Progress Bars</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="domprogress">
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
                        </div>
                        <p>Info with <code>progress-bar-info</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                        </div>
                        <p>Success with <code>progress-bar-success</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                        </div>
                        <p>Warning with <code>progress-bar-warning</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 70%"></div>
                        </div>
                        <p>Danger with <code>progress-bar-danger</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                        </div>
                        <p>Inverse with <code>progress-bar-inverse</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
                        </div>
                        <p>Inverse with <code>progress-bar-inverse</code> class.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
                            <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wthree-agile -->
            <div class="grid_3 grid_5">
                <h3>Pagination</h3>
                <div class="col-md-6">
                    <nav>
                        <ul class="pagination pagination-lg">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="pagination pagination-sm">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <ul class="pagination pagination-lg">
                        <li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                    <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="grid_3 grid_5">
                <h3>Breadcrumbs</h3>
                <ol class="breadcrumb">
                    <li class="active">Home</li>
                </ol>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Library</li>
                </ol>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
            <div class="grid_3 grid_5">
                <h3>Badges</h3>
                <div class="col-md-6">
                    <p>Add modifier classes to change the appearance of a badge.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Classes</th>
                                <th>Badges</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>No modifiers</td>
                                <td><span class="badge">42</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-primary</code></td>
                                <td><span class="badge badge-primary">1</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-success</code></td>
                                <td><span class="badge badge-success">22</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-info</code></td>
                                <td><span class="badge badge-info">30</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-warning</code></td>
                                <td><span class="badge badge-warning">412</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-danger</code></td>
                                <td><span class="badge badge-danger">999</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
                    <div class="list-group list-group-alternate"> 
                        <a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
                        <a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
                        <a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
                        <a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
                        <a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
                        <a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <section id="tables">
                <div class="page-header">
                    <h1>Tables</h1>
                </div>
                <h2>Default styles</h2>
                <p>For basic stylinglight padding and only horizontal add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
                <div class="bs-docs-example">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <hr class="bs-docs-separator">
            <p>Add any of the following classes to the <code>.table</code> base class.</p>
            <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-8).</p>
            <div class="bs-docs-example">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Add borders and rounded corners to the table.</p>
            <div class="bs-docs-example">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@getbootstrap</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
            <div class="bs-docs-example">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="typo">Unordered List</h3>
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <h3 class="typo">Ordered List</h3>
            <ol>
                <li class="list-group-item1">Cras justo odio</li>
                <li class="list-group-item1">Dapibus ac facilisis in</li>
                <li class="list-group-item1">Morbi leo risus</li>
                <li class="list-group-item1">Porta ac consectetur ac</li>
                <li class="list-group-item1">Vestibulum at eros</li>
            </ol>
            <!--//inner-content-->
            <!--//page-wrapper-->					
        </div>
        <!--body wrapper start-->
    </div>
    <div class="clearfix"></div>
    <!--body wrapper end-->
</div>
@endsection
