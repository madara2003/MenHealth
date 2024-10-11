let  data = {
	q2: {
		question: "Have you exppirienced erectile problems or decrease in libido?",
		image: "images/photo2.png"
	},

	q3: {
		question: "Are you currently taking any medications or supplements that might affect your sexual health?",
		image: "images/photo3.png"
	},
	q4: {
		question: "Do you have any underlying health conditions, such as diabetes or hypertension?",
		image: "images/photo4.png"
	},
	q5: {
		question: "Have you ever undergone any previous treatments or surgeries for sexual enhancement or related issues?",
		image: "images/photo5.png"
	},
	q6: {
		question: "How important is it for you to have access to safe and effective medication for enhancing your sexual health?",
		image: "images/photo6.png"
	},
	q7: {
		question: "Do you think your wife is satisfied with the size of your penis?",
		image: "images/photo7.png"
	}
}

console.log(data.f)

let count = 1;
let arrQuizIds = ["q1", "q2", "q3", "q4", "q5", "q6", "q7"];

const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');

function handleClick(event) {
  event.preventDefault();

  moveQuizForward();
}

button1.addEventListener('click', handleClick);
button2.addEventListener('click', handleClick);


function moveQuizForward() {
	count++
	let questionId ="q" +  count.toString() 
    arrQuizIds.forEach(element => {
		document.getElementById(element).classList.remove("button__link-selected")
	})
	if (count < 8) {
		document.querySelector('.quiz__question').textContent = data[questionId].question
		document.getElementById('quiz__img').src = data[questionId].image
	
		document.getElementById(questionId).classList.add("button__link-selected");
	}else {
		var modal = document.getElementById("myModal");
		modal.style.display = "block";
	}
}