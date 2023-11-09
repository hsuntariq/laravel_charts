<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body>




        <h1>Hello</h1>
        <div style="display:flex">
        <div style="width: 60%;margin:auto">
            {!! $chart->container() !!}
        </div>
        <div style="width: 60%;margin:auto">
            {!! $chart2->container() !!}
        </div>
        </div>
{!! $chart->script() !!}
{!! $chart2->script() !!}




        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    </body>


</html>
