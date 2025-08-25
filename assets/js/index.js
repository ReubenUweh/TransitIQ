// Typing effect
const text = "Welcome to TRANSITIQ";
const typingEffect = document.querySelector(".typed-text");
const cursor = document.querySelector(".cursor"); // grab the cursor span
let index = 0;

function type() {
  if (index < text.length) {
    // Check if we’re at the start of "TRANSITIQ"
    if (text.substring(index, index + 9) === "TRANSITIQ") {
      let span = document.createElement("span");
      span.classList.add("green");
      typingEffect.appendChild(span);

      let subIndex = 0;
      function typeGreen() {
        if (subIndex < 9) {
          span.textContent += "TRANSITIQ"[subIndex];
          subIndex++;
          setTimeout(typeGreen, 150);
        } else {
          index += 9; // move past TRANSITIQ
          type();
        }
      }
      typeGreen();
      return;
    }

    typingEffect.innerHTML += text.charAt(index);
    index++;
    setTimeout(type, 200);
  } else {
    // Stop cursor blinking once typing finishes
    cursor.style.animation = "none";
    cursor.style.opacity = "0";
  }
}

type();

// back to top button and live chat
const backToTop = document.querySelector("#backToTop");
const liveChat = document.querySelector("#liveChat");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.style.display = "flex";
  } else{
    backToTop.style.display = "none";
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  })
});

liveChat.addEventListener("click", () => {
  alert("Live Chat is coming soon");
})