@extends('admin.layout.account_admin')

@section('content')
<style type="text/css">
.nav-tabs .nav-link.active  {
    background-color: #F9F9F9 !important;
    border-bottom: none !important;
}

.card {
    border:none !important;
}
.card i {
    font-size: 42px;
}

.nav-tabs {
    border-bottom: 0px !important;
}
.bg-sales {
    background: #756D98;
    padding: 7px 15px;
    color: #fff;
    width: 25%;
    display: block;
    margin: 10px auto;
    border-radius: 20px;    
}
.income-class h5 {
    margin-bottom: 0px;
    font-weight: bold;
    text-align: center;
}

</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Accounting</h2>
                <div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- End Row -->
    <div class="row">
        <div class="col-xl-12">

            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">      
                    <a class="nav-link active show" id="just-tab-1" data-toggle="tab" href="#j-tab-1" role="tab" aria-controls="j-tab-1" aria-selected="true">
              <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-arrow-graph-up-right text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Income</h6>
                                        <h2 class="m-t-0">$953,000</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-2" data-toggle="tab" href="#j-tab-2" role="tab" aria-controls="j-tab-2" aria-selected="false">
                      <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                              <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-cash text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Total Expenses</h6>
                                        <h2 class="m-t-0">$953,000</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-3" data-toggle="tab" href="#j-tab-3" role="tab" aria-controls="j-tab-3" aria-selected="false">
                    <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-filing text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Bank Statement</h6>
                                        <h2 class="m-t-0">$953,000</h2></div>
                                </div>
                            </div>
                        </div>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="just-tab-4" data-toggle="tab" href="#j-tab-4" role="tab" aria-controls="j-tab-4" aria-selected="false">
                              <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                      <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-document-text text-facebook"></i>
                                </div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0 text-uppercase">Monthly Budget</h6>
                                        <h2 class="m-t-0">$953,000</h2></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

                <div class="widget-body no-padding">

                    <div class="tab-content pt-3">
                        <div class="tab-pane fade active show" id="j-tab-1" role="tabpanel" aria-labelledby="just-tab-1">
                           <div class="row">
                               <div class="col-xl-6">
                                   <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Income</h4>
                                    </div>
                                   <div class="widget-body">
                                    <h3 class="text-center bg-sales">13%</h3>
                                    <p class="text-center">Targated Sales Growth 12%</p>
                                    <p class="text-center">Accumulated Revenue:Last 12 Months</p>
                                        <div class="row">
                                            <div class="col-xl-10 col-12 no-padding">
                                                <div>
                                                       <canvas id="vertical-chart-01"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               <div class="col-xl-6">
                                           <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Income Classification</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-10 col-12 no-padding">
                                                <div class="chart">
                                                   <canvas id="pie-chart"></canvas>

                                                   <div class="table-responsive">
                                                       <table class="table income-class">
                                                           <tr>
                                                            
                                                               <td>
                                                                   <h5>Pledge</h5>
                                                               </td>
                                                               <td>
                                                                   <h5>$ 750</h5>
                                                               </td>
                                                           </tr>
                                                            <tr>
                                                            
                                                               <td>
                                                                   <h5>Tithes</h5>
                                                               </td>
                                                               <td>
                                                                   <h5>$ 550</h5>
                                                               </td>
                                                           </tr>
                                                            <tr>
                                                            
                                                               <td>
                                                                   <h5>First Fruits</h5>
                                                               </td>
                                                               <td>
                                                                   <h5>$ 950</h5>
                                                               </td>
                                                           </tr>
                                                       </table>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="j-tab-2" role="tabpanel" aria-labelledby="just-tab-2">
                           <div class="row flex-row">
                            <div class="col-xl-7 col-md-6">
                                <!-- Begin Widget 10 -->
                                <div class="widget widget-10 has-shadow">

                                    <!-- Begin Widget Body -->
                                    <div class="widget-body no-padding">
                                        <h4 class="text-center bold pt-3 pb-3">Expenses Over Last 5 Years</h4>
<div class="chart">
                                            <canvas id="area-chart-01"></canvas>
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                                <!-- End Widget 10 -->
                            </div>
                            <div class="col-xl-5">
 <div class="widget widget-11 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Activity Log</h2>
                                        <div class="widget-options">
                                            <div class="dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                    <i class="la la-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-history"></i>History
                                                    </a>
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-bell-slash"></i>Disable Alerts
                                                    </a>
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-edit"></i>Edit Widget
                                                    </a>
                                                    <a href="#" class="dropdown-item faq"> 
                                                        <i class="la la-question-circle"></i>FAQ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body p-0 widget-scroll" style="max-height: 450px; overflow: hidden; outline: none;" tabindex="3">
                                    <!-- Begin 01 -->
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img class="rounded-circle" src="assets/img/avatar/avatar-06.jpg" alt="...">
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Beverly Oliver</span>
                                                    Send you a friend request
                                                </div>
                                                <div class="time">4 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 01 -->
                                    <!-- Begin 02 -->
                                    <div class="timeline red">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="timeline-icon">
                                                <i class="la la-spinner"></i>
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    Server rebooted
                                                </div>
                                                <div class="time">10 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 02 -->
                                    <!-- Begin 03 -->
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img class="rounded-circle" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Megan Duncan</span>
                                                    Followed 4 people
                                                    <div class="users-like">
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="time">12 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 03 -->
                                    <!-- Begin 04 -->
                                    <div class="timeline blue">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="timeline-icon">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Brandon Smith</span>
                                                    Liked <span class="font-weight-bold"><a href="#">Elisyam Admin Template</a></span>
                                                </div>
                                                <div class="time">30 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 04 -->
                                    <!-- Begin 05 -->
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="timeline-icon">
                                                <i class="la la-twitter"></i>
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    + 3 new followers
                                                    <div class="users-like">
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="profile.html">
                                                            <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="time">34 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 05 -->
                                    <!-- Begin 06 -->
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img class="rounded-circle" src="assets/img/avatar/avatar-04.jpg" alt="...">
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Nathan Hunter</span>
                                                    Invited you in a group
                                                </div>
                                                <div class="time">42 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 06 -->
                                    <!-- Begin 06 -->
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                <img class="rounded-circle" src="assets/img/avatar/avatar-03.jpg" alt="...">
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Louis Henry</span>
                                                    Is now following you
                                                </div>
                                                <div class="time">50 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 06 -->
                                    <!-- Begin 07 -->
                                    <div class="timeline blue">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="timeline-icon">
                                                <i class="la la-image"></i>
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    <span class="username">Brandon Smith</span>
                                                    Uploaded <span class="font-weight-bold"><a href="#">8 photos</a></span>
                                                </div>
                                                <div class="time">1 hour ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End 07 -->
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="j-tab-3" role="tabpanel" aria-labelledby="just-tab-3">
                            <div class="row">
                           <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title">Bank Statement of<br> January</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn-outline-light">
                                                Download
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title">Bank Statement of<br> February</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn-outline-light">
                                                Download
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <div class="col-xl-4">
                                <div class="widget widget-23 bg-gradient-02 d-flex justify-content-center align-items-center">
                                    <div class="widget-body text-center">
                                        <i class="ti ti-zip"></i>
                                        <div class="title">Bank Statement of<br> March</div>
                                        <div class="number">Download Statement</div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn-outline-light">
                                                Download
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="j-tab-4" role="tabpanel" aria-labelledby="just-tab-4">
       <div class="row">
           <div class="col-xl-7">
                  <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Monthly Expense</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="chart">
                                           <canvas id="horizontal-chart-01"></canvas>
                                        </div>
                                    </div>
                                </div>
           </div>
           <div class="col-xl-5">
               <div class="widget widget-16">
                  <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Estimated Year Expense</h4>
                                    </div>
                                    <div class="widget-body">
                                        <h4 class="text-center"></h4>
                                        <div class="row">
                                            <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                <h2>$258,036</h2>
                                                <div class="total-views">Projected Expenses</div> <br>
                                                <h2>$200,036</h2>
                                                <div class="total-views">Current Expenses</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="widget pt-3">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>AVG. PROCUREMENT CYCLE</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="chart">
                                            <canvas id="vertical-chart-03"></canvas>
                                        </div>
                                    </div>
                                </div>

           </div>
       </div>
                        </div>
                    </div>
                </div>
      
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{asset('church/vendors/js/chart/chart.min.js') }}"></script>
<script type="text/javascript">
     // ------------------------------------------------------- //
    // Vertical Bar 01
    // ------------------------------------------------------ //    
    var ctx = document.getElementById("vertical-chart-01").getContext('2d');
    
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr","May","Jun","Jul","Aug","Sep","Oct","Now","Dec"],
            datasets: [{
                label: "Incomes",
                borderColor: "#fff",
                backgroundColor: "rgba(93, 83, 134, 0.85)",
                hoverBackgroundColor: "#5d5386",
                data: [1500,1100, 500, 700, 800, 1000,400,300,550,600,950,1300]
            }]
        },
        options: {
            legend: {
                display: false,
            
            },
            tooltips: {
                backgroundColor: 'rgba(47, 49, 66, 0.8)',
                titleFontSize: 13,
                titleFontColor: '#fff',
                caretSize: 0,
                cornerRadius: 4,
                xPadding: 10,
                displayColors: false,
                yPadding: 10
            },
            scales: {
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }],
                yAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }]
            }   
        }
    });
 // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //    
    var ctx = document.getElementById("pie-chart").getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Pledge", "Tithes", "First Fruits"],
            datasets: [{
                label: "Label",
                backgroundColor: ["#08a6c3", "#5cb85c", "#d9534f"],
                borderColor: ["#fff", "#fff", "#fff"],
                hoverBorderColor: ["#fff", "#fff", "#fff"],
                borderWidth: 10,
                data: [2478, 4268, 1265]
            }]
        },
        options: {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontColor: "#2e3451",
                    usePointStyle: true,
                    fontSize: 13
                }
            },
            tooltips: {
                backgroundColor: 'rgba(47, 49, 66, 0.8)',
                titleFontSize: 13,
                titleFontColor: '#fff',
                caretSize: 0,
                cornerRadius: 4,
                xPadding: 10,
                displayColors: true,
                yPadding: 10
            }
        }
    });
    
 // ------------------------------------------------------- //
    // Area Chart 01
    // ------------------------------------------------------ //    
    var ctx = document.getElementById('area-chart-01').getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["2014", "2015", "2016", "2017", "2018"],
            datasets: [{
                label: "Expense",
                borderColor: "#08a6c3",
                pointBackgroundColor: "#08a6c3",
                pointHoverBorderColor: "#08a6c3",
                pointHoverBackgroundColor: "#08a6c3",
                pointBorderColor: "#fff",
                pointBorderWidth: 3,
                pointRadius: 6,
                fill: true,
                backgroundColor: "#08a6c3",
                borderWidth: 3,
                data: [10, 60, 20, 40, 45]
            }]
        },
        options: {
            legend: {
                display: false,
             
            },
            tooltips: {
                backgroundColor: 'rgba(47, 49, 66, 0.8)',
                titleFontSize: 13,
                titleFontColor: '#fff',
                caretSize: 0,
                cornerRadius: 4,
                xPadding: 10,
                displayColors: false,
                yPadding: 10
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: true,
                        beginAtZero: true
                    },
                    gridLines: {
                        drawBorder: true,
                        display: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }]
            }
        }
    });
    
    // ------------------------------------------------------- //
    // Horizontal Bar 01
    // ------------------------------------------------------ //    
    var ctx = document.getElementById("horizontal-chart-01").getContext('2d');
    
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["Light Bill", "Gas Bill", "Rent", "Others"],
            datasets: [{
                label: "Monthy Expense",
             backgroundColor: ["#08a6c3", "#5cb85c", "#d9534f","#3B5998"],
                borderColor: ["#fff", "#fff", "#fff","#fff"],
                hoverBorderColor: ["#fff", "#fff", "#fff","#fff"],
                data: [138,147,155,160]
            }]
        },
        options: {
            legend: {
                display: false,
             
            },
            tooltips: {
                backgroundColor: 'rgba(47, 49, 66, 0.8)',
                titleFontSize: 13,
                titleFontColor: '#fff',
                caretSize: 0,
                cornerRadius: 4,
                xPadding: 10,
                displayColors: false,
                yPadding: 10
            },
            scales: {
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }],
                yAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }]
            }   
        }
    });
     // ------------------------------------------------------- //
    // Vertical Bar 03
    // ------------------------------------------------------ //    
    var ctx = document.getElementById("vertical-chart-03").getContext('2d');
    
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Supplier 1", "Supplier 2", "Supplier 3"],
            datasets: [{
                label: "Supplier",
                borderColor: "#fff",
                backgroundColor: "rgba(93, 83, 134, 0.85)",
                hoverBackgroundColor: "#5d5386",
                data: [1500,1100, 500]
            }]
        },
        options: {
            legend: {
                display: false,
            
            },
            tooltips: {
                backgroundColor: 'rgba(47, 49, 66, 0.8)',
                titleFontSize: 13,
                titleFontColor: '#fff',
                caretSize: 0,
                cornerRadius: 4,
                xPadding: 10,
                displayColors: false,
                yPadding: 10
            },
            scales: {
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }],
                yAxes: [{
                    stacked: false,
                    gridLines: {
                        drawBorder: true,
                        display: true
                    },
                    ticks: {
                        display: true
                    }
                }]
            }   
        }
    });
</script>
<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush

