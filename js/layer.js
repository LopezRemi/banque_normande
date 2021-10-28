document.body.onload = addElement;


function addElement() {
    let mainLayerDiv = document.createElement('DIV')
    mainLayerDiv.classList.add("mainLayer")
    document.body.appendChild(mainLayerDiv);

    let layerDiv = document.createElement('DIV')
    layerDiv.classList.add("divLayer")
    mainLayerDiv.appendChild(layerDiv)

    let titleDiv = document.createElement('H1')
    titleDiv.classList.add("titleLayer")
    titleDiv.innerText = ('Règles du site')
    layerDiv.appendChild(titleDiv)

    let textLayer = document.createElement('DIV')
    textLayer.classList.add("textLayer")
    layerDiv.appendChild(textLayer)
    let httpRequest = new XMLHttpRequest()
 httpRequest.onreadystatechange = function() {
     if (httpRequest.readyState === XMLHttpRequest.DONE) {
         if (httpRequest.status === 200) {
             let text = document.getElementsByClassName("textLayer");
             text[0].innerText = httpRequest.responseText
             console.log(httpRequest.responseText)
         } 
    }
}    
    httpRequest.open('GET', 'data/layer.txt');
    httpRequest.send();

    let layerBtn = document.createElement('button')
    layerBtn.classList.add('btn','btn-primary','layerBtn')
    layerBtn.innerHTML = "J'ai compris"
    layerDiv.appendChild(layerBtn)

    document.getElementsByClassName("layerBtn")
    layerBtn.addEventListener("click",(e)=>{
    mainLayerDiv.classList.add("none")

    })

};