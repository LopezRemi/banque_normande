document.body.onload = addElementBlog;

function addElementBlog() {
    let mainBlogDiv = document.createElement('DIV');
    mainBlogDiv.setAttribute("id", "mainBlogDiv");
    let mainArea = document.getElementById("blog");
    mainArea.appendChild(mainBlogDiv);

    let httpRequest = new XMLHttpRequest()
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                let text = document.getElementById("articleDiv");
                var response = JSON.parse(httpRequest.responseText);
                for(let textid of response ) {
                    text.innerHTML += `<div id="id">Id : ${textid.id}</div>`
                    text.innerHTML += `<div id="titre">Title : ${textid.titre}</div>`
                    text.innerHTML += `<div id="contenu">Contenu : ${textid.contenu}</div>`
                    console.log(textid);
                }
        
               
            }
        }
    }
    httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles');
    httpRequest.send();

    let titleBlogDiv = document.createElement('DIV');
    titleBlogDiv.setAttribute("id", "titleBlogDiv");
    mainBlogDiv.appendChild(titleBlogDiv)

    let titleBlog = document.createElement("H1");
    titleBlog.setAttribute("id", "titleBlog");
    titleBlogDiv.appendChild(titleBlog);
    titleBlog.innerText = "Articles de Blog :"

    let articleDiv = document.createElement("DIV")
    articleDiv.setAttribute("id", "articleDiv");
    mainBlogDiv.appendChild(articleDiv)

};