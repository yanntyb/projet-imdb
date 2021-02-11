let tabProfil = [];

for(let i=0;i<10;i++){
    $.ajax({
        url: 'https://randomuser.me/api/',
        dataType: 'json',
        success: function(data) {
            tabProfil.push(data);
            if(i === 9){
                afficherProfile(tabProfil);
            }
        }
    });
}

function afficherProfile(data){
    for(let profile in data){
        // console.log(data[profile]);
        let div = $(document.createElement("div"));
        let img = $(document.createElement("img"));
        let name = $(document.createElement("span"));
        name.addClass("profileName")
        name.html(data[profile]["results"][0]["name"]["first"] + " " + data[profile]["results"][0]["name"]["last"]);
        // console.log(data[profile]["results"][0]["picture"]["medium"])
        img.attr("src", data[profile]["results"][0]["picture"]["medium"]);
        div.append(img);
        div.append(name);
        div.addClass("profileDiv");
        $("#randomProfil").append(div);
    }
}
