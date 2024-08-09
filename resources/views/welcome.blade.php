<!DOCTYPE html>
<html>

<head>
    <title>Laravel Contact US Form Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">ShipHero Email Form</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Sender Name:</strong>
                                        <input type="text" name="sender_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Sender Email:</strong>
                                        <input type="text" name="sender_email" class="form-control">
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Recipeint Name:</strong>
                                        <input type="text" name="recipient_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Recipeint Email:</strong>
                                        <input type="text" name="recipient_email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Content:</strong>
                                        <textarea class="form-control" cols="20" rows="5" name="content"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
