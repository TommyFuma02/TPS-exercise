this.onmessage = e =>{
	var secs = e.data;

	sleep(1);
	secs++;
	this.postMessage(secs); //'ritorno' il numero attuale di secondi
}

function sleep(s){
  var now = new Date().getTime();
  while(new Date().getTime() < now + (s*1000)){ /* non faccio niente*/ } 
}