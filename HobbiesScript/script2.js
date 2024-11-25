window.onload = function() {
  const formData = localStorage.getItem('formData');
  if (formData) {
    const data = JSON.parse(formData);
    displayData(data.name, data.email, data.message);
  }
};

function displayData(name, email, message) {
  const table = document.getElementById('contact-table');
  const newRow = table.insertRow();
  const nameCell = newRow.insertCell();
  const emailCell = newRow.insertCell();
  const messageCell = newRow.insertCell();
  nameCell.innerText = name;
  emailCell.innerText = email;
  messageCell.innerText = message;
}