
let popUpScreen = document.getElementById("popUp");
let titleH1 = document.getElementById("title");
let textP = document.getElementById("txt-card");
let imageElement = document.getElementById("img");
let open = false;

document.body.onload = () => {
    open = false;
};

const titles = ["Wat zijn mijn Hobby's?", "De opleidingen die ik heb gedaan.", "Welke ervaringen heb ik?"];
const text = ["Mijn hobby is vooral sporten, en dan vooral naar de gym gaan. Anders zit ik thuis of in een stadion voetbal te kijken. Ik ben een trouwe supporter van Liverpool. Veder heb ik ook een bijbaantje bij de Hoogvliet in Maassluis. Daar ben ik een vuploegmedewerker waar ik al meer dan 2 jaar ervaring heb. Daar heb ik de skill klantvriendelijkheid geleerd en hoe ik het beste uit mijzelf kan halen.", "Als het komt tot educatie, heb ik alleen de middelbareschool afgerond. Op dit moment ben ik bezig met mijn opleiding Software Development MBO niveau 4. daar zit ik in leerjaar 2. Na mijn opleiding ga ik Werken of ander nog een HBO opleiding doen.", "Wat zijn mijn skills? Als ik aan het werk ga, wil ik altijd structureel aan de slag gaan. Dit  heb ik mijzelf aangeleerd, sinds ik dan beter mijn doelen met het werk kan behalen en daadwerkelijk een kwaliteits product kan maken. Veder wil ik ook ervoor zorgen dat de klant al zijn wensen kan behalen en optijd zijn werk krijgt, oftewel klantvriendelijkheid en de deadline halen staan ook hoog bij mij."];
let images = ["../media/about/gym.jpg", "../media/about/GLR.jpg", "../media/about/f1.png"];

function popUp(x) {
    if (open) {
        popUpScreen.style.display = "none";
        open = false;
        document.body.style.overflow = "visible"
    } else if (!open) {
        popUpScreen.style.display = "block";
        open = true;
        document.body.style.overflow = "hidden"
        
    }

    switch (x) {
        case 1:
            titleH1.innerHTML = titles[0];
            textP.innerHTML = text[0];
            imageElement.src = images[0];
            break;
        case 2:
            titleH1.innerHTML = titles[1];
            textP.innerHTML = text[1];
            imageElement.src = images[1];
            break;
        case 3: 
            titleH1.innerHTML = titles[2];
            textP.innerHTML = text[2];
            imageElement.src = images[2];
            break;
    }
}