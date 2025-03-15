let AllCheck = document.addEventListener("DOMContentLoaded", function () {
    const marcarTudo = document.getElementById("check_all");
    const checkboxes = document.querySelectorAll(".opcao");

    marcarTudo.addEventListener("change", function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = marcarTudo.checked;
        });
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            marcarTudo.checked = [...checkboxes].every(c => c.checked);
        });
    });
});