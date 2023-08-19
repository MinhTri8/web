document.addEventListener("DOMContentLoaded", function() {
    const folderButtons = document.querySelectorAll(".folder");

    folderButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const folderContent = button.nextElementSibling;
            if (folderContent.classList.contains("hidden")) {
                folderContent.classList.remove("hidden");
            } else {
                folderContent.classList.add("hidden");
            }
        });
    });
});
