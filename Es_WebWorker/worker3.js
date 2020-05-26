this.onmessage = e =>{
	const number = e.data;
	var prod = 1;

	sleep(5);

	//Calcolo il prodotto dei primi number numeri
	for(i=2;i<number;i++){
		prod = prod * i;
	}

	this.postMessage(prod);
}

function sleep(s){
  var now = new Date().getTime();
  while(new Date().getTime() < now + (s*1000)){ /* non faccio niente*/ } 
}