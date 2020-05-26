this.onmessage = e =>{
	const num = e.data;
	var mult = Array();
	var i = 1;
	
	sleep(5);

	for(;i < num;i++)
		mult[i-1] = num*i;
	
	this.postMessage(mult);
}

function sleep(s){
  var now = new Date().getTime();
  while(new Date().getTime() < now + (s*1000)){ /* non faccio niente*/ } 
}