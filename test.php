<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="profile.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="edit-overlay_tmd edit-overlay--show-modal" tabindex="-1">
        <div class="edit-modal" role="dialog" aria-modal="true">
            <div class="edit-title">Sửa sản phẩm</div>
            <div class="edit-text">
                <form action="" class="row_tmd" method="POST">
                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Mã sản phẩm</label>
                        <input type="number" class="input_box_tmd" name="SPID_TMD" value="<?php echo $row['SPID_TMD']; ?>">
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Tên sản phẩm</label>
                        <input type="text" class="input_box_tmd" name="TENSP_TMD" value="<?php echo isset($row['TENSP_TMD']) ? $row['TENSP_TMD'] : ''; ?>">
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Số lượng</label>
                        <input type="number" class="input_box_tmd" placeholder="" name="SOLUONG_TMD" value="<?php echo $row['SOLUONG_TMD']; ?>">
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="exampleSelect1_tmd" class="control_label_tmd">Tình trạng</label>
                        <select name="TINHTRANG_TMD" id="exampleSelect1_tmd" class="input_box_tmd">
                            <option value="">-- Chọn tình trạng --</option>
                            <option value="1" <?php echo ($row['TINHTRANG_TMD'] == 1) ? 'selected' : ''; ?>>Còn hàng
                            </option>
                            <option value="0" <?php echo ($row['TINHTRANG_TMD'] == 0) ? 'selected' : ''; ?>>Hết hàng
                            </option>
                        </select>
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="exampleSelect1_tmd" class="control_label_tmd">Dòng sản phẩm</label>
                        <select name="DONGSP_TMD" id="exampleSelect1_tmd" class="input_box_tmd">
                            <option value="">-- Chọn dòng sản phẩm --</option>
                            <option value="1" <?php echo ($row['TINHTRANG_TMD'] == 1) ? 'selected' : ''; ?>>Laptop
                                Gaming
                            </option>
                            <option value="0" <?php echo ($row['TINHTRANG_TMD'] == 0) ? 'selected' : ''; ?>>Laptop Văn
                                Phòng
                            </option>
                        </select>
                    </div>
                    <div class="form_group_edit_tmd">
                        <label for="exampleSelect1_tmd" class="control_label_tmd">Loại sản phẩm</label>
                        <select name="LOAISP_TMD" id="exampleSelect1_tmd" class="input_box_tmd">
                            <option value="">-- Chọn loại sản phẩm --</option>
                            <option value="0" <?php echo ($row['TINHTRANG_TMD'] == 0) ? 'selected' : ''; ?>>Sản phẩm
                                mới
                            </option>
                            <option value="1" <?php echo ($row['TINHTRANG_TMD'] == 1) ? 'selected' : ''; ?>>Sản phẩm
                                phổ biến
                            </option>
                            <option value="2" <?php echo ($row['TINHTRANG_TMD'] == 2) ? 'selected' : ''; ?>>Sản phẩm
                                khuyến mãi
                            </option>
                            <option value="3" <?php echo ($row['TINHTRANG_TMD'] == 3) ? 'selected' : ''; ?>>Sản phẩm
                                bán chạy
                            </option>
                        </select>
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="exampleSelect1_tmd" class="control_label_tmd">Giảm giá sản phẩm</label>
                        <select name="GIAMGIA_TMD" id="exampleSelect1_tmd" class="input_box_tmd">
                            <option value="">-- Lựa chọn --</option>
                            <option value="1" <?php echo ($row['TINHTRANG_TMD'] == 1) ? 'selected' : ''; ?>>Có
                            </option>
                            <option value="0" <?php echo ($row['TINHTRANG_TMD'] == 0) ? 'selected' : ''; ?>>Không
                            </option>
                        </select>
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Giá bán</label>
                        <input type="number" class="input_box_tmd" placeholder="Nhập giá tiền" name="GIABAN_TMD" value="<?php echo $row['GIABAN_TMD']; ?>">
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Giá gốc</label>
                        <input type="number" class="input_box_tmd" placeholder="Nhập giá tiền" name="GIAGOC_TMD" value="<?php echo $row['GIAGOC_TMD']; ?>">
                    </div>

                    <div class="form_group_edit_tmd">
                        <label for="" class="control_label_tmd">Giá đã giảm</label>
                        <input type="number" class="input_box_tmd" placeholder="Nhập giá tiền" name="GIADAGIAM_TMD" value="<?php echo $row['GIADAGIAM_TMD']; ?>">
                    </div>

                    <div class="form_group_tmd col_md12_tmd">
                        <label for="" class="control_label_tmd">Ảnh sản phẩm</label>
                        <div id="my_img_upload_tmd">
                            <input type="file" id="uploadfile_tmd" name="IMG_TMD" value="<?php echo $row['IMG_TMD']; ?>" onchange="readURL(this);">
                        </div>
                        <div id="thumbbox_tmd">
                            <img height="350" width="500" src="" alt="Thumb Img" id="thumbimage_tmd" style="display: none;">
                            <a href="javascript:" class="removeimg_tmd"></a>
                        </div>
                        <div id="boxchoice_tmd">
                            <a href="javascript:" class="choicefile_tmd">
                                <i class='bx bx-cloud-upload'></i>
                                Chọn ảnh
                            </a>
                            <p style="clear:both"></p>
                        </div>
                    </div>

                    <div class="form_group_tmd">
                        <label for="" class="control_label_tmd">Mô tả sản phẩm</label>
                        <textarea name="MOTA_TMD" id="mota_tmd" class="input_box_tmd" value="<?php echo $row['MOTA_TMD']; ?>"></textarea>
                        <script>
                            CKEDITOR.replace('mota_tmd');
                        </script>
                    </div>
                </form>
            </div>
            <div class="edit-footer">
                <div class="edit-button-container">
                    <button class="edit-button edit-button--cancel">Hủy bỏ</button>
                    <div class="edit-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="edit-button-container">
                    <button class="edit-button edit-button--confirm">Đồng ý</button>
                    <div class="edit-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP" onclick="button_Edit_tmd('<?php echo htmlspecialchars($row['SPID_TMD'], ENT_QUOTES, 'UTF-8'); ?>')">
        <i class='ank_fa_tmd bx bx-edit'></i>
    </button>
</body>

</html>