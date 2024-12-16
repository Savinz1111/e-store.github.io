<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-0">
        <h1 class="ms-4">Product data</h1>
        <button class="btn btn-primary float-end me-4 addProduct"><i class="fa-solid fa-plus me-1"></i>Add
            Product</button>
        <table class=" table table-hover align-middle mt-5 text-center" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php include 'function.php' ;
                getProduct()
            ?>
            </tbody>
        </table>
    </div>
    <div class="modals container-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="text-center " id="titles"></h2>
            <input type="hidden" name="hide_id" id="hide_id">
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="price" class="form-label mt-2">Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="qty" class="form-label mt-2">QTY</label>
                <input type="text" name="qty" id="qty" class="form-control">
            </div>
            <div class="form-group">
                <label for="cate" class="form-label mt-2">Category</label>
                <select name="category" id="cate" class="form-control">
                    <option value="Laptop">Laptop</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Phone">Phone</option>
                    <option value="Accessories">Accessories</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image" class="form-label mt-2">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <input type="hidden" name="hide_image" id="hide_image" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="form-label mt-2">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="btnSave" class="btn mt-4 me-2 btn-primary btnSave">Save</button>
                <button type="submit" name="btnEdit" class="btn mt-4 me-2 btn-success btnEdit">Edit</button>
                <button type="button" class="btn mt-4 me-2 btn-danger btnCancel">Cancel</button>
            </div>
        </form> 
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-LabelLedby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this product?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="hide_id_delete" id="hide_id_delete">
                        <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="delete">Yes, delete.</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(() => {
        $('.addProduct').click(() => {
            $('.modals').show()
            $('.btnEdit').hide();
            $('.btnSave').show();
            $('#titles').html('Add Product')
        })
        $('.btnCancel').click(() => {
            $('.modals').hide()
        })
        $(document).on('click','.btnDelete',function(){
        const tid=$(this).parents('tr').find('td:nth-child(1)').text()
            $('#hide_id_delete').val(tid)
        })
        $(document).on('click','.editProduct',function(){
            $('.modals').show();
            $('.btnEdit').show();
            $('.btnSave').hide();
            $('#titles').html('Edit Product');
            const table_code=$(this).parents('tr').find('td:nth-child(1)').text();
            const table_title=$(this).parents('tr').find('td:nth-child(2)').text();
            const table_price=$(this).parents('tr').find('td:nth-child(3)').text();
            const table_qty=$(this).parents('tr').find('td:nth-child(4)').text();
            const table_category=$(this).parents('tr').find('td:nth-child(5)').text();
            const tbale_image=$(this).parents('tr').find('img').attr('src');
            const name_image=tbale_image.split('/').pop();
            
            $('#hide_id').val(table_code);
            $('#title').val(table_title);
            $('#qty').val(table_qty);
            $('#price').val(table_price);
            $('#cate').val(table_category);
            $('#hide_image').val(name_image);
            
        })
    })
</script>