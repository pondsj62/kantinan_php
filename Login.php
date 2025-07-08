 <link rel="stylesheet" href="style.css">   
 <?php
 include 'header.php';
    ?>
    <form action="login_process.php" method="post">
        <div class="login-container">
            <div class="login-card">
                <h2 class="login-title">เข้าสู่ระบบ</h2>
                <div class="form-group">
                    <label for="USERNAME">ชื่อผู้ใช้</label>
                    <input type="text" id="USERNAME" name="USERNAME" required>
                </div>
                <div class="form-group">
                    <label for="PASSWORD">รหัสผ่าน</label>
                    <input type="password" id="PASSWORD" name="PASSWORD" required>
                </div>
                <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
            </div>
        </div>
    </form>
    <div class="register-link">
        <p>ยังไม่มีบัญชีผู้ใช้? <a href="Form_users.php">สมัครสมาชิก</a></p>
    </div>