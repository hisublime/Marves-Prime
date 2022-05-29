@section('container-md-8') 
<style>
.donuttitle {
  text-align: center;
  font-size: 30px
}
</style>
{{-- <h1 style="text-align: center; "> Deputi Bidang Koordinasi Kedaulatan Maritim dan Energi </h1> --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<div>
<table class="columns">
    <div style="border: 1px solid #ccc">
        <tr>
        <br>
        <br>
        <br>
          <td><h2 class=donuttitle>Progres Kerja</h2><div id="donutChartEselon1" style="height: 300px; width: 500px"></div></td>
          <td><div id="chartEselon" style="height: 500px; width: 800px"></div></td>
        </tr>
    </div>
</table>
</div>

@endsection

@section('dashboard-eselon1')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
Highcharts.setOptions({
        colors: [
                    '#FF0000', 
                    '#FFC000', 
                    '#FFFF00', 
                    '#00B050', 
                    '#00B0F0'
                 ]
        });
Highcharts.chart('chartEselon', {
    chart: {
        type: 'column'
    },
    credits: {
        enabled: false
    },
    title: {
        text: 'Sekretariat Kemenko',
        style : {
            fontfamily : 'Poppins',
            fontWeight: 'bold',
            fontSize: '20px'
        }
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
        data: [{{$inspekOver}}, {{$birkomOver}}, {{$birumOver}}, {{$birperOver}}, {{$birhukOver}}]

    }, {
        name: 'Suspended',
        data: [{{$inspekSus}}, {{$birkomSus}}, {{$birumSus}}, {{$birperSus}}, {{$birhukSus}}]

    }, {
        name: 'Pending',
        data: [{{$inspekPend}}, {{$birkomPend}}, {{$birumPend}}, {{$birperPend}}, {{$birhukPend}}]

    }, {
        name: 'Done',
        data: [{{$inspekDone}}, {{$birkomDone}}, {{$birumDone}}, {{$birperDone}}, {{$birhukDone}}]

    }, {
        name: 'Active',
        data: [{{$inspekAct}}, {{$birkomAct}}, {{$birumAct}}, {{$birperAct}}, {{$birhukAct}}]
    }]
});
</script>
@endsection

@section('donut-chart-eselon1')
<script>
Highcharts.chart('donutChartEselon1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    credits: {
        enabled: false
    },
    title: {
        text: '{{$SekretariatTotal}}<br>Program',
        align: 'center',
        verticalAlign: 'middle',
        y: 20
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: 30,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: 0,
            endAngle: 360,
            center: ['50%', '50%'],
            size: '100%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Program',
        innerSize: '80%',
        data: [
            ['Overdue', {{$SekretariatOver}}],
            ['Suspended', {{$SekretariatSus}}],
            ['Pending', {{$SekretariatPend}}],
            ['Done', {{$SekretariatDone}}],
            ['Active', {{$SekretariatAct}}],
        ]
    }]
});
</script>
@endsection