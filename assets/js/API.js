//const clientId = "ca6139e49c5bf36";
const clientId = "32d41e6235528de";
// var defaultAlbumId = 'Jfni3';
var defaultAlbumId = 'bgBkMmK';

window.onload= function requestAlbum() {
    // let albumId = document.getElementById("albumIdField").innerText;
    // if(albumId) {
    //     albumId = defaultAlbumId;
    // }


    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            processAlbumRequest(req.responseText);
        }
        else if (req.readyState == 4 && req.status != 200) {
            console.log(req.status + " Error with the imgur API: ", req.responseText);
        }
    }

    req.open('GET', 'https://api.imgur.com/3/album/' + defaultAlbumId + '/images', true); // true for asynchronous     
    

    req.setRequestHeader('Authorization', 'Client-ID ' + clientId);
    req.send();
}
//  console.log(defaultAlbumId);

function processAlbumRequest(response_text) {
    var respObj = JSON.parse(response_text);

    for (item of respObj.data.slice(0, 10)) {
        requestImage(item.id);
        // console.log(item.id);
    }
}




function requestImage(imageHash) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            processImageRequest(req.responseText);
        }
        else if (req.readyState == 4 && req.status != 200) {
            console.log("Error with the imgur API");
        }
    }
    req.open("GET", "https://api.imgur.com/3/image/" + imageHash, true); // true for asynchronous   
    
    // console.log(imageHash);
    req.setRequestHeader('Authorization', 'Client-ID ' + clientId);
    req.send();
}

var imageID=1;
function processImageRequest(response_text) {
    var respObj = JSON.parse(response_text);
    let imgElem = document.createElement("img");
    imgElem.src = respObj.data.link;


   

    var srcProduct = document.getElementById("productIMG"+imageID);


    let productImage= srcProduct.appendChild(imgElem);

     document.getElementById("proimg"+imageID).appendChild(productImage);
     imageID++;


   

}

    

