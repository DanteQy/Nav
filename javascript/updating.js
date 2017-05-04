//variabile che contiene l'indirizzo del server
//const myurl = "server/server.php";
const myurl = "server/example.json";
//inizializzo le variabili che conterranno il risultato della chiamata al server
var awsV = 0
    , sowV = 0
    , awaV = 35
    , mhV = 55
    , twsV = 0
    , twaV = 75
    , sogpV = 0
    , togpV = 222;
var cogV = 0
    , sogV = 0
    , hisV, lat = 45.67184
    , lon = 12.23843
    , data1 = 0
    , data2 = 0
    , graphX = 180
    , graphY = 45;
//creo la variabile di sessione per memorizzare lo storico del vento
if (!sessionStorage.hisV) {
    hisV = new Array();
    sessionStorage.setItem("hisV", hisV);
}
//creo la variabile di sessione per memorizzare i dati del grafico
if (!sessionStorage.graphx) {
    graph_x = new Array();
    sessionStorage.setItem("graphx", graph_x);
}
if (!sessionStorage.graphy) {
    graph_y = new Array();
    sessionStorage.setItem("graphy", graph_y);
}
//funzione di aggiornamento dati
function updatingData() {
    $.ajax({
        //parametri per la comunicazione con il server
        url: myurl
        , type: "GET"
        , dataType: "json"
        , crossDomain: true
        , ContentType: "application/json"
        , //funzione di successo di connessione
        success: function (data, textStatus, jqXHR) {
            //salvo i dati ricevuti nelle rispettive variabili
            //se c'? stato un errore di comunicazione con il server utilizzo i dati precedenti
            var json = JSON.parse(JSON.stringify(data));
            awsV = json.aws || awsV; //apparent wind speed
            sowV = json.sow || sowV; //speed over water
            awaV = json.awa || awaV; //apparent wind angle
            mhV = json.mh || mhV; //magnetic heading
            twsV = json.tws || twsV; //true wind speed
            twaV = json.twa || twaV; //true wind angle
            sogV = json.sog || sogV; //speed over ground
            cogV = json.cog || cogV; //curse over ground
            sogpV = json.sogp || sogpV; //target speed
            togpV = json.togp || togpV; //target angle
            lat = json.lat || lat; //latitudine
            lon = json.lon || lon; //longitudine
            data1 = json.data1 || data1; //nuova variabile
            data2 = json.data2 || data2; //nuova variabile
            graphX = json.graphx || graphX; //posizione X corrente
            graphY = json.graphy || graphY; //posizione Y corrente 
            //salvo i dati dello storico in un vettore di 100 elementi
            hisV = sessionStorage.getItem("hisV").split(",");
            if (hisV.length >= 100) hisV.shift();
            // vento reale
            hisV.push(twaV);
            //  hisV.push(cogV);
            sessionStorage.removeItem("hisV");
            sessionStorage.setItem("hisV", hisV);
            //salvo i dati del grafico in un vettore di 100 elementi
            graph_x = sessionStorage.getItem("graphx").split(",");
            //       graph_y = sessionStorage.getItem("graphy").split(",");
            if (graph_x.length >= 100) graph_x.shift();
            //       if(graph_y.length>=180)
            //         graph_y.shift();
            graph_x.push(sogV);
            //        graph_x.push(graphX);
            //       graph_y.push(graphY);
            sessionStorage.removeItem("graphx");
            //       sessionStorage.removeItem("graphy");
            sessionStorage.setItem("graphx", graph_x);
            //       sessionStorage.setItem("graphy", graph_y);
            //aggiorno le informazioni da visualizzare
            refreshInformations();
            console.log("connection success : " + textStatus);
        }
        , //funzione di errore di connessione
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("error : " + jqXHR + " : " + textStatus + " : " + errorThrown);
        }
        , //funzione di completamento di connessione
        complete: function (qXHR, textStatus) {
            console.log("complete : " + textStatus);
        }
    });
    //definisco il tempo di aggiornamento dei dati, era 1000 ho ridotto a 100
    setTimeout(updatingData, 10);
}