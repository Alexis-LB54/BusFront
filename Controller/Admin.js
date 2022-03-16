document.getElementById("connection").addEventListener('submit', ($event) => {
    $event.preventDefault();
    getToken().then((tk) => {
        getTravel(tk).then((travel) => { showTravel(travel) }
        )
    });
})

async function getToken() {

    let email = $("#email").val()
    let password = $("#password").val()
    
    // email: "alexis@lebail.eu",
    // password: "alexis",
    let data = JSON.stringify({
        email: email,
        password: password
    });

    console.log(data);

    let tk;

    await $.ajax({
        url: `http://127.0.0.1:8000/api/login_check`,
        dataType: 'json',
        type: 'POST',
        data: data,
        contentType: 'application/json',
        success: (response) => {
            console.log("test1", response);
            tk = response?.token ?? false
        },
        error: () => {
            console.log("erreur");
        }
    });
    console.log("tk", tk);

    return tk;

}

async function getTravel(tk) {
    console.log("traveltk1", tk);
    if (!tk) {
        return false
    }
    // console.log("traveltk2", tk);

    let travel;

    await $.ajax({
        url: `http://127.0.0.1:8000/api/travel`,
        dataType: 'json',
        type: 'GET',
        contentType: 'application/ld+json',
        headers: { "Authorization": 'Bearer ' + tk },
        success: (response) => {
            console.log("travel succes", response);
            if (response.lenght === 0) {
                console.log("travel vide");
                return false
            }
            travel = response;
        },
        error: () => {
            console.log("erreur2");
        }
    });

    return travel;
}

function showTravel(travel) {

    console.log("show", travel);

    travel.forEach(travel => {

        console.log("StartLocation", travel.StartLocation);

        console.log("FinalDestination", travel.FinalDestination);

        let html = `<div><h2>${travel.StartLocation}</h2><p>${travel.FinalDestination}</p> </div>`

        $("#contenu").html(html);
    })

}