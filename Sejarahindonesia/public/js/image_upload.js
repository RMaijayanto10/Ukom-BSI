function buatListGambar() {
    var input = document.getElementById("uploadGambar");
    var hapus = "<input type=\"submit\" class=\"hps_btn\" value=\"\">"
    var ul = document.getElementById("listGambar");
    
    while (ul.hasChildNodes()) {
        ul.removeChild(ul.firstChild);
    }
    for (var i = 0; i < input.files.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = input.files[i].name+hapus;
        ul.appendChild(li);
    }
}
