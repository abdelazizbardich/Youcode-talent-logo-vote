<?php require './getVotesData.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Youcode sondage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8">
                <h1>Sondage <span style="color: #273d90;"><strong>Youcode</strong><br></span>&nbsp;Analytique</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="container logos-box" id="vote-container">
        <div class="row justify-content-center align-items-start">
            <div class="col col-md-4 vote-guides">
            <div class="col-12"><h3 class="text-center"><u>Guide:</u></h3></div>
                <div class="row">
                    <div class="col col-md-6 mb-2">
                        <div class="shadow rounded p-2" style="border-bottom:5px solid #ffc107;">
                            <img src="./assets/img/1.jpg" alt="" class="logo1 img-fluid"><strong class="text-center d-block">Logo 1</strong>
                        </div>
                    </div>
                    <div class="col col-md-6 mb-2">
                        <div class="shadow rounded p-2" style="border-bottom:5px solid #44bd32;">
                            <img src="./assets/img/2.jpg" alt="" class="logo1 img-fluid"><strong class="text-center d-block">Logo 2</strong>
                        </div>
                    </div>
                    <div class="col col-md-6 mb-2">
                        <div class="shadow rounded p-2" style="border-bottom:5px solid #273d90;">
                            <img src="./assets/img/3.jpg" alt="" class="logo1 img-fluid"><strong class="text-center d-block">Logo 3</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-8">
                <h3  class="text-center"><u>Data chart:</u></h3>
                <p><strong>Total votes: </strong><?php echo $votes->total; ?><br><strong>Logo1: </strong><?php echo $votes->logo1->totalVotes; ?> / <strong>Logo2: </strong><?php echo $votes->logo2->totalVotes; ?> / <strong>Logo3: </strong><?php echo $votes->logo3->totalVotes; ?></p>
                <div><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Logo 1&quot;,&quot;Logo 2&quot;,&quot;Logo 3&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Dataset&quot;,&quot;backgroundColor&quot;:[&quot;#ffc107&quot;,&quot;#44bd32&quot;,&quot;#273d90&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;<?php echo $votes->logo1->percent;?>&quot;,&quot;<?php echo $votes->logo2->percent;?>&quot;,&quot;<?php echo $votes->logo3->percent;?>&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:true},&quot;title&quot;:{}}}"></canvas></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3  class="text-left"><u>DataTable:</u></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 border border-color-primary pt-2 pb-2 mb-5">
                <table class="datatable border display nowrap dtr-inline collapsed">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Vote</th>
                    </thead>
                    <tbody>
                        <?php foreach($data as $vote){ ?>
                            <tr>
                                <td><?php echo $vote['id']; ?></td>
                                <td><?php echo $vote['fname']; ?></td>
                                <td><?php echo $vote['lname']; ?></td>
                                <td><?php echo $vote['email']; ?></td>
                                <td><img src="./assets/img/<?php echo $vote['vote']; ?>.jpg" width="50" height="50" alt=""> <b>Logo<?php echo $vote['vote']; ?></b></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>