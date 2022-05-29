@extends('menko.template.template_menko')
@section('title', 'Home')


@section('container-md-8')
<h1 style="text-align: center; "> Program Kerja Menko Marves </h1>

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
    title: {
        text: 'Progress Kerja'
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
        data: [{{$deputi1Over}}, {{$deputi2Over}}, {{$deputi3Over}}, {{$deputi4Over}}, {{$deputi5Over}}, {{$deputi6Over}}, {{$sekreOver}}]

    }, {
        name: 'Suspended',
        data: [{{$deputi1Sus}}, {{$deputi2Sus}}, {{$deputi3Sus}}, {{$deputi4Sus}}, {{$deputi5Sus}}, {{$deputi6Sus}}, {{$sekreSus}}]

    }, {
        name: 'Pending',
        data: [{{$deputi1Pend}}, {{$deputi2Pend}}, {{$deputi3Pend}}, {{$deputi4Pend}}, {{$deputi5Pend}}, {{$deputi6Pend}}, {{$sekrePend}}]

    }, {
        name: 'Done',
        data: [{{$deputi1Done}}, {{$deputi2Done}}, {{$deputi3Done}}, {{$deputi4Done}}, {{$deputi5Done}}, {{$deputi6Done}}, {{$sekreDone}}]

    }, {
        name: 'Active',
        data: [{{$deputi1Act}}, {{$deputi2Act}}, {{$deputi3Act}}, {{$deputi4Act}}, {{$deputi5Act}}, {{$deputi6Act}}, {{$sekreAct}}]
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
    title: {
        text: '{{$DeputiTotal}}<br>Program',
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
            ['Overdue',   {{$DeputiOver}}],
            ['Suspended', {{$DeputiSus}}],
            ['Pending',   {{$DeputiPend}}],
            ['Done',      {{$DeputiDone}}],
            ['Active',    {{$DeputiAct}}],
        ]
    }]
});
</script>
@endsection