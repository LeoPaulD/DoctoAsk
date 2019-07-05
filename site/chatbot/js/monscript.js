var contentChat = document.querySelector(".contentChat");
var sendButton = document.querySelector(".send");
var inputText = document.querySelector("input[type='text']");

init();

/*
*** Fonction Initialisation
*/
function init() {

  //Initialisation btn "Send"
  sendButton.addEventListener("click", () => {
    if (inputText.value)
      reponseBot = newMsg(true, escapeHtml(inputText.value));
    newMsg(false, reponseBot);
  })

  //Initialisation keyPush ENTER
  document.addEventListener("keydown", e => {
    if (e.key === "Enter" && inputText.value) {
      reponseBot = newMsg(true, escapeHtml(inputText.value));
      newMsg(false, reponseBot);
    }
  })

  //Initialisation keyUp ENTER
  document.addEventListener("keyup", e => {
    checkMsg();
  })

  //Message de bienvenue
  newMsg(false, "Bienvenue M. xxx, veuillez saisir la commande !help pour plus d'informations.");
}

/*
*** Fonction sécurisation des caractères
*/
function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }

/*
*** Fonction qui créer les messages (bot et utilisateur)
*/
function newMsg(entity, msg) {

  //
  var containerMsg = document.createElement("div");
  let response = "";

  var contentImg = document.createElement("div");
  contentImg.classList.add("imgProfil");


  //
  var contentMsg = document.createElement("div");
  contentMsg.classList.add("msg");
  contentMsg.innerHTML = msg;

  var imgEntity = document.createElement("img");

  //
  if (entity) {
    response = feedMsg(msg);
    containerMsg.classList.add("msgUser");
    inputText.value = "";
    imgEntity.src = ("../src/img/utilisateur.jpg");
    imgEntity.alt = ('Image du profil de Mr. xxx');
  } else {
    containerMsg.classList.add("msgBot");
    imgEntity.src = ("../src/img/medecin.jpg");
    imgEntity.alt = ('Image du profil de Dr. xxx');
  }

  /* // Voir si on met la date/heure etc..
  var time = new Date();
  var timeMsg = document.createElement("div");
  timeMsg.classList.add("time");

  //
  if (time.getHours() < 10)
    timeMsg.innerHTML = "0" + time.getHours();
  else
    timeMsg.innerHTML = time.getHours();

  //
  if (time.getMinutes() < 10)
    timeMsg.innerHTML += ":0" + time.getMinutes();
  else
    timeMsg.innerHTML += ":" + time.getMinutes();
  */

  contentImg.appendChild(imgEntity);

  //
  containerMsg.classList.add("msgEntity");
  containerMsg.appendChild(contentImg);
  containerMsg.appendChild(contentMsg);
  //containerMsg.appendChild(timeMsg);

  //
  contentChat.appendChild(containerMsg);

  //scrolltobot
  //contentChat.scrollTop = contentMsg.offsetTop;

  //
  checkMsg();

  return response;
}

/*
*** Fonction qui vérifie que le champ de texte est rempli pour éviter les erreurs msg
*/
function checkMsg() {
  if (inputText.value)
    sendButton.disabled = false;
  else
    sendButton.disabled = true;
}

/*
*** Fil de message
*/
function feedMsg(msg) {

  var splitMsg = msg.split(' ');
  let response = [];

  //Check tous les mots du message
  splitMsg.forEach(e => {
    switch (e.toUpperCase()) {
      case "BONJOUR":
      case "SALUT":
      case "COUCOU":
        response.push("Bonjour M. xxx, comment puis-je vous être utile aujourd'hui ?");
        break;
      case "HELP":
      case "!HELP":
        response.push("Voici la liste des commandes : xx, xx , xx.");
        break;
      default:
        break;
    }
  });

  //break si y a plusieurs commandes d'affilé

  //Si aucun mot ne correspond affiche le msg par défaut
  if (response.length === 0) {
    response = "Désolé, je dois encore apprendre pour mieux comprendre votre demande.";
  }

  return response;
}
