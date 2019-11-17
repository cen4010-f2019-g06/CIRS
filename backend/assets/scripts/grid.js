var article = document.createElement("article");
var div = document.createElement("div");
var img = document.createElement("img");
var p = document.createElement("p")
var footer = document.createElement("footer");

var body = document.querySelector("body");

body.append(div);
    article.append(div);
        div.append(img);
        div.append(img);

        article.append(div);
            div.append(p);

        article.append(footer);
            footer.append(div);
            footer.append(div);
                div.append(img);

