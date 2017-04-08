function showGraph(){
  var canvas = document.getElementById('graph'),
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
      stepw = (w / 100);
  graph_x = sessionStorage.getItem("graphx").split(",");
  graph_y = sessionStorage.getItem("graphy").split(",");
  //disegno i punti
  for(var i = 0; i < (graph_x.length - 1); i++){
    c.beginPath();
    c.arc((graph_x[i] * stepw), (graph_y[i] * steph), 3, 0, Math.PI*2, false);
    c.lineWidth = 1;
    c.fillStyle="red";
    c.strokeStyle="red";
    c.fill();
    c.stroke();
    c.closePath();
  }
  
  //disegno la posizione corrente di verde
  c.beginPath();
  c.arc((graph_x[graph_x.length - 1] * stepw), (graph_y[graph_x.length - 1] * steph), 4, 0, Math.PI*2, false);
  c.lineWidth = 2;
  c.fillStyle="green";
  c.strokeStyle="green";
  c.fill();
  c.stroke();
  c.closePath();
  
  //disegno le linee
  c.beginPath();
  for(var i = 0; i < graph_x.length; i++){
    c.lineTo((graph_x[i] * stepw), (graph_y[i] * steph));
  }
  c.lineWidth = 1;
  c.strokeStyle="black";
  c.stroke();
  c.closePath();
  
}