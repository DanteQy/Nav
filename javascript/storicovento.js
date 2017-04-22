function showHistory(){
  var canvas = document.getElementById('history'),
      c = canvas.getContext('2d'),
      h = $('#contenuto').height(),
      w = ($('#contenuto').width() / 2) - 4;
  canvas.setAttribute('width', w);
  canvas.setAttribute('height', h);
  canvas.style.width = w + 'px';
  canvas.style.height = h + 'px';
  //pulisco l'area di disegno
  c.clearRect(0, 0, w, h);

  var steph = (h / 100),
      stepw = (w / 360);

  c.beginPath();
  //disegno la linea verticale a meta' area di disegno
  c.moveTo(parseInt(w *0.5), 0);
  c.lineTo(parseInt(w *0.5), h);
  c.lineWidth = 4;
  c.strokeStyle="red";
  c.stroke();
  c.closePath();

  c.beginPath();
  //disegno la linea verticale a meta' area di disegno
  c.moveTo(parseInt(w *0.25), 0);
  c.lineTo(parseInt(w *0.25), h);
  c.lineWidth = 1;
  c.strokeStyle="red";
  c.stroke();
  c.closePath();

  c.beginPath();
  //disegno la linea verticale a meta' area di disegno
  c.moveTo(parseInt(w *0.75), 0);
  c.lineTo(parseInt(w *0.75), h);
  c.lineWidth = 1;
  c.strokeStyle="red";
  c.stroke();
  c.closePath();

      c.font="19px Arial";
      c.fillText(0,w*0.5, 3*steph);
      c.fillText(180,w*0.87, 3*steph);
      c.fillText(-180,w*0.01, 3*steph);

  c.beginPath();

  hisV = sessionStorage.getItem("hisV").split(",");
//disegno lo storico del vento
//  var last=-1;

  for(var i = 0; i < hisV.length; i++){
// da usare per il vento reale compreso [-180 +180]
   c.lineTo((hisV[i] * stepw+180.0 * stepw), (i * steph));

// da usare per cog compreso [0 360]
 //  c.lineTo((hisV[i] * stepw), (i * steph));

//    if(last!=hisV[i]) {
//      c.font="28px Arial";
//      c.fillText(hisV[i],(hisV[i] * stepw), (i * steph));
//    }
//	last=hisV[i];
  }
  c.lineWidth = 2;
  c.strokeStyle="black";
  c.stroke();
  c.closePath();
}
