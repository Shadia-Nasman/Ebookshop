// var booksarray= [];
buttons.addEventListener('click', event => {
    event.preventDefault();
    console.log(event.target.id);
    var idval = event.target.id;
    getbook(idval)
    async function getbook(id) {
        console.log(id);
        var respons = await fetch(`getbook.php?q=${id}`);
        var jsonresponse = await respons.json();
        console.log(jsonresponse);

        // booksarray.push(jsonresponse);

        sessionStorage.setItem("jsonresponse", JSON.stringify(jsonresponse));
        window.location.href = "item.php";

    }


});