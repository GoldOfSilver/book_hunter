<?php

require_once '../app/models/categoriesModel.php';

use App\Models\CategoriesModel;

?>

<ul class="list-reset">
    <?php

    $categories = CategoriesModel\findAll($connexion);

    foreach ($categories as $category) : ?>
        <li>
            <a class="text-gray-300 hover:text-white" href="#">Action</a>
        </li>
    <?php endforeach; ?>    
</ul>