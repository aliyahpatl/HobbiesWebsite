const form = document.getElementById("contact-form");
form.addEventListener("submit", handleSubmit);

function handleSubmit(event) {
  event.preventDefault();
  const formData = new FormData(event.target);
  const name = formData.get("name");
  const email = formData.get("email");
  const message = formData.get("message");
  saveData(name, email, message);
  form.reset();
}

function saveData(name, email, message) {
  const data = { name, email, message };
  const jsonData = JSON.stringify(data);
  localStorage.setItem("formData", jsonData);
}
