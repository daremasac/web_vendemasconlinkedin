const texts = [
    "tu visibilidad",
    "tus ventas",
    "tus clientes",
    "tus oportunidades",
    "tus reuniones",
    "tus prospectos",
    "tus oportunidades"
];
let textIndex = 0;
let charIndex = 0;
let speed = 200; 

function typeWriter() {
    if (charIndex < texts[textIndex].length) {
        document.getElementById("typing-text").innerHTML += texts[textIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeWriter, speed);
    } else {
        charIndex = 0;
        textIndex++;
        if (textIndex < texts.length) {
            setTimeout(() => {
                document.getElementById("typing-text").innerHTML = ''; 
                typeWriter();
            }, 1000); 
        } else {
            textIndex = 0; 
            setTimeout(() => {
                document.getElementById("typing-text").innerHTML = ''; 
                typeWriter();
            }, 1000); 
        }
    }
}

window.onload = function() {
    typeWriter();
};