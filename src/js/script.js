$(function() {
    $('#openModal-pc').click(function() {
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function() {
        $('#modalArea').fadeOut();
    });
});

$(function() {
    $('#openModal-sp').click(function() {
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function() {
        $('#modalArea').fadeOut();
    });
});

document.getElementById("filter-btn").onclick = function() {
    document.getElementById("filter-box").classList.toggle("none");
};

document.getElementById("close-btn").onclick = function() {
    document.getElementById("filter-box").classList.add("none")
}