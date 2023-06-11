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

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">CẬP NHẬT TÀI KHOẢN</p>
                                        <?php
                                        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                                            extract($_SESSION['user']);
                                        }

                                        ?>
                                        <form class="mx-1 mx-md-4" method="POST" action="index.php?act=editUser">

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example1c">Tên đăng
                                                        nhập</label>
                                                    <input type="text" name="name_user" id="form3Example1c" value="<?= $user_name ?>" class="form-control" />

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">
                                                        Email</label>
                                                    <input type="email" id="form3Example3c" name="email_user" value="<?= $email ?>" class="form-control" />

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4c">Mật khẩu</label>
                                                    <input type="password" id="form3Example4c" name="pass_user" value="<?= $pass ?>" class="form-control" />

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4cd">Số điện thoại</label>
                                                    <input type="number" id="form3Example4cd" name="phone_number" value="<?= $numberPhone ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-map fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4cd">Địa chỉ</label>
                                                    <input type="text" id="form3Example4cd" name="addres" value="<?= $addres ?>" class="form-control" />

                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-center mb-5">
                                                <input class="form-check-input me-2" type="checkbox" name="check_user" value="" id="form2Example3c" />
                                                <label class="form-check-label" for="form2Example3">
                                                    Tôi đồng ý với điều khoản <a href="#!">Terms of service</a>
                                                </label>
                                            </div>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                                                <input type="submit" name="btn_submit" class="btn btn-primary btn-lg" value="Cập nhật tài khoản">
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