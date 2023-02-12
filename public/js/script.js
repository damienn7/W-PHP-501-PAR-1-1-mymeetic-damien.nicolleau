
let button = document.getElementsByClassName("header-container_nav-container_dropdown_img-top")[0];
let drop_down = document.getElementsByClassName("header-container_nav-container_dropdown")[0];

let count_dropdown = 1;

let count_filtre = 1;

drop_down.style.display = "none";

button.addEventListener("click", () => {
    if (count_dropdown % 2 != 0) {
        drop_down.style.display = "";
        count_dropdown++;
    } else {
        drop_down.style.display = "none";
        count_dropdown++;
    }
});

window.onload = function () {
    let filtre = document.getElementsByClassName("main-container-home_div-filtre")[0];
    let search = document.getElementsByClassName("header-container_nav-container_ul_li")[0];

    if (filtre) {

        search.addEventListener("click", () => {
            if (count_filtre % 2 != 0) {
                filtre.style.display = "";
                count_filtre++;
            } else {
                filtre.style.display = "none";
                count_filtre++;
            }
        });
    }
}
