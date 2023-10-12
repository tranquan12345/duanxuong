<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtile">Giỏ Hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng </th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php 
                        $tong=0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh=$img_path.$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '<tr>
                                <td><img src="'.$hinh.'"alt="" height="80px"></td>
                                <td>'.$cart[1].'</td>
                                <td>'.$cart[3].'</td>
                                <td>'.$cart[4].'</td>
                                <td>'.$ttien. '</td>
                                <td><input type="button" value="Xóa"></td>
                            </tr>';
                }
                echo '<tr>
                    <td colspan="4">Tổng đơn hàng </td>

                    <td>'.$tong.'</td>
                    <td></td>
                </tr>';
            ?>
                </table>
            </div>
        </div>
    </div>
</div>