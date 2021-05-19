
var menu = document.getElementsByClassName("menu")[0];
var menuItems = document.getElementsByClassName("collapse")[0];
var clicked = false;

menu.addEventListener("click",function(){

    
    menuItems.classList.toggle("menuController");
    menuItems.classList.toggle("animationIn"); 

})

var sucDizileri = ["tt1475582","tt3487382","tt2531336"];


function getAll(){

    for (i=0; i<sucDizileri.length; i++){
        
        var baseUrl = "https://api.themoviedb.org/3/find/"
        var apiURL = "?api_key=a17f05cd5f65cb1c01a737796e11bb39&language=en-US&external_source=imdb_id";
        var url = baseUrl + sucDizileri[i] + apiURL;

        var xhr = new XMLHttpRequest();
    
        xhr.open('GET',url,true);
    
        xhr.onload = function(){
            if(this.status === 200){
                var posts = JSON.parse(this.responseText);
                
                var post = posts.tv_results;
                
            }
            html = "";
            
            var imageURL = "http://image.tmdb.org/t/p/original"+post[0].backdrop_path

            html += `
    
            
            <div class="card">
            <img class="card-img-top" src="${imageURL}" alt="Card image cap">
               <div class="card-body card-suc">
               <p class="card-text">${post[0].name}</p>
               <p "class="card-text">IMDB Puanı : ${post[0].vote_average}</p>
             </div>
            
            
            `
            
            ;
    
            document.querySelector("#sucDizi").innerHTML += html;
            

        }

        xhr.send();
    }


    
}

getAll();


function getMusic(){
    const youtubeKey = "AIzaSyCS318YUThvG0Yu25S5mhNIGJH39o0terQ";
    const videoID = ["UC5vd0WQuAXAgOcqnucdLB1g","UCYLY-BIq0sSOdNXGm1FPR-w","UCdB6ITAkex5apYhZwplJAMg"];

    for(i=0;i<=2;i++){

        
        var url = `https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&id=${videoID[i]}&key=${youtubeKey}`;


        fetch(url)
        .then(resp => {
            return resp.json();
            
        }).then(data =>{
            if(data.status = 200){


                console.log(data);
                let html4 = "";
                html4 += `
    
                    
                    <div class="card">
                        <img class="card-img-top" src="${data.items[0].snippet.thumbnails.high.url}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">${data.items[0].snippet.title}</p>
                        </div>
                    </div> `;
    
                document.querySelector("#alternatif-rock").innerHTML += html4;





            }
        }).catch(error => {
            console.log(error);
        })

    }

        
}

function getSport(){

    const youtubeKey = "AIzaSyCS318YUThvG0Yu25S5mhNIGJH39o0terQ";

    const channelID = ["UCvZi1jVVZ2yq0k5kkjzmuGw","UCOdS-I1sYkKWhtTjMUWP_TA","UC8CSt-oVqy8pUAoKSApTxQw"];

    for(i=0;i<=2;i++){

        
        var url = `https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&id=${channelID[i]}&key=${youtubeKey}`;


        fetch(url)
        .then(resp => {
            return resp.json();
            
        }).then(data =>{
            if(data.status = 200){


                
                let html5 = "";
                html5 += `
    
                    
                    <div class="card">
                        <img class="card-img-top" src="${data.items[0].snippet.thumbnails.high.url}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">${data.items[0].snippet.title}</p>
                    </div>`;
    
                document.querySelector("#basketbol").innerHTML += html5;





            }
        }).catch(error => {
            console.log(error);
        })

    }

}




getMusic();
getSport()