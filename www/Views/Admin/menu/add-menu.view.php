Formulaire de connexion
<?php $this->includeComponent("form", $configForm, $errorsForm);
if (isset($this->data["message"])) {
    echo "<h3>" . $this->data["message"] . "</h3>";
}
?>