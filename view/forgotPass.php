<section class="form-login">
    <div class="container">
        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">QUÊN MẬT KHẨU</p>

                                        <form class="mx-1 mx-md-4" method="POST">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">
                                                        Email</label>
                                                    <input type="email" id="form3Example3c" name="email_user" class="form-control" />

                                                </div>
                                            </div>


                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <input type="submit" name="btn_submit" class="btn btn-primary btn-lg" value="Gửi">
                                                <!-- <button type="button" name="btn_submit" class="btn btn-primary btn-lg">Đăng
                                                    Kí</button> -->
                                            </div>
                                        </form>
                                        <h4>
                                            <?php
                                            if (isset($noti) && ($noti != "")) echo $noti;
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>