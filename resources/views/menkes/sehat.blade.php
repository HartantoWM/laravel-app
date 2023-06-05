<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kesehatan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

                <br>
                <br>
                <form  action="/menkes/sukses" method="POST">
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                        <div class="col-8">
                            <input id="tgl" name="tgl" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label">Usia</label>
                        <div class="col-8">
                            <input id="usia" name="usia" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L">
                                <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P">
                                <label for="radio_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

</body>

</html>