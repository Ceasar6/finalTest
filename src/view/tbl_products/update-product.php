

<body>
<br>
<br>

<div class="container">
    <div class="col-md-6 mx-auto text-center">
        <div class="header-title">
            <h1 class="wv-heading--title">
                Form Update Product
            </h1>
        </div>
    </div>
    <form method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="product_name" required value="<?php echo $product['product_name']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="category" required value="<?php echo $product['category']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" name="price" required  value="<?php echo $product['price']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" name="quantity" required value="<?php echo $product['quantity']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label " >Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" name="date" required value="<?php echo $product['date']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label " >Description</label>
            <div class="col-sm-10">
                <!--<input type="text" class="form-control" id="inputPassword3" name="description"
                       value="<?php /*echo $product['description']; */?>">-->
                <textarea class="form-control" id="inputPassword3" required  name="description" ><?php echo $product['description']; ?> </textarea>
            </div>
        </div>
        <div class="form-group row text-center">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</body>
