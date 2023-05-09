function data(){
    const d = new Date()
    let day = d.getDay()
    return day
}
function random(){
    rn = Math.floor(Math.random() * 30)
    document.write('<p>', rn, '%', '</p>')
}
function desconto(){
    
}

function img(){
    let img = document.createElement('img')
    if (data() == 0){
        img.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCTin-VYBNsF5n5YnxS2u_w3ewhC7IfGFaDA&usqp=CAU"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 1){
        img.src = "https://images.contentstack.io/v3/assets/blt93c07aad6c2c008a/blt4e353cae94cb8e51/63ea70cd877c9d3548228bc7/Corki_3.jpg?width=1920&height=1080&format=auto&auto=webp"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 2){
        img.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkVYSUCvORyzNhqzdTv_cRWSZE2DN2TN7o0Q&usqp=CAU"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 3){
        img.src = "https://i.etsystatic.com/37434656/r/il/102dd3/4720663793/il_340x270.4720663793_2x3j.jpg"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 4){
        img.src = "https://pbs.twimg.com/media/FP0q76LXsAst1Hd.png"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 5){
        img.src = "https://pm1.narvii.com/6376/f116d12961221621d5e0e42dddd4e1741f5a57ad_hq.jpg"
        img.classList.add('img')
        document.body.appendChild(img)
    }
    else if (data() == 6){
        img.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh-KQL-G1NfC6a0qicxjPMrnVOXkFE8K-qy-rbGCHo5h-kvDlFNehKoWt5n2HM6_c5Os0&usqp=CAU"
        img.classList.add('img')
        document.body.appendChild(img)
    }
}
function rimg(){
    if (data() == 0){
        document.write( '<p>', 'CS:GO', '</p>')
    }
    else if (data() == 1){
        document.write('<p>', 'League of Legends', '</p>')
    }
    else if (data() == 2){
        document.write('<p>', 'Rocket League', '</p>')
    }
    else if (data() == 3){
        document.write('<p>', 'Brawlhalla', '</p>')
    }
    else if (data() == 4){
        document.write('<p>', 'Valorant', '</p>')
    }
    else if (data() == 5){
        document.write('<p>', 'Clash Royale', '</p>')
    }
    else if (data() == 6){
        document.write('<p>', 'Rainbow Six', '</p>')
    }
}