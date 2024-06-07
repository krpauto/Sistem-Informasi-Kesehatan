<?php include("inc_header.php")?>
<style>
    table {
        width: 600px;
    }

    @media screen and (max-width: 700px) {
        table{width: 90%;
        }
    }
    table td{
        padding: 5px;
    }
    td.label { width: 40%;}
    .input {
        border: 1px solid #CCCCCC;
        background-color: #dfdfdf;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
    }
    input.tbl-biru{
        border: none;
        background-color: #3f72af;
        border-radius: 20px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color:#FFFFFF;
        cursor: pointer;
        font-weight: bold;
    }
    input.tbl-biru{
        background-color: #fc5185;
        text-decoration: none;
    }
</style>
<h3>Pendaftaran</h3>
<?php
$email        = "";
$nama_lengkap = "";
$err          = "";
$sukses       = "";

if(isset($_POST['simpan'])){
    $email                  = $_POST['email']
    $nama_lengkap           = $_POST['nama_lengkap'];
    $password               = $_POST['password']
    $konfirmasi_password    =$_POST['konfirmasi_password'];

    if($email == '' or $nama_lengkap == '' or $konfirmasi_password == "" or $password == ""){
        $err .= "<li>Silahkan masukan semua isian.</li>";
}
    if($email != ''){
        $sql1  ="select email from members where email = '$email'";
        $q1    = mysqli_query($koneksi, $sql1);
        $n1    = mysqli_num_rows($q1);
        if($n1 > 0){
            $err .="<li>Email yang kamu daftarkan sudah terdaftar</li>";
    }
    if(){}
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <td cklass="label">Email</td>
            <td>
                <input type="text" name="email" class="input" value="<?php echo $email?>"/>
            </td>
        </tr>
        <tr>
            <td cklass="label">Nama Lengka</td>
            <td>
                <input type="text" name="nama_lengkap" class="input" value="<?php echo $nama_lengkap?>"/>
            </td>
        </tr>
        <tr>
            <td cklass="label">Password</td>
            <td>
                <input type="password" name="password" class="input" />
            </td>
        </tr>
        <tr>
            <td cklass="label">Konfirmasi Password</td>
            <td>
                <input type="password" name="konfirmasi_password" class="input" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
            </td>
        </tr>
    </table>
</form>

<?php include("inc_footer.php")?>
