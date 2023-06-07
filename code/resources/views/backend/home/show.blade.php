<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @media print{
            #hide{
                display: none;
            }
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset($home->image) }}" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h1>{{ $home->title }}</h1>
                        </div>
                        <div class="card-text">
                            <p>{{ $home->description }}</p>
                        </div>

                        <div class="card-text">
                            <p>{{ $home->price }}</p>
                        </div>

                        <button id="hide" class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                        <button id="hide" class="btn btn-info" > <a href="/home"> Back</a>
                        </button>


                    </div>
                </div>
            </div>
        </div>


    </div>


</body>
</html>
