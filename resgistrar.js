const fileInput = document.getElementById("fileInput");
const image = document.getElementById("image2");
fileInput.addEventListener("change", () => {
  const file = fileInput.files[0];
  image.src = URL.createObjectURL(file);
    const info = document.querySelector(".label1");
    info.innerHTML = fileInput.files[0].name;
});


