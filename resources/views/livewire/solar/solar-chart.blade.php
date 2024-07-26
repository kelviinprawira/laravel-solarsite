<div>
    <div class="grid grid-cols-2 justify-center">
        <div id="wm"></div>
        <div id="tp"></div>
        <div id="rt"></div>
        <div id="ms"></div>
        <div id="inf"></div>
    </div>
    <script src="{{asset('chart/dist/apexcharts.min.js')}}"></script>
    <script>
        var options1 = {
                series: [
                    {
                        name: 'PLAN',
                        data: @json($chart_wm_plan),
                    },
                    {
                        name: 'REAL',
                        data: @json($chart_wm_real),
                    },
                    {
                        name: 'ACH (%)',
                        data: @json($chart_wm_ach),
                    },
                ],
                chart: {
                    type: 'bar',
                    height: 300,
                    width: '100%',
                    toolbar:
                        {
                            show: false
                        },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '100%',
                        endingShape: 'rounded',
                    },
                },
                dataLabels: {
                    enabled: false,
                }
                ,
                stroke: {
                    show: true,
                    width:
                        5,
                    colors:
                        ['transparent']
                }
                ,
                xaxis: {
                    categories: ['QUALITY (Liter)'],
                },
                fill: {
                    opacity: 1
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return value.toFixed(2);
                        }
                    }
                    ,
                },
                title: {
                    text: 'WATER MANAGEMENT SYSTEM',
                }
                ,
            }
        ;
        var chart = new ApexCharts(document.querySelector("#wm"), options1);
        chart.render();


        // Transport Panen Chart
        var options2 = {
            series: [
                {
                    name: 'PLAN',
                    data: @json($chart_tp_plan),
                },
                {
                    name: 'REAL',
                    data: @json($chart_tp_real),
                },
                {
                    name: 'ACH (%)',
                    data: @json($chart_tp_ach),
                },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '100%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 5,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['QUALITY (Liter)'],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2);
                    }
                },
            },
            title: {
                text: 'TRANSPORT'
            },

        };
        var chart = new ApexCharts(document.querySelector("#tp"), options2);
        chart.render();

        //     Rawat TM Chart
        var options3 = {
            series: [
                {
                    name: 'PLAN',
                    data: @json($chart_rt_plan),
                },
                {
                    name: 'REAL',
                    data: @json($chart_rt_real),
                },
                {
                    name: 'ACH (%)',
                    data: @json($chart_rt_ach),
                },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '100%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 5,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['QUALITY (Liter)'],

            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2);
                    }
                },
            },
            title: {
                text: 'RAWAT'
            },

        };
        var chart = new ApexCharts(document.querySelector("#rt"), options3);
        chart.render();

        // Mills Support Chart
        var options4 = {
            series: [
                {
                    name: 'PLAN',
                    data: @json($chart_ms_plan),
                },
                {
                    name: 'REAL',
                    data: @json($chart_ms_real),
                },
                {
                    name: 'ACH (%)',
                    data: @json($chart_ms_ach),
                },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '100%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 5,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['QUALITY'],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2);
                    }
                },
            },
            title: {
                text: 'PABRIK'
            },

        };
        var chart = new ApexCharts(document.querySelector("#ms"), options4);
        chart.render();

        // Infrastructur Chart
        var options5 = {
            series: [
                {
                    name: 'PLAN',
                    data: @json($chart_inf_plan),
                },
                {
                    name: 'REAL',
                    data: @json($chart_inf_real),
                },
                {
                    name: 'ACH (%)',
                    data: @json($chart_inf_ach),
                },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '100%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 5,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['QUALITY (Liter)'],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2);
                    }
                },
            },
            title: {
                text: 'TEKNIK'
            },
        };
        var chart = new ApexCharts(document.querySelector("#inf"), options5);
        chart.render();
    </script>
</div>





