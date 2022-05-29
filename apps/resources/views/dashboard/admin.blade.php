@extends('layouts.master')

@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <style>
    .judul {
        font-family: Poppins;
        color: black;
		height:70px;
		width: 100%;  
    }
    </style>

    <body>
    <div class="main"> 
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <h1 class="judul"> Dashboard </h1>
                    <table class="columns">
                        <tr class="dashboard">
                        <td style="width: 600px; height: 200px";><div id="chart1_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                        <td style="width: 600px; height: 200px";><div id="chart2_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                        </tr>
                        <tr class="dashboard">
                            <td style="width: 600px; height: 200px";><div id="chart3_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                            <td style="width: 600px; height: 200px";><div id="chart4_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                        </tr>
                        <tr class="dashboard">
                            <td style="width: 600px; height: 200px";><div id="chart5_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                            <td style="width: 600px; height: 200px";><div id="chart6_div" style="border: 1px solid #ccc; background-color: #ccc; border-radius: 5px;"></div></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!--untuk chart-->

      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      
      <script>

        Highcharts.setOptions({
        colors: 
        [
          '#FF0000', 
          '#FFC000', 
          '#FFFF00', 
          '#00B050', 
          '#00B0F0'
        ]
        });

        //Deputi 1
        Highcharts.chart('chart1_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Kedaulatan Maritim dan Energi'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over1}}, {{$asdep2Over1}}, {{$asdep3Over1}}, {{$asdep4Over1}}, {{$asdep5Over1}}, {{$SekdepOver1}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus1}}, {{$asdep2Sus1}}, {{$asdep3Sus1}}, {{$asdep4Sus1}}, {{$asdep5Sus1}}, {{$SekdepSus1}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend1}}, {{$asdep2Pend1}}, {{$asdep3Pend1}}, {{$asdep4Pend1}}, {{$asdep5Pend1}}, {{$SekdepPend1}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done1}}, {{$asdep2Done1}}, {{$asdep3Done1}}, {{$asdep4Done1}}, {{$asdep5Done1}}, {{$SekdepDone1}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act1}}, {{$asdep2Act1}}, {{$asdep3Act1}}, {{$asdep4Act1}}, {{$asdep5Act1}}, {{$SekdepAct1}}]
        }]
        });

        //Deputi 2
        Highcharts.chart('chart2_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Sumber Daya Maritim'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over2}}, {{$asdep2Over2}}, {{$asdep3Over2}}, {{$asdep4Over2}}, {{$asdep5Over2}}, {{$SekdepOver2}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus2}}, {{$asdep2Sus2}}, {{$asdep3Sus2}}, {{$asdep4Sus2}}, {{$asdep5Sus2}}, {{$SekdepSus2}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend2}}, {{$asdep2Pend2}}, {{$asdep3Pend2}}, {{$asdep4Pend2}}, {{$asdep5Pend2}}, {{$SekdepPend2}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done2}}, {{$asdep2Done2}}, {{$asdep3Done2}}, {{$asdep4Done2}}, {{$asdep5Done2}}, {{$SekdepDone2}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act2}}, {{$asdep2Act2}}, {{$asdep3Act2}}, {{$asdep4Act2}}, {{$asdep5Act2}}, {{$SekdepAct2}}]
        }]
        });

        //Deputi 3

        Highcharts.chart('chart3_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Infrastruktur dan Transportasi'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over3}}, {{$asdep2Over3}}, {{$asdep3Over3}}, {{$asdep4Over3}}, {{$asdep5Over3}}, {{$SekdepOver3}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus3}}, {{$asdep2Sus3}}, {{$asdep3Sus3}}, {{$asdep4Sus3}}, {{$asdep5Sus3}}, {{$SekdepSus3}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend3}}, {{$asdep2Pend3}}, {{$asdep3Pend3}}, {{$asdep4Pend3}}, {{$asdep5Pend3}}, {{$SekdepPend3}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done3}}, {{$asdep2Done3}}, {{$asdep3Done3}}, {{$asdep4Done3}}, {{$asdep5Done3}}, {{$SekdepDone3}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act3}}, {{$asdep2Act3}}, {{$asdep3Act3}}, {{$asdep4Act3}}, {{$asdep5Act3}}, {{$SekdepAct3}}]
        }]
        });

        //Deputi 4

        Highcharts.chart('chart4_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Pengelolaan Lingkungan dan Kehutanan'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over4}}, {{$asdep2Over4}}, {{$asdep3Over4}}, {{$asdep4Over4}}, {{$asdep5Over4}}, {{$SekdepOver4}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus4}}, {{$asdep2Sus4}}, {{$asdep3Sus4}}, {{$asdep4Sus4}}, {{$asdep5Sus4}}, {{$SekdepSus4}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend4}}, {{$asdep2Pend4}}, {{$asdep3Pend4}}, {{$asdep4Pend4}}, {{$asdep5Pend4}}, {{$SekdepPend4}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done4}}, {{$asdep2Done4}}, {{$asdep3Done4}}, {{$asdep4Done4}}, {{$asdep5Done4}}, {{$SekdepDone4}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act4}}, {{$asdep2Act4}}, {{$asdep3Act4}}, {{$asdep4Act4}}, {{$asdep5Act4}}, {{$SekdepAct4}}]
        }]
        });

        //Deputi 5

        Highcharts.chart('chart5_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Pariwisata dan Ekonomi Kreatif'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over5}}, {{$asdep2Over5}}, {{$asdep3Over5}}, {{$asdep4Over5}}, {{$asdep5Over5}}, {{$SekdepOver5}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus5}}, {{$asdep2Sus5}}, {{$asdep3Sus5}}, {{$asdep4Sus5}}, {{$asdep5Sus5}}, {{$SekdepSus5}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend5}}, {{$asdep2Pend5}}, {{$asdep3Pend5}}, {{$asdep4Pend5}}, {{$asdep5Pend5}}, {{$SekdepPend5}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done5}}, {{$asdep2Done5}}, {{$asdep3Done5}}, {{$asdep4Done5}}, {{$asdep5Done5}}, {{$SekdepDone5}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act5}}, {{$asdep2Act5}}, {{$asdep3Act5}}, {{$asdep4Act5}}, {{$asdep5Act5}}, {{$SekdepAct5}}]
        }]
        });

        //Deputi 6

        Highcharts.chart('chart6_div', {
        chart: {
            type: 'column'
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Deputi Bidang Koordinasi Investasi dan Pertambang'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Overdue',
            data: [{{$asdep1Over6}}, {{$asdep2Over6}}, {{$asdep3Over6}}, {{$asdep4Over6}}, {{$asdep5Over6}}, {{$SekdepOver6}}]

        }, {
            name: 'Suspended',
            data: [{{$asdep1Sus6}}, {{$asdep2Sus6}}, {{$asdep3Sus6}}, {{$asdep4Sus6}}, {{$asdep5Sus6}}, {{$SekdepSus6}}]

        }, {
            name: 'Pending',
            data: [{{$asdep1Pend6}}, {{$asdep2Pend6}}, {{$asdep3Pend6}}, {{$asdep4Pend6}}, {{$asdep5Pend6}}, {{$SekdepPend6}}]

        }, {
            name: 'Done',
            data: [{{$asdep1Done6}}, {{$asdep2Done6}}, {{$asdep3Done6}}, {{$asdep4Done6}}, {{$asdep5Done6}}, {{$SekdepDone6}}]

        }, {
            name: 'Active',
            data: [{{$asdep1Act6}}, {{$asdep2Act6}}, {{$asdep3Act6}}, {{$asdep4Act6}}, {{$asdep5Act6}}, {{$SekdepAct6}}]
        }]
        });
        
    </script>
  </body>

  @endsection