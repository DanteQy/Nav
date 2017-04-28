function showGraph(){
  var canvas = document.getElementById('graph'),
      c = canvas.getContext('2d'),
      h = $('#contenuto').height(),
      w = ($('#contenuto').width() / 2) ;
  canvas.setAttribute('width', w);
  canvas.setAttribute('height', h);
  canvas.style.width = w + 'px';
  canvas.style.height = h + 'px';
  //pulisco l'area di disegno
  c.clearRect(0, 0, w, h);

  var steph = (h / 100),
      stepw = (w / 10);

      c.font="19px Arial";
      c.fillText(5,w*0.5, 3*steph);
      c.fillText(10,w*0.94, 3*steph);
      c.fillText(0,w*0.01, 3*steph);


  c.beginPath();
  //disegno la linea verticale a meta' area di disegno
  c.moveTo(parseInt(w / 2), 0);
  c.lineTo(parseInt(w / 2), h);
  c.lineWidth = 1;
  c.strokeStyle="red";
  c.stroke();
  c.closePath();


  graph_x = sessionStorage.getItem("graphx").split(",");
  //disegno le linee
  c.beginPath();
  for(var i = 0; i < graph_x.length; i++){
    c.lineTo((graph_x[i] * stepw), (i * steph));
  }
  c.lineWidth = 2;
  c.strokeStyle="black";
  c.stroke();
  c.closePath();
}