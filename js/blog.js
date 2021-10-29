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
                    text.innerHTML += `<div id="id">${textid.id}</div>`
                    text.innerText += textid.titre
                    text.innerText += textid.contenu
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

    let article1 = document.createElement("DIV")
    article1.setAttribute("id", 'article1')
    articleDiv.appendChild(article1)

    let liste1 = document.createElement('UL')
    liste1.setAttribute("id", 'liste1')
    article1.appendChild(liste1)

    let article2 = document.createElement("DIV")
    article2.setAttribute("id", 'article2')
    articleDiv.appendChild(article2)

    let liste2 = document.createElement('UL')
    liste2.setAttribute("id", 'liste2')
    article2.appendChild(liste2)

    let article3 = document.createElement("DIV")
    article3.setAttribute("id", 'article3')
    articleDiv.appendChild(article3)

    let liste3 = document.createElement('UL')
    liste3.setAttribute("id", 'liste3')
    article3.appendChild(liste3)

    let article4 = document.createElement("DIV")
    article4.setAttribute("id", 'article4')
    articleDiv.appendChild(article4)

    let liste4 = document.createElement('UL')
    liste4.setAttribute("id", 'liste4')
    article4.appendChild(liste4)

    

};