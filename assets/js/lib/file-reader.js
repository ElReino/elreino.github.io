function readFile(file, callback) {
    const raw = new XMLHttpRequest();
    raw.overrideMimeType("application/json");
    raw.open("GET", file, true);
    raw.onreadystatechange = function () {
        if (raw.readyState === 4 && raw.status === 200) {
            callback(raw.responseText)
        }
    };
    raw.send();
}
