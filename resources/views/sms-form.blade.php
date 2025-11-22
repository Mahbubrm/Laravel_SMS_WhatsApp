<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2>How to send SMS</h2>
                <form class="mt-5" action="{{ route('sms.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="phone" class="mb-1">Enter Your Phone Number</label><br>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <button type="sumbit" class="btn btn-dark">Send SMS</button>

                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>