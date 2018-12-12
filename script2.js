function onStreamProcessed(data){
	console.log(data[0]);
	let outerDiv = document.querySelector("#text");
	data.forEach((student)=>{
		let div = document.createElement("div");
		div.textContent = student.name+" "+student.surname;
		outerDiv.appendChild(div);
	});
}
function onSuccess(response){
	response.json().then(onStreamProcessed);

}
function onError(error){
	console.log(error);
}

function load(){
	fetch("result.txt").then(onSuccess,onError);
}
