function shake() {

    fetch("http://127.0.0.1:5002/api.php", {
            method: "GET",
            // mode: "cors",
            // cache: "no-cache",
            // credentials: "same-origin"
            //   headers: {"Content-Type": "text/plain; charset=utf-8"},
            //body: JSON.stringify({command: "get_token"}),
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