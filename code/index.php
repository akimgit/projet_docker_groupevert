<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min.js" integrity="sha512-dnUg2JxjlVoXHVdSMWDYm2Y5xcIrJg1N+juOuRi0yLVkku/g26rwHwysJDAMwahaDfRpr1AxFz43ktuMPr/l1A==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>

</head>
<body class="bg-dark">
    <div class="container-fluid">
      <div class="row justify-content-center">
        {% for currency, rates in data.items %}
        <div class="col-md-10 col-lg-6">
            <canvas id="chart-{{ currency }}"></canvas>
            <h1 class="text-white">Projet du groupe vert</h1>
            <img src="tenor.gif" />
            <h1 class="text-white"><font size="2pt">Loubna, Valentin et Akim</font></h1>
        </div>
        {% endfor %}
      </div>
    </div>
</body>
</html>
