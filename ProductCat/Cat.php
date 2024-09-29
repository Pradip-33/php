<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body align="center">
    <h1>Product Category Demo</h1>
    <label for="Category">Category</label>
    <select name="Category" id="Category" onchange="getProduct()">
        <option value="">-- Select Category --</option>
    </select><br><br><br>

    <label for="Product">Product</label>
    <select name="Product" id="Product">
        <option value="">-- Select Product --</option>
    </select>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        const categorySelect = $('#Category');
        const productSelect = $('#Product');

        // Fetch categories
        $.ajax({
            url: 'https://fakestoreapi.com/products/categories',
            method: 'GET',
            success: function(categories) {
                categories.forEach(category => {
                    categorySelect.append(`<option value="${category}">${category.charAt(0).toUpperCase() + category.slice(1)}</option>`);
                });

                // Load products for the first category if available
                if (categories.length > 0) {
                    loadProducts(categories[0]);
                }
            }
        });

        // Fetch products for a selected category
        const loadProducts = (category) => {
            $.ajax({
                url: `https://fakestoreapi.com/products/category/${category}`,
                method: 'GET',
                success: function(products) {
                    productSelect.empty();
                    productSelect.append('<option value="">-- Select Product --</option>');
                    products.forEach(product => {
                        productSelect.append(`<option value="${product.id}">${product.title}</option>`);
                    });
                }
            });
        };

        // Update products when the category changes
        categorySelect.on('change', function() {
            const selectedCategory = $(this).val();
            if (selectedCategory) {
                loadProducts(selectedCategory);
            }
        });
    });
    </script>
</body>
</html>
