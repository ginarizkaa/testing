<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #e9ebec;
        }

        .card-img-top {
            width: 100%;
            height: 6vw;
            object-fit: cover;
        }

        .card-body {
            font-size: 12px;
        }

        .box {
            width: 100%;
            height: 6vw;
            background-color: #959595;
            display: flex;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row" id="listSashimi">
                    @foreach($menu as $m)
                    <div class="col-3 mt-3">
                        <div class="card" onclick="add('{{$m->id}}','{{$m->nama}}','{{$m->harga}}')">
                            <img class="card-img-top" src="{{ url('image', $m->file) }}" alt="Card image cap">
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    {{ $m->nama }}
                                </center>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row" id="listNorimaki">
                </div>
                <div class="row" id="listOshizuki">
                </div>
                <div class="row" id="listInarizushi">
                </div>
                <div class="row" id="listNigiri">
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="box">
                                <div class="d-flex justify-content-center" style="width: 100%;">
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="p-2 text-center" style="width: 100%;">
                                            <h1 class="text-center text-white" style="margin-bottom: 0px; font-size: 55px">Sa</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    Sashimi
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="box">
                                <div class="d-flex justify-content-center" style="width: 100%;">
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="p-2 text-center" style="width: 100%;">
                                            <h1 class="text-center text-white" style="margin-bottom: 0px; font-size: 55px">No</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    Norimaki
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="box">
                                <div class="d-flex justify-content-center" style="width: 100%;">
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="p-2 text-center" style="width: 100%;">
                                            <h1 class="text-center text-white" style="margin-bottom: 0px; font-size: 55px">Os</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    Oshizuki
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="box">
                                <div class="d-flex justify-content-center" style="width: 100%;">
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="p-2 text-center" style="width: 100%;">
                                            <h1 class="text-center text-white" style="margin-bottom: 0px; font-size: 55px">In</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    Inarizushi
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="box">
                                <div class="d-flex justify-content-center" style="width: 100%;">
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="p-2 text-center" style="width: 100%;">
                                            <h1 class="text-center text-white" style="margin-bottom: 0px; font-size: 55px">Ni</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0;">
                                <center>
                                    Nigiri
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div style="margin-top: 20px;">
                    <div class="d-flex justify-content-between" style="background-color: #e3e6f3;">
                        <div class="p-1" style="background-color: #bcc5e1;">
                            <img src="image/user.png" width="50px" alt="">
                        </div>
                        <div class="align-self-center">
                            <h4 style="margin-bottom: 0px;">NEW CUSTOMER</h4>
                        </div>
                        <div class="p-1" style="background-color: #bcc5e1;">
                            <img src="image/bill.png" width="50px" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-white py-2">
                    <center>Dine in&nbsp;<i class="fa fa-angle-down"></i></center>
                </div>
                <div class="d-flex justify-content-between bg-white mt-1">
                    <div class="p-1">
                        1
                    </div>
                    <div class="p-1">
                        <a href="#">View Table</a>
                    </div>
                </div>
                <div id="listBill">
                </div>
                <div class="d-flex justify-content-center bg-white my-1">
                    <div class="p-1">
                        <a href="#" onclick="reset()">Clear Sale</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center bg-white my-1">
                    <div class="p-1">
                        <a href="#"></a>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-6 py-0 px-0">
                        <div class="mr-1 py-0 px-0" style="background-color: #e3e6f3; padding:0">
                            <div class="d-flex justify-content-center">
                                <div class="p-2">
                                    <a href="#" onclick="save()">Save Bill</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 py-0 px-0">
                        <div class="ml-1 py-0 px-0" style="background-color: #e3e6f3; padding:0">
                            <div class="d-flex justify-content-center">
                                <div class="p-2">
                                    <a href="#" onclick="bayar()">Bayar Bill</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <div class="p-1" style="background-color: #495da7;">
                        <img src="image/bill2.png" width="35px" alt="">
                    </div>
                    <div class="d-flex align-items-stretch ml-1" style="width: 100%; background-color: #495da7;">
                        <div class="align-self-center text-center text-white" style="width: 100%;">
                            <h4 style="margin-bottom: 0px;" id="charge">CHARGE Rp. 0</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
<script>
    var arr = [];
    var total_bill = 0;

    function save() {
        if (total_bill == 0) {
            Swal.fire({
                title: 'Oopss!',
                text: 'Belum Bayar',
                icon: 'error',
                confirmButtonText: 'try again'
            });
        } else {
            $.ajax({
                type: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ url('/save') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "total": total_bill
                },
                success: function(response) {
                    if (response.status === 'success') {
                        reset();
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false
                        })
                    }
                },
                error: function(response) {
                    console.log(response);
                    Swal.fire({
                        title: 'Oopss!',
                        text: 'Something Went Wrong',
                        icon: 'error',
                        confirmButtonText: 'try again'
                    });
                    // console.log('gagal', response);
                }
            });
        }
    }


    function reset() {
        $('#listBill').html("");
        x = '';
        arr = [];
        total_bill = 0;
        $('#charge').html("CHARGE Rp. 0");

    }

    function bayar() {
        total_bill = 0;
        console.log(arr);
        for ($i = 0; $i < arr.length; $i++) {
            total_bill = total_bill + arr[$i].total;
        }
        $('#charge').html("CHARGE Rp. " + total_bill);
    }

    function add(id, name, harga) {
        var status = arr.some(e => e.id == id);
        if (status) {
            var el = arr.find(x => x.id == id);
            el.qty = (el.qty) + 1;
            el.total = harga * el.qty;
        } else {
            var el = arr.find(x => x.id == id);
            arr.push({
                'id': id,
                'name': name,
                'qty': 1,
                'total': parseInt(harga),
            });
        }
        var x = '';
        for ($i = 0; $i < arr.length; $i++) {
            if (arr[$i].qty == 1) {
                var q = '';
            } else {
                var q = arr[$i].qty + "x";
            }
            x = x + '<div class="d-flex bg-white">' +
                '<div class="mr-auto p-2" style="width:200px">' + arr[$i].name + '</div>' +
                '<div class="p-2 text-right" style="width:50px">' + q + '</div>' +
                '<div class="p-2 text-right" style="width:100px;">Rp. ' + arr[$i].total + '</div>' +
                '</div>';
        }
        $('#listBill').html(x);
    }
</script>