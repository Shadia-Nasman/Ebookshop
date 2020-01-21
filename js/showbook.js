var bookdetails = sessionStorage.getItem("jsonresponse");
    //  window.location.href = "item.php";
    console.log(JSON.parse(bookdetails));
    var detailsjson=JSON.parse(bookdetails);
    
    document.getElementById("price").innerHTML = detailsjson.price+" €";
    document.getElementById("bookname").innerHTML = detailsjson.title;
    document.getElementById("booktype").innerHTML = detailsjson.type+ "book";
    document.getElementById("publishyear").innerHTML = "Published in: "+detailsjson.publishdate;
    document.getElementById("author").innerHTML = "Written By: "+detailsjson.author;
    document.getElementById("imgitem").src=detailsjson.photo;



    