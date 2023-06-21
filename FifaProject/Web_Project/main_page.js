function slideLeft() {
    document.getElementById('compaign_row').scrollLeft -= 290;
}

function slideRight() {
    document.getElementById('compaign_row').scrollLeft += 290;
}

function loadMore() {
    const news_row = document.getElementById("news_row_load_more");
    const loadMore_button = document.getElementById("load_button");

    news_row.style.display = "flex";
    news_row.style.flexWrap = "wrap";
    loadMore_button.style.display = "none";

}

