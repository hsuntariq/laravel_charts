<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <style>
            .chart{
                width: 40%;
                height: 40%;
            }
        </style>
    </head>

    <body>




        <h1>Hello</h1>
        <div class="chart">
            {!! $chart->container() !!}
        </div>
        {!! $chart->script() !!}




        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    </body>


</html>
