@extends('menko.template.template_menko')


@section('container-md-8') 
{{-- <h1 style="text-align: center; "> Deputi Bidang Koordinasi Kedaulatan Maritim dan Energi </h1> --}}

<div>
<table class="columns">
    <div style="border: 1px solid #ccc">
        <tr>
          <td><div id="donutChartEselon1" style="height: 300px; width: 500px"></div></td>
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
        text: 'Deputi Kedaulatan Maritim dan Energi'
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
        data: [{{$asdep1Over}}, {{$asdep2Over}}, {{$asdep3Over}}, {{$asdep4Over}}, {{$asdep5Over}}, {{$SekdepOver}}]

    }, {
        name: 'Suspended',
        data: [{{$asdep1Sus}}, {{$asdep2Sus}}, {{$asdep3Sus}}, {{$asdep4Sus}}, {{$asdep5Sus}}, {{$SekdepSus}}]

    }, {
        name: 'Pending',
        data: [{{$asdep1Pend}}, {{$asdep2Pend}}, {{$asdep3Pend}}, {{$asdep4Pend}}, {{$asdep5Pend}}, {{$SekdepPend}}]

    }, {
        name: 'Done',
        data: [{{$asdep1Done}}, {{$asdep2Done}}, {{$asdep3Done}}, {{$asdep4Done}}, {{$asdep5Done}}, {{$SekdepDone}}]

    }, {
        name: 'Active',
        data: [{{$asdep1Act}}, {{$asdep2Act}}, {{$asdep3Act}}, {{$asdep4Act}}, {{$asdep5Act}}, {{$SekdepAct}}]
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
        text: '{{$Deputi1Total}}<br>Program',
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
            ['Overdue', {{$Deputi1Over}}],
            ['Suspended', {{$Deputi1Sus}}],
            ['Pending', {{$Deputi1Pend}}],
            ['Done', {{$Deputi1Done}}],
            ['Active', {{$Deputi1Act}}],
        ]
    }]
});
</script>
@endsection