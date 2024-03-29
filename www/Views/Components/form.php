<form method="<?= $config["config"]["method"] ?? "GET" ?>" action="<?= $config["config"]["action"] ?? "" ?>" class="<?= $config["config"]["class"] ?? "" ?>" id="<?= $config["config"]["id"] ?? "" ?>" <?= (!empty($config["config"]["enctype"])) ? 'enctype="' . $config["config"]["enctype"] . '"' : "" ?>>


    <div class="container">
        <?php if (!empty($data)) : ?>
            <div style="background-color: red">
                <?php foreach ($data as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>


        <?php foreach ($config["inputs"] as $name => $configInput) : ?>
            <div class="form-group">
                <?php if ($configInput["type"] === "checkbox") : ?>
                    <?php foreach ($configInput["value"] as $value) : ?>
                        <input name="<?= $name ?>[]" type="<?= $configInput["type"] ?>" id="<?= $value["id"] ?>" value="<?= $value["id"] ?>" <?= ($value["checked"]) ? "checked" : "" ?> <?= (!empty($configInput["required"])) ? "required" : "" ?>>
                        <label for="<?= $value["id"] ?>"><?= $value["name"] ?></label>
                    <?php endforeach; ?>
                <?php elseif ($configInput["type"] === "textarea") : ?>
                    <textarea name="<?= $name ?>" class="<?= $configInput["class"] ?? "" ?>" placeholder="<?= $configInput["placeholder"] ?? "" ?>" <?= (!empty($configInput["required"])) ? "required" : "" ?>><?= $configInput["value"] ?? "" ?></textarea><br>
                <?php elseif ($configInput["type"] === "select") : ?>
                    <select name="<?= $name ?>" class="<?= $configInput["class"] ?? "" ?>" placeholder="<?= $configInput["placeholder"] ?? "" ?>" <?= (!empty($configInput["required"])) ? "required" : "" ?>>
                        <option disabled selected><?= $configInput["placeholder"] ?></option>
                        <?php foreach ($configInput["option"] as $option) : ?>
                            <option value="<?= $option["id"] ?>" <?= $option["selected"] ?? "" ?>><?= $option["name"] ?></option>
                        <?php endforeach; ?>
                        <?php if ($name === "parent_id") : ?>
                            <option value="0">Aucun parent</option>
                        <?php endif; ?>

                    </select><br>
                <?php elseif ($configInput["type"] === "partiel") : ?>
                    <div class="<?= $configInput["class"] ?>">
                        <h2><?= $configInput["titre"] ?></h2>
                    </div>
                <?php else : ?>
                    <input name="<?= $name ?><?= ($configInput["type"] === "text" && !empty($configInput["multiple"])) ? "[]" : "" ?>" type="<?= $configInput["type"] ?? "text" ?>" id="<?= $configInput["id"] ?? "" ?>" class="<?= $configInput["class"] ?? "" ?>" placeholder="<?= $configInput["placeholder"] ?? "" ?>" value="<?= $configInput["value"] ?? "" ?>" <?= (!empty($configInput["required"])) ? "required" : "" ?>><br>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <? if (!empty($config["div"])) : ?>
            <div class="<?= $config["div"]["class"] ?? "" ?>">
                <h2><?= $config["div"]["titre"] ?? "" ?></h2>
            </div>
        <? endif; ?>
        <input type="submit" class="button button-primary" value="<?= $config["config"]["submit"] ?? "Envoyer" ?>">
    </div>
</form>