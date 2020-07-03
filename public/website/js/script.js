function addNewPost() {
    document.getElementById("addNewPost").style.display = "block";
    document.getElementById("options").style.display = "none";
}
function back() {
    document.getElementById("addNewPost").style.display = "none";
    document.getElementById("options").style.display = "block";
}
function editPost() {
    document.getElementById("editPost").style.display = "block";
    document.getElementById("pagination").style.display = "flex";
    document.getElementById("options").style.display = "none";
}

function edit($idOn) {
    document.getElementById("editOptions").style.display = "none";
    document.getElementById($idOn).style.display = "block";
}

function backEdit() {
    document.getElementById("editOptions").style.display = "block";
    document.getElementById("editTitle").style.display = "none";
    document.getElementById("editTags").style.display = "none";
    document.getElementById("editAuthor").style.display = "none";
    document.getElementById("editText").style.display = "none";
}
