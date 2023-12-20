<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Registrasi</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Name</label>
                        <input type="text" name="fname" placeholder="Name" required>
                    </div>
                    <div class="field input">
                        <label>Bidang</label>
                        <select name="lname" required>
                            <option value="">Pilih Bidang</option>
                            <option value="PPh badan">PPh badan</option>
                            <option value="PPh tahunan orang pribadi">PPh tahunan orang pribadi</option>
                            <option value="PPh pasal 21">PPh pasal 21</option>
                            <option value="PPh pasal 22 dan 23">PPh pasal 22 dan 23</option>
                            <option value="PPh pasal 25">PPh pasal 25</option>
                            <option value="UMKM">UMKM</option>
                        </select>
                    </div>

                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>

</html>