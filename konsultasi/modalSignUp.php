<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
            <div class="modal-content">
                <div class="modal-body px-0">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col">
                                <img src="img/modal_head.png" alt="" class="img-fluid">

                            </div>
                            <div class=" col px-3">
                                <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button></div>

                                <div class="row justify-content-center">
                                    <div class="col-11 ps-0">
                                        <div class="w-100">
                                            <h3 class="mb-4">Daftar Sekarang!</h3>
                                        </div>
                                        <p class="mt-4 text-left fs-6"><b>Masukan email</b> untuk mulai menggunakan
                                            layanan
                                            Pajak di JudulWeb</p>

                                        <!-- forms -->
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label mb-2">
                                                    Email</label>
                                                <input type="email" class="form-control py-2"
                                                    placeholder="your@email.com" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit"
                                                    class="form-control btn btn-primary rounded submit px-3 py-2">Daftar</button>
                                            </div>
                                            <div class="text-justifys font-small-10pt mb-4">
                                                <p class="">
                                                    Dengan masuk atau mendaftar, saya menyetujui <u><b>Ketentuan
                                                            Penggunaan
                                                            klinik
                                                            pajak</b></u> dan <u><b>Kebijakan Privasi klinik
                                                            pajak</b></u>
                                                </p>

                                            </div>
                                            <!-- forms END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- EndModal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>