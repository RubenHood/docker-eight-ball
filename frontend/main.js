function shake() {

    fetch("http://localhost:5020/api.php", {
            method: "GET",
            mode: "cors",
            cache: "no-cache",
            origin: "http://localhost:5010",
            credentials: "same-origin",
            headers: { "Content-Type": "text/plain; charset=utf-8" }
        })
        .then((res) => res.text())
        .then((body) => {
            document.getElementById("resultado").innerHTML = body;
            console.log("body", body);
        })
        .catch(e => {
            console.log(e);
        });
}