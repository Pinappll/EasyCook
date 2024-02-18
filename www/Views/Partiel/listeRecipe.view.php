<table>
    <tr>
        <th>Titre</th>
        <th>Ingredient</th>
        <th>Instruction</th>
        <th>Image</th>
    </tr>
    <?php foreach ($recipes as $recipe) : ?>
        <tr>
            <td><input type="checkbox" name="recipe[]" id="" value="<?= $recipe->getId() ?>">
            <td><?= $recipe->getTitle_recipe() ?></td>
            <td><?= $recipe->getIngredient_recipe() ?></td>
            <td><?= $recipe->getInstruction_recipe() ?></td>
            <td><img src="/<?= $recipe->getImage_url_recipe() ?>"></img></td>
        </tr>
    <?php endforeach; ?>
</table>