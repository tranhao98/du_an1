

<div class="container">
    <div class="row">
        <div class="col-4 mt-4">
        <h3>Thêm Khu Vực </h3>
            <form enctype="multipart/form-data"  method="post" action="?ctrl=danhmuc&act=insert">
                <div class="form-group">                       
                    <label for="">STT </label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Tên Khu Vực</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Thứ Tự</label>
                    <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="anhien" id="" value="1" checked>
                    Ẩn Hiện
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" name="themkv" id="" class="form-control" value="Submit" aria-describedby="helpId">
                </div>
            </form>
        </div>
        <div class="col-8 mt-4"> 
            <h3>Danh sách khu vực </h3>
            <table border="1">  
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Khu Vực</th>
                        <th scope="col">Thứ Tự</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col">Edit & Delete</th>
                    </tr>
                </thead>                        
                <tbody>
                    <?php foreach ($dskv as $row) { ?>
                    <tr>
                        <td><?=$row['idkhuvuc']?></td>
                        <td><?=$row['tenkhuvuc']?></td>
                        <td><?=$row['thutu']?></td>
                        <td> <?=($row['anhien']==1)? 'Ẩn':'Hiện'; ?></td>
                        <td>
                            <a class="iconedit" href="?ctrl=khuvuc&act=edit&idtb=<?= $row['idkv']?>"><i style='font-size:15px' class='far'>&#xf044;</i></a>
                            <a class="icondelete" href="?ctrl=khuvuc&act=delete&idtb=<?= $row['idkv']?>"><i style='font-size:15px' class='far'>&#xf2ed;</i></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
