@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">


        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">
        
        <!-- Notifications Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/awesome-notifications/style.css')}}">

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
        <style>
            .data-filters{
                text-align: right;
                display: block;
            }
            .data-filters .input-group{
                float: right;
                max-height: 36px;
            }
            .input-group-text{
                max-height: 36px;
            }
            .data-filters input{
                max-width: 150px;
                height: 36px;
                border: 1px solid #ccc;
                display: inline-block;
            }
            .data-filters button{
                max-width: 150px;
                height: 36px;
                border: 1px solid #ccc;
                display: inline-block;
                margin-bottom: 5px;
            }
            .data-filters img{
                max-height: 20px;
            }
            .filter_lbl{
                color: black;
            }

            
        </style>
@endsection

@section('content')
@auth
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Motor Rating Dashboard</h1>
                        <div>
                            <ol class="breadcrumb data-filters">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <img src="{{asset('build/assets/images/icons/date-from.png')}}" alt="From Date">
                                    </div>
                                    <select name="ftype" id="ftype" class="form-control">
                                        <option value="1">Year</option>
                                        <option value="2">month</option>
                                        <option value="3">Week</option>
                                    </select>
                                    <!-- <input type="text" class="form-control flatpickr-input" name="startDate" id="start-date-input" placeholder="Choose date" > -->
                                
                                    <div class="input-group-text">
                                        <img src="{{asset('build/assets/images/icons/date-to.png')}}" alt="To Date">
                                    </div>
                                    <input type="text" class="form-control flatpickr-input" name="endDate" id="end-date-input" placeholder="Choose date">
                                    <button class="btn btn-primary" id="applyBtn">APPLY</button>
                                </div>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
                    <div class="main-container container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">GWP YTD Cumulative</div> <!--Chart 01 : -->
                                    </div>
                                    <div class="card-body">
                                        <div id="bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">CORPORATE</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="donut-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">THIRD PARTY</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="donut-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">PERSONAL</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="donut-3"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">New & Renewal GWP Mix</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mx-auto">
                                                <div id="pie1"></div>
                                            </div>
                                            <div class="col-md-6 mx-auto">
                                                <div id="pie2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">PL Category wise GWP Proformance</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart4"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">New & Renewal GWP Mix</div>
                                    </div>
                                    <div class="card-body ">
                                        <div id="chartBr"></div>
                                    </div>
                                </div>
                            </div>






                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Donut Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartStack"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Donut Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartStack2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Donut Chart</div>
                                    </div>
                                    <div class="card-body ">
                                        <div id="pie3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endauth
@endsection
@section('scripts')
        
        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Dropzone JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    
        <!---Used In Annotations Chart-->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>
        <!-- FORMELEMENTS JS -->

        <!-- Rating JS -->
        <script src="{{asset('build/assets/libs/awesome-notifications/index.var.js')}}"></script>
        @vite('resources/assets/js/notifications.js')
        
        <script>
            flatpickr("#start-date-input", {});
            flatpickr("#end-date-input", {});            

    var chart01 = {
    series: [{data: [0,0],},],
    chart: {type: "bar",height: 120,},
    plotOptions: {bar: {borderRadius: 4,horizontal: true,},},colors: ["#00a5a2"],grid: {borderColor: "rgba(119, 119, 142, 0.05)",},
    dataLabels: {enabled: false,},
    xaxis: {categories: ["New","Renewal",],labels: {show: true,style: {colors: "#8c9097",fontSize: "11px",fontWeight: 600,cssClass: "apexcharts-xaxis-label",},},},
    yaxis: {labels: {show: true,style: {colors: "#8c9097",fontSize: "11px",fontWeight: 600,cssClass: "apexcharts-yaxis-label",},},},
    noData: {
    text: 'Loading...'
  }
  };
  var chart01_dt = new ApexCharts(document.querySelector("#bar-chart"), chart01);
  chart01_dt.render();


  var options13 = {
    series: [0, 0],
    chart: {
      type: "donut",
      height: 290,
    },
    legend: {position: "bottom",},
    labels:['Plan','Actual'],
    colors: ["#00a5a2", "#f43f63"],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: "bottom",
          },
        },
      },
    ],
    dataLabels: {
        dropShadow: {
            enabled: false,
        },
        style: {
            colors: ['#000', '#000'] // Specify your desired colors
        }
    },
  };
  var donut1 = new ApexCharts(document.querySelector("#donut-1"),options13);
  var donut2 = new ApexCharts(document.querySelector("#donut-2"),options13);
  var donut3 = new ApexCharts(document.querySelector("#donut-3"),options13);
  donut1.render();
  donut2.render();
  donut3.render();





 /* start pie chart */
  var options12 = {
    series: [0, 0],
    chart: {
      
      type: "pie",
    },
    colors: ["#00a5a2", "#f43f63"],
    labels: ["Renewal", "NEW"],
    legend: {
      position: "bottom",
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 250,
          },
          legend: {
            position: "bottom",
          },
        },
      },
    ],
    dataLabels: {
      dropShadow: {
        enabled: false,
      },
      style: {
            colors: ['#000', '#000'] // Specify your desired colors
        }
    },
  };
  var pie1 = new ApexCharts(document.querySelector("#pie1"), options12);
  var pie2 = new ApexCharts(document.querySelector("#pie2"), options12);
  var pie3 = new ApexCharts(document.querySelector("#pie3"), options12);
  pie1.render();
  pie2.render();
  pie3.render();




  var options3 = {
          series: [
          {
            name: "",
            data: [1755964800, 222604135.330001],
          },
        ],
          chart: {
          type: 'bar',
          height: 350,
        },
        plotOptions: {
          bar: {
            borderRadius: 0,
            horizontal: true,
            distributed: true,
            barHeight: '80%',
            isFunnel: true,
          },
        },
        colors: [
          '#E55A89',
          '#33b2df',
        ],
        dataLabels: {
          enabled: true,
          formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] 
          },
          dropShadow: {
            enabled: true,
          },
        },
        title: {
          text: 'Pyramid Chart',
          align: 'middle',
        },
        xaxis: {
          categories: ['New', 'Renewal'],
        },
        legend: {
          show: false,
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart3"), options3);
        chart.render();

        //Chart 4
        var options = {
          series: [
          {
            name: 'Actual',
            data: [
              {
                x: 'Car P',
                y: 253184923.68,
                goals: [
                  {
                    name: 'Expected',
                    value: 1199778715,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: 'Car H',
                y:  86058672,
                goals: [
                  {
                    name: 'Expected',
                    value: 427842694,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: 'CAR H/R',
                y: 5423,
                goals: [
                  {
                    name: 'Expected',
                    value: 5200,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: 'DP',
                y: 6653,
                goals: [
                  {
                    name: 'Expected',
                    value: 6500,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: 'LORRY',
                y: 8133,
                goals: [
                  {
                    name: 'Expected',
                    value: 6600,
                    strokeHeight: 13,
                    strokeWidth: 0,
                    strokeLineCap: 'round',
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: 'OTHER',
                y: 7132,
                goals: [
                  {
                    name: 'Expected',
                    value: 7500,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: '3W',
                y: 7332,
                goals: [
                  {
                    name: 'Expected',
                    value: 8700,
                    strokeHeight: 5,
                    strokeColor: '#775DD0'
                  }
                ]
              },
              {
                x: '2W',
                y: 6553,
                goals: [
                  {
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#775DD0'
                  }
                ]
              }
            ]
          }
        ],
          chart: {
          height: 200,
          type: 'bar'
        },
        plotOptions: {
          bar: {
            columnWidth: '60%'
          }
        },
        colors: ['#00E396'],
        dataLabels: {
          enabled: false
        },
        legend: {
          show: true,
          showForSingleSeries: true,
          customLegendItems: ['Actual', 'Expected'],
          markers: {
            fillColors: ['#00E396', '#775DD0']
          }
        }
        };

        var chart7 = new ApexCharts(document.querySelector("#chart4"), options);
        chart7.render();









        var options = {
          series: [{
          data: [44, 55, 41, 64, 22, 43, 21, 22, 43, 21]
        }, {
          data: [53, 32, 33, 52, 13, 44, 32, 13, 44, 32]
        }],
          chart: {
          type: 'bar',
          height: 430
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        colors: [ // this array contains different color code for each data
        "#33b2df",
        "#E55A89"
    ],
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        tooltip: {
          shared: true,
          intersect: false
        },
        xaxis: {
          categories: ['TPL', '2W', '3W', 'OTHER', 'LORRY', 'DP', 'CAR H/R', 'CAR H', 'CAR P','CORPORATE'],
        },
        };

        var chart = new ApexCharts(document.querySelector("#chartBr"), options);
        chart.render();







        var options = {
          series: [{
          name: 'PRODUCT A',
          data: [44, 55, 41, 67, 22, 43, 21, 49]
        }, {
          name: 'PRODUCT B',
          data: [13, 23, 20, 8, 13, 27, 33, 12]
        } ],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
          stackType: '100%'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        xaxis: {
          categories: ['TPL', '2W', '3W', 'OTHER', 'LORRY', 'DP', 'CAR H/R', 'CAR H', 'CAR P','CORPORATE'
          ],
          
        },
        fill: {
          opacity: 1
        },
        legend: {
          position: 'bottom',
          offsetX: 0,
          offsetY: 50
        },
        };

        var chartStack = new ApexCharts(document.querySelector("#chartStack"), options);
        var chartStack2 = new ApexCharts(document.querySelector("#chartStack2"), options);
        chartStack.render();
        chartStack2.render();
      















$(document).ready(function() {
    $("#lodingTop").hide();
        $('#applyBtn').click(function() {
            var from = $("#start-date-input").val();
            var to = $("#end-date-input").val();
            var ftype = $("#ftype").val();
            $.ajax({
                url :"{{ route('getdt') }}",
                method: "GET",
                data: {
                    from: from,
                    to: to,
                    ftype : ftype
                },
                dataType: "json",
                beforeSend: function() {
                    // new AWN().asyncBlock(Promise.resolve("Success!"));
                    $("#lodingTop").show();

                    //Chart 01
                    chart01_dt.updateSeries([{data: [0,0]}]);
                    //Chart 02
                },
                success: function(data) {
                    console.log(data);
                    $("#lodingTop").hide();
                    //Chart 01
                    chart01_dt.updateSeries([{data: data.bar}]);
                    //Chart 02
                    donut1.updateSeries(data.donutData_1);
                    //Chart 03
                    donut2.updateSeries(data.donutData_2);
                    //Chart 04
                    donut3.updateSeries(data.donutData_3);
                    //Chart 05
                    pie1.updateSeries(data.pie1);
                    //Chart 06
                    pie2.updateSeries(data.pie2);
                    //Chart 07
                    // Example usage:
                    
                    
                }
            });
        });
    });



    function updateChartSeries(newActualData, newExpectedData) {
    // Update the 'Actual' series
    chart.updateSeries([
        {
            name: 'Actual',
            data: newActualData
        }
    ]);

    // Update the 'Expected' series
    chart.updateSeries([
        {
            name: 'Expected',
            data: newExpectedData
        }
    ]);
}
        </script>

@endsection