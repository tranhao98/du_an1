

<div class="container">
    <div class="row">
        <div class="col-4 mt-4">
        <h3>Thêm Danh mục </h3>
            <form enctype="multipart/form-data"  method="post" action="?ctrl=danhmuc&act=insert">
                <div class="form-group">                       
                    <label for="">ID Danh Mục </label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
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
            <h3>Danh sách danh mục </h3>
            <table border="1">  
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Thứ Tự</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col">Edit & Delete</th>
                    </tr>
                </thead>                        
                <tbody>
                    <?php foreach ($dsdm as $row) { ?>
                    <tr>
                        <td><?=$row['iddm']?></td>
                        <td><?=$row['tendm']?></td>
                        <td><?=$row['thutu']?></td>
                        <td> <?=($row['anhien']==1)? 'Ẩn':'Hiện'; ?></td>
                        <td>
                            <a class="iconedit" href="?ctrl=danhmuc&act=edit&idtb=<?= $row['iddm']?>"><i style='font-size:15px' class='far'>&#xf044;</i></a>
                            <a class="icondelete" href="?ctrl=danhmuc&act=delete&idtb=<?= $row['iddm']?>"><i style='font-size:15px' class='far'>&#xf2ed;</i></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
