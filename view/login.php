<section class="form-login">
    <div class="container">
        <h2 class="text-center">ĐĂNG NHẬP</h2>
        <form method="POST" action="index.php?act=login">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <div class="mx-1 mx-md-4 mb-5">
                    <label class="form-label" for="form2Example1">Xin Chào</label>
                    <ul class="list-group list-group-light">
                        <li class="list-group-item px-3 border-0 active">
                            <?= $user_name ?>
                        </li>
                        <li class="list-group-item px-3 border-0"><a href="index.php?act=forgotPass">Quên mật khẩu</a></li>
                        <li class="list-group-item px-3 border-0"><a href="index.php?act=editUser">Cập nhật tài khoản</a></li>
                        <?php if ($role == 1) {
                        ?>
                            <li class="list-group-item px-3 border-0"><a href="admin/index.php">Đăng nhập admin</a></li>
                        <?php } ?>
                        <li class="list-group-item px-3 border-0"><a href="index.php?act=logout">Đăng xuất</a></li>
                    </ul>
                </div>

            <?php
            } else {

            ?>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Tên đăng nhập</label>
                    <input type="text" id="form2Example1" name="name_user" class="form-control" />

                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Mật khẩu</label>
                    <input type="password" id="form2Example2" name="pass_user" class="form-control" />

                </div>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Ghi nhớ lần đăng nhập sau </label>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#!">Quên mật khẩu?</a>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block mb-4" name="btn_submit" value="Đăng Nhập">
                <div class="text-center">
                    <p>Chưa có tài khoản? <a href="index.php?act=signUp">Đăng kí</a></p>
                    <p>Hoặc đăng nhập với:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            <?php } ?>
        </form>
    </div>
</section>