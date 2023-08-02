
    <head>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset("assets/custom/css/bootstrap.css")}}">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Users </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">50</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Therapists</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">10</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Appointments</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">1000+</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Contacts </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link fw-bold fs-3" href="#">2000+</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myPieChart" 
                                    width="100%" 
                                    height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myBarChart" 
                                        width="100%" height="40">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body text-dark">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Department</th>
                                        <th>Contact</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Department</th>
                                        <th>Contact</th>
                                        <th>Message</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>example@gmail.com</td>
                                        <td>17/12/2023</td>
                                        <td>existential</td>
                                        <td>0609090909</td>
                                        <td>Example short message for therapists</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>         <<script src="{{asset("assets/custom/js/bootstrap.bundle.min.js")}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/custom/demo/chart-pie-demo.js')}}"></script>
        <script src="{{asset('assets/custom/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
       <script src="{{asset('assets/custom/js/datatables-simple-demo.js')}}"></script>
    </body>