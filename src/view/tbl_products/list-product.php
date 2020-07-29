<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<div class="container">
    <body>
    <h1>List Product</h1>
    <a href="index.php?page=add-product">
        Add Product</a>
    <form id="form-search" method="post" action="index.php?page=search-product">
        <input type="text" name="keyword" placeholder="keyword" />
        <button class="btn btn-secondary" type="submit">Search</button>
    </form>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        <?php if (empty($products)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else : ?>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $product->getProductName();?></td>
                    <td><?php echo $product->getCategory(); ?></td>
                    <td>

                        <a href="index.php?page=update-product&id=<?php echo $product->getId(); ?>">
                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-repeat"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
                                <path fill-rule="evenodd"
                                      d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
                            </svg>
                        </a></td>
                    <td><a href="index.php?page=delete-product&id=<?php echo $product->getId(); ?>">
                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    </body>
</div>

</html>