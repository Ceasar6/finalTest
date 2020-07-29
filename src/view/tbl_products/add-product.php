
<body>
<br>
<br>

<div class="container">
    <div class="col-md-6 mx-auto text-center">
        <div class="header-title">
            <h1 class="wv-heading--title">
                Form Add product
            </h1>
        </div>
    </div>
    <form method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="product_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="category" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control"  name="price" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control"  name="quantity"required >
            </div>
        </div>  <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control"  name="date" required >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control"  name="description" required> </textarea>
            </div>
        </div>
        <div class="form-group row text-center">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div>
</form>
</body>
